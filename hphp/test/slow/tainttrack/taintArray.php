<?php

//test functionality of adding taints to arrays

//string
$a = 'hello';
$result = taint($a, 1);
echo $result."\n";

$b = 'world';
$result = taint($b, 2);
echo $result."\n";

//safe untainted variable
$c = 'clean';

//load all of them into an array
$arr = array();

$arr[] = $a;
$arr[] = $b;
$arr[] = $c;

//now, we should expect the array itself to be untainted(?);
echo gettaints($arr)."\n";

//check that the taints of the variables are unaffected when accessed via array indexing
echo $arr[0]."\n";
echo gettaints($arr[0])."\n";
echo gettaints($arr[1])."\n";
echo gettaints($arr[2])."\n";

//let's extract an array element and modify it with a new taint
$d = $arr[2];
$result = taint($d, 6);
echo $result."\n";
echo gettaints($arr[2])."\n";
echo gettaints($d)."\n";



