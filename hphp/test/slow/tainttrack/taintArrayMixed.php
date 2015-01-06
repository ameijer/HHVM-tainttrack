<?php

//test functionality of adding taints to arrays

//string
$a = 'hello';
$result = taint($a, 1);
echo $result."\n"; //1

$b = 'world';
$result = taint($b, 2);
echo $result."\n";//2

//safe untainted variable
$c = 'clean';

//load all of them into an array
$arr = array("a" => $a,
		"b" => $b,
		"c" => $c);

//now, we should expect the array itself to be untainted(?);
echo gettaints($arr)."\n";//3

//check that the taints of the variables are unaffected when accessed via array indexing
echo $arr["a"]."\n";//4
echo gettaints($arr["a"])."\n";//5
echo gettaints($arr["b"])."\n";//6
echo gettaints($arr["c"])."\n";//7

//let's extract an array element and modify it with a new taint
$d = $arr["c"];
$result = taint($d, 6);
echo $result."\n";//8
echo gettaints($arr["c"])."\n";//9
echo gettaints($d)."\n";//20



