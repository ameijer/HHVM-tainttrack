<?php


//test adding taint on all basic PHP types

//string
$a = 'hi';
taint($a, 1);

$b = $a;

echo("taint of b: ".gettaints($b)."\n");

//int
$c = 24;
taint($c, 2);

$b = $c;

echo("taint of b: ".gettaints($b));
