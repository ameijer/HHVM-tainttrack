<?php

$array1 = array("blue" => 1, "red" => 2, "green" => 3, "purple" => 4);
$array2 = array("green" => 5, "blue" => 6, "yellow" => 7, "cyan" => 8);
var_dump(array_diff_ukey($array1, $array2, 'strcasecmp'));
