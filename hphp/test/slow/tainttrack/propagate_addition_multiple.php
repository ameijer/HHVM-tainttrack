<?php




//int
$b = 1;
taint($b, 2);
echo("taint of b: ".gettaints($b)."\n");

//different tainted number
$c = 2;
taint($c, 33);

$d = $c + $b;

echo("taint of d: ".gettaints($d)."\n");
echo("Value of d: ".$d."\n");


