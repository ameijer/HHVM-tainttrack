/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-2014 Facebook, Inc. (http://www.facebook.com)     |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
 */
#include "hphp/runtime/base/typed-value.h"

#include "hphp/util/trace.h"
#include "hphp/runtime/base/ref-data.h"
#include "hphp/runtime/vm/class.h"
#include "hphp/runtime/base/array-data.h"
#include "hphp/runtime/base/string-data.h"
#include "hphp/runtime/base/object-data.h"
#include "hphp/runtime/base/resource-data.h"

namespace HPHP {

//////////////////////////////////////////////////////////////////////

std::string TypedValue::pretty() const {
	char buf[20];
	sprintf(buf, "0x%lx", long(m_data.num));
	return Trace::prettyNode(tname(m_type).c_str(), std::string(buf));
}

//////////////////////////////////////////////////////////////////////

uint64_t TypedValue::addttags(uint64_t toAdd){
	TypedValue* toGet;
		//we want to taint the thing we are pointing to, naturally
		if(m_type == KindOfRef){
			RefData* myData  = m_data.pref;

			toGet = myData->tv();
			//recursive call to take care of the actual value
			return toGet->addttags(toAdd);
		} else {
			toGet = this;
		}

		this->checkandsetvalidtag();
		toGet->tTags[1] |= toAdd;
		return this->tTags[1];

}

uint64_t TypedValue::settainttag(uint8_t index){



	TypedValue* toMod;
	//we want to taint the thing we are pointing to, naturally
	if(m_type == KindOfRef){
		RefData* myData  = m_data.pref;

		toMod = myData->tv();
		//recursive call to take care of the actual value
		return toMod->settainttag(index);
	} else {
		toMod = this;
	}

	//make sure nobody tries hacking
	if(index > 63){
		return 0;
	}

	this->checkandsetvalidtag();
	uint64_t tags =  toMod->tTags[1];

	uint64_t newTag_padded = (1L<<index);
					//bitwise op to set taint tag
					tags = tags | newTag_padded;


	toMod->tTags[1] = tags;
	const uint64_t retval = toMod->tTags[1];
	return retval;
}

void TypedValue::checkandsetvalidtag(){
	if(this->tTags[0] != VALID_TAG){
		//then we need to scrub any tags that were previously in this TV
		//they are most likely junk
		this->clearallttags();
		this->tTags[0] = VALID_TAG;
	}

}

uint64_t TypedValue::getTaintArrayReadOnly(){

	TypedValue* toGet;
	//we want to taint the thing we are pointing to, naturally
	if(m_type == KindOfRef){
		RefData* myData  = m_data.pref;

		toGet = myData->tv();
		//recursive call to take care of the actual value
		return toGet->getTaintArrayReadOnly();
	} else {
		toGet = this;
	}

	this->checkandsetvalidtag();
	const uint64_t tags =  toGet->tTags[1];

	return tags;
}

uint64_t TypedValue::cleartainttag(uint8_t index){

	TypedValue* toGet;
	//we want to taint the thing we are pointing to, naturally
	if(m_type == KindOfRef){
		RefData* myData  = m_data.pref;

		toGet = myData->tv();
		//recursive call to take care of the actual value
		return toGet->cleartainttag(index);
	} else {
		toGet = this;
	}

	//make sure nobody tries hacking
	if(index > 63){
		return 0;
	}
	this->checkandsetvalidtag();
	uint64_t *tags =  &(toGet->tTags[1]);

	//bitwise op to set taint tag
	*tags = *tags & ~(1<<index);

	const uint64_t retval = *tags;
	return retval;
}

uint64_t TypedValue::setallttags(){

	TypedValue* toGet;
	//we want to taint the thing we are pointing to, naturally
	if(m_type == KindOfRef){
		RefData* myData  = m_data.pref;

		toGet = myData->tv();
		//recursive call to take care of the actual value
		return toGet->setallttags();
	} else {
		toGet = this;
	}

	this->checkandsetvalidtag();
	uint64_t mask = ~0;

	uint64_t *tags =  &(toGet->tTags[1]);

	//bitwise op to set taint tag
	*tags = *tags | mask;

	const uint64_t retval = *tags;
	return retval;

}

uint64_t TypedValue::setttags(uint64_t tags){

	TypedValue* toGet;
	//we want to taint the thing we are pointing to, naturally
	if(m_type == KindOfRef){
		RefData* myData  = m_data.pref;

		toGet = myData->tv();
		//recursive call to take care of the actual value
		return toGet->setttags(tags);
	} else {
		toGet = this;
	}

	this->checkandsetvalidtag();
	toGet->tTags[1] = tags;
	return this->tTags[1];
}

uint64_t TypedValue::clearallttags(){

	TypedValue* toGet;
	//we want to taint the thing we are pointing to, naturally
	if(m_type == KindOfRef){
		RefData* myData  = m_data.pref;

		toGet = myData->tv();
		//recursive call to take care of the actual value
		return toGet->clearallttags();
	} else {
		toGet = this;
	}
	uint64_t mask = 0;

	uint64_t *tags =  &(toGet->tTags[1]);

	//bitwise op to set taint tag
	*tags = *tags & mask;

	const uint64_t retval = *tags;
	return retval;
}
}
