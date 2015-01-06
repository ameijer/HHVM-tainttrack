<?php




//int
$b = 1;
taint($b, 2);
echo("taint of b: ".gettaints($b)."\n");

//untainted number
$c = 2;

$d = $c + $b;

echo("taint of d: ".gettaints($d)."\n");
echo("Value of d: ".$d."\n");


