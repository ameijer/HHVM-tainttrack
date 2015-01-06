<?php

//test functionality of propagating taint through strings

//string
$a = 'hello';
$result = taint($a, 1);
echo $result."\n"; //1

$b = 'world';
$result = taint($b, 2);
echo $result."\n";//2

$char = $a[0];
$char2 = $b[0];

$a[0] = 'y';

echo $a."\n";//3

//we expect the tainted strings to be unchanged
echo gettaints($a)."\n";//4
echo gettaints($b)."\n";//5



//the chars extracted should have the same taints as the parents
echo gettaints($char)."\n";//6
echo gettaints($char2)."\n";//7


//now, a tainted char is added to a string
//string should take on the same taint
$cl = 'clean string'; 
$dirty = 'd';

taint($dirty, 4);

$cl[0] = $dirty; 

echo gettaints($cl)."\n";//8


//combining some taints

$b[0] = $dirty;

echo $b."\n";//9

echo gettaints($b)."\n";//10

//test out substring functions

$suba = substr($a, 1);
echo $suba."\n";//11
echo gettaints($suba)."\n";//12

//experimental: see if tainted index yeilds tainted string data 
$index = 3;
taint($index, 10);

$target = "notdeleted";
$result = substr($target, $index);
echo $result."\n";//13
echo gettaints($result)."\n";//14






