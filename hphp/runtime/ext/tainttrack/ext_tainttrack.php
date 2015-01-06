<?hh
<<__Native>>
function settaintsource(mixed &$variableToTaint, int $indexOfTaintMark): bool;

<<__Native>>
function cleartaintsource(mixed &$variableToClear, int $indexOfTaintMark): bool;

<<__Native>>
function clearalltaints(mixed &$variableToClear): bool;

<<__Native>>
function setalltaints(mixed &$variableToTaint): bool;

<<__Native>>
function gettaintarray(mixed &$variableToGet): int;

function taint(&$vartotaint, $indexoftaintmark){
 return settaintsource(&$vartotaint, $indexoftaintmark);
}

function untaint(&$vartountaint, $indexoftaintmarktoremove){
 return cleartaintsource(&$vartountaint, $indexoftaintmarktoremove);
}

function clearallt(&$vartoclear){
 return clearalltaints(&$vartoclear);
}

function setallt(&$vartoset){
 return setalltaints(&$vartoset);
}

function gettaints(&$vartoget){
 return gettaintarray(&$vartoget);
}