/*
+----------------------------------------------------------------------+
| HipHop for PHP |
+----------------------------------------------------------------------+
| Copyright (c) 2010-2014 Facebook, Inc. (http://www.facebook.com) |
| Copyright (c) 1997-2010 The PHP Group |
+----------------------------------------------------------------------+
| This source file is subject to version 3.01 of the PHP license, |
| that is bundled with this package in the file LICENSE, and is |
| available through the world-wide-web at the following url: |
| http://www.php.net/license/3_01.txt |
| If you did not receive a copy of the PHP license and are unable to |
| obtain it through the world-wide-web, please send a note to |
| license@php.net so we can mail you a copy immediately. |
+----------------------------------------------------------------------+
 */

//Ameijer
//15 Oct 2014
#include <sys/types.h>
#include <sys/stat.h>
#include <unistd.h>
#include <string>
#include "hphp/runtime/vm/bytecode.h"

#include "hphp/runtime/base/base-includes.h"
#include "hphp/runtime/base/stream-wrapper-registry.h"
#include "hphp/runtime/base/tv-comparisons.h"
#include "hphp/runtime/base/tv-conversions.h"
#include "hphp/runtime/base/tv-arith.h"
#include "hphp/compiler/builtin_symbols.h"
#include "hphp/runtime/vm/event-hook.h"
#include "hphp/runtime/vm/repo.h"
#include "hphp/runtime/vm/repo-global-data.h"
#include "hphp/runtime/base/repo-auth-type-codec.h"
#include "hphp/runtime/vm/func-inline.h"
#include "hphp/runtime/vm/jit/mc-generator.h"
#include "hphp/runtime/vm/jit/translator.h"
#include "hphp/runtime/vm/jit/translator-runtime.h"
#include "hphp/runtime/vm/srckey.h"
#include "hphp/runtime/vm/member-operations.h"
#include "hphp/runtime/base/class-info.h"
#include "hphp/runtime/base/code-coverage.h"
#include "hphp/runtime/base/unit-cache.h"
#include "hphp/runtime/base/base-includes.h"
#include "hphp/runtime/base/execution-context.h"
#include "hphp/runtime/base/runtime-option.h"
#include "hphp/runtime/base/mixed-array.h"
#include "hphp/runtime/base/strings.h"
#include "hphp/runtime/base/apc-typed-value.h"
#include "hphp/util/text-util.h"
#include "hphp/util/trace.h"
#include "hphp/util/debug.h"
#include "hphp/runtime/base/stat-cache.h"
#include "hphp/runtime/vm/debug/debug.h"
#include "hphp/runtime/vm/hhbc.h"
#include "hphp/runtime/vm/php-debug.h"
#include "hphp/runtime/vm/debugger-hook.h"
#include "hphp/runtime/vm/runtime.h"
#include "hphp/runtime/vm/runtime-type-profiler.h"
#include "hphp/runtime/base/rds.h"
#include "hphp/runtime/vm/treadmill.h"
#include "hphp/runtime/vm/type-constraint.h"
#include "hphp/runtime/vm/unwind.h"
#include "hphp/runtime/vm/jit/translator-inline.h"
#include "hphp/runtime/vm/native.h"
#include "hphp/runtime/vm/resumable.h"
#include "hphp/runtime/ext/ext_math.h"
#include "hphp/runtime/ext/ext_string.h"
#include "hphp/runtime/ext/ext_closure.h"
#include "hphp/runtime/ext/ext_generator.h"
#include "hphp/runtime/ext/ext_function.h"
#include "hphp/runtime/ext/std/ext_std_variable.h"
#include "hphp/runtime/ext/ext_array.h"
#include "hphp/runtime/ext/ext_apc.h"
#include "hphp/runtime/ext/asio/async_function_wait_handle.h"
#include "hphp/runtime/ext/asio/async_generator.h"
#include "hphp/runtime/ext/asio/async_generator_wait_handle.h"
#include "hphp/runtime/ext/asio/static_wait_handle.h"
#include "hphp/runtime/ext/asio/wait_handle.h"
#include "hphp/runtime/ext/asio/waitable_wait_handle.h"
#include "hphp/runtime/ext/reflection/ext_reflection.h"
#include "hphp/runtime/base/stats.h"
#include "hphp/runtime/vm/type-profile.h"
#include "hphp/runtime/server/source-root-info.h"
#include "hphp/runtime/base/extended-logger.h"
#include "hphp/runtime/base/memory-profile.h"
#include "hphp/runtime/base/runtime-error.h"
#include "hphp/runtime/base/container-functions.h"

