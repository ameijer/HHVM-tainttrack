<?php

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

?>



