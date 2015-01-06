<?php

assert_options(ASSERT_ACTIVE,1);
assert_options(ASSERT_WARNING,1);

//test adding taint on all basic PHP types

//string
$a = 'hi';
$result = taint($a, 1);
assert($result == 1, "did not set taint of \$a properly");

//int
$b = 1337;
$result = taint($b, 2);
assert($result == 1, "did not set taint of \$b properly");

//float
$c = 123.456;
$result = taint($c, 3);
assert($result == 1, "did not set taint of \$c properly");

//bool
$d = true;
$result = taint($d, 4);
assert($result == 1, "did not set taint of \$d properly");

//array
$e = array("Hello","world");
$result = taint($e, 5);
assert($result == 1, "did not set taint of \$e properly");

//from http://www.w3schools.com/php/php_datatypes.asp
class Car
{
  var $color;
  function Car($color="green") {
    $this->color = $color;
  }
  function what_color() {
   return $this->color;
 }
}

//object 
$f = new Car("blue");
$result = taint($f, 6);
assert($result == 1, "did not set taint of \$f properly");

//NULL
$g = null;
$result = taint($g, 7);
assert($result == 1, "did not set taint of \$g properly");

//now we will delete the taints
$result = untaint($a, 1);
assert($result == 1, "did not untaint \$a properly");

$result = untaint($b, 2);
assert($result == 1, "did not untaint \$b properly");

$result = untaint($c, 3);
assert($result == 1, "did not untaint \$c properly");

$result = untaint($d, 4);
assert($result == 1, "did not untaint \$d properly");

$result = untaint($e, 5);
assert($result == 1, "did not untaint \$e properly");

$result = untaint($f, 6);
assert($result == 1, "did not untaint \$f properly");

$result = untaint($g, 7);
assert($result == 1, "did not untaint \$g properly");

assert(gettaints($a) == 0, "Taints of \$a not cleared properly.");
assert(gettaints($b) == 0, "Taints of \$b not cleared properly.");
assert(gettaints($c) == 0, "Taints of \$c not cleared properly.");
assert(gettaints($d) == 0, "Taints of \$d not cleared properly.");
assert(gettaints($e) == 0, "Taints of \$e not cleared properly.");
assert(gettaints($f) == 0, "Taints of \$f not cleared properly.");
assert(gettaints($g) == 0, "Taints of \$g not cleared properly.");

//part 2, taint the variables with 2 tags, but only remove one
$result = taint($a, 1);
assert($result == 1, "did not set taint of \$a properly");
$result = taint($a, 56);
assert($result == 1, "did not set taint of \$a properly");

$result = taint($b, 2);
assert($result == 1, "did not set taint of \$b properly");
$result = taint($b, 57);
assert($result == 1, "did not set taint of \$b properly");

$result = taint($c, 3);
assert($result == 1, "did not set taint of \$c properly");
$result = taint($c, 58);
assert($result == 1, "did not set taint of \$c properly");

$result = taint($d, 4);
assert($result == 1, "did not set taint of \$d properly");
$result = taint($d, 59);
assert($result == 1, "did not set taint of \$d properly");
 
$result = taint($e, 5);
assert($result == 1, "did not set taint of \$e properly");
$result = taint($e, 60);
assert($result == 1, "did not set taint of \$e properly");

$result = taint($f, 6);
assert($result == 1, "did not set taint of \$f properly");
$result = taint($f, 61);
assert($result == 1, "did not set taint of \$f properly");

$result = taint($g, 7);
assert($result == 1, "did not set taint of \$g properly");
$result = taint($g, 62);
assert($result == 1, "did not set taint of \$g properly");

//check that both taint tags added properly
assert(gettaints($a) == (pow(2, 1) + pow(2, 56)), "Multiple tags not set properly on \$a");

$result = untaint($a, 1);
assert($result == 1, "did not untaint \$a properly");
assert(gettaints($a) == pow(2, 56), "Multiple tags not deleted properly on \$a");

 