#include "hphp/system/systemlib.h"

namespace HPHP {

//currrently unused
//static String HHVM_FUNCTION(readtopofstack) {
//	String s = std::to_string(vmStack().count());
//	return s;
//}
//
//
//static String HHVM_FUNCTION(getlocal0) {
//	TypedValue* fr = frame_local(vmfp()->sfp(), 0);
//	String s = fr->pretty();
//	return s;
//}

//called by php code to taint a certain variable
static bool HHVM_FUNCTION(settaintsource, Variant& variableToTaint, int64_t taint_make_index) {

	//assuming max of 64 taint tags
	if(taint_make_index > 63 || taint_make_index < 0){
		return false;
	}

	//we can reliably expect this to be a kind of ref since we ask HHVM to pass by reference
	if(variableToTaint.getType() != KindOfRef){
		return false;
	}

	variableToTaint.settainttag(taint_make_index);

	uint64_t setArray = variableToTaint.getTaintArrayReadOnly();

	//check that the variable is set
	uint64_t tagset = setArray & 1L<<taint_make_index;

	return tagset > 0;

}

//called by php code to clear the taint on a certain variable
static bool HHVM_FUNCTION(cleartaintsource, Variant& variableToClear, int64_t taint_clear_index) {

	//assuming max of 64 taint tags
	if(taint_clear_index > 63 || taint_clear_index < 0){
		return false;
	}

	variableToClear.cleartainttag(taint_clear_index);

	uint64_t clearArray = variableToClear.getTaintArrayReadOnly();

	//check that the variable is clear
	uint64_t tagclear = clearArray & 1L<<taint_clear_index;


	return tagclear == 0;

}

//called by php code to set array storing taint tags to be zeroed out
//i.e. int value is 0
static bool HHVM_FUNCTION(clearalltaints, Variant& variableToClear){

	variableToClear.clearallttags();

	uint64_t clearArray = variableToClear.getTaintArrayReadOnly();

	return clearArray == 0;


}

//called by php code to set array storing taint tags to be all set to 1
//i.e. int value is 2^64 - 1
static bool HHVM_FUNCTION(setalltaints, Variant& variableToTaint){

	variableToTaint.setallttags();

	uint64_t setArray = variableToTaint.getTaintArrayReadOnly();

	uint64_t mask = ~0;

	if(setArray ^ mask){
		//Then there was something not set to 1 in the taint array
		return false;
	} else return true;


}

//called by php code to retrieve taint array of the specified variable
//read only!!
static int64_t HHVM_FUNCTION(gettaintarray, Variant& variableToGet){

	return (int64_t) variableToGet.getTaintArrayReadOnly();

}

class tainttrackExtension : public Extension {
 public:
  tainttrackExtension() : Extension("tainttrack", "0.0.1") {}
  virtual void moduleInit() {
	  HHVM_FE(cleartaintsource);
	  HHVM_FE(clearalltaints);
	  HHVM_FE(setalltaints);
	  HHVM_FE(gettaintarray);
	  HHVM_FE(settaintsource);
    loadSystemlib();
  }
} s_tainttrack_extension;


//////////////////////////////////////////////////////////////////////////////
} // namespace HPHP
