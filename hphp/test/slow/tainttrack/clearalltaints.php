<?php

assert_options(ASSERT_ACTIVE,1);
assert_options(ASSERT_WARNING,1);

//test adding taint on all basic PHP types

//string
$a = 'hi';
$result = setallt($a);
assert($result == 1, "did not set taint of \$a properly");

//int
$b = 1337;
$result = setallt($b);
assert($result == 1, "did not set taint of \$b properly");

//float
$c = 123.456;
$result = setallt($c);
assert($result == 1, "did not set taint of \$c properly");

//bool
$d = true;
$result = setallt($d);
assert($result == 1, "did not set taint of \$d properly");

//array
$e = array("Hello","world");
$result = setallt($e);
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
$result = setallt($f);
assert($result == 1, "did not set taint of \$f properly");

//NULL
$g = null;
$result = setallt($g);
assert($result == 1, "did not set taint of \$g properly");

//now clear the taints 
clearallt($a);
clearallt($b);
clearallt($c);
clearallt($d);
clearallt($e);
clearallt($f);
clearallt($g);


assert(gettaints($a) == 0, "Retrieved taint for \$a does not match.");
assert(gettaints($b) == 0, "Retrieved taint for \$b does not match.");
assert(gettaints($c) == 0, "Retrieved taint for \$c does not match.");
assert(gettaints($d) == 0, "Retrieved taint for \$d does not match.");
assert(gettaints($e) == 0, "Retrieved taint for \$e does not match.");
assert(gettaints($f) == 0, "Retrieved taint for \$f does not match.");
assert(gettaints($g) == 0, "Retrieved taint for \$g does not match.");

