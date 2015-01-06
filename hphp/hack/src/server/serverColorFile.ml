(**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 *)

open Utils

let go f_in oc =
  assert (!(Typing_defs.type_acc) = PMap.empty);
  Typing_defs.accumulate_types := true;
  ServerIdeUtils.check_file_input f_in;
  let pos_ty_m = !(Typing_defs.type_acc) in
  Typing_defs.accumulate_types := false;
  Typing_defs.type_acc := PMap.empty;
  let fn_opt = match f_in with
    | ServerMsg.FileContent _ -> None
    | ServerMsg.FileName fn -> Some fn
  in
  let result = Coverage_level.mk_level_map fn_opt pos_ty_m in
  Marshal.to_channel oc result [];
  flush oc
