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

//now check that the taints were all introduced 


assert(gettaints($a) == pow(2, 1), "Retrieved taint for \$a does not match.");
assert(gettaints($b) == pow(2, 2), "Retrieved taint for \$b does not match.");
assert(gettaints($c) == pow(2, 3), "Retrieved taint for \$c does not match.");
assert(gettaints($d) == pow(2, 4), "Retrieved taint for \$d does not match.");
assert(gettaints($e) == pow(2, 5), "Retrieved taint for \$e does not match.");
assert(gettaints($f) == pow(2, 6), "Retrieved taint for \$f does not match.");
assert(gettaints($g) == pow(2, 7), "Retrieved taint for \$g does not match.");

