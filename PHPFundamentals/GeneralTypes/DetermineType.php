<?php

define('CHECK_CONSTANT', "Yes I am a constant!");


$intVar = 1234;
$stringVar = "I'm a string";
$boolVar = false;
$floatVar = 12.34;

echo is_int($intVar);
echo is_string($stringVar);
echo is_bool($boolVar);
echo is_float($floatVar);

echo defined('CHECK_CONSTANT');

//if variable is the correct type printout will be a 1/ if not, it prints nothing.
?>