<?php

# Comment
// Comment
/* Comment */

echo "Hello World \n";

// Case Sensitive and weekly typed language
$varOne = 1;
$varTwo = "one";

echo $varOne, "\n";
echo $varTwo, "\n";

// another way to print value and specify which type. Usefull for objects printing

// Octale numbers
$intNum = 9;
$octNum = 01234;
$hexNum = 0xABC;
$binaryNum = 01110;
var_dump($intNum);
var_dump($octNum);
var_dump($hexNum);
var_dump($binaryNum);

// floating number
$floatNum = 1.23;
var_dump($floatNum);

// Scientific number
$scientific = 0.1234E-3;
var_dump($scientific);

// No support for unsigned integers. If overflowing value, then auto-casts to next larger type (int) -> float

// Booleans
$booleanVariable = true;
var_dump($booleanVariable);
$intZero = 0;
$intOne = 1;
var_dump((bool) $intOne); // bool -> similar to c
var_dump((bool) $intZero); // If zero -> False, everything else is true

// Constants - These are global variables, which can be accessed from everywhere.
define('NEW_CONSTANT', 1E10);
echo NEW_CONSTANT, "\n";
var_dump(NEW_CONSTANT);

// Defined Function
$cond1 = is_int($intNum);
var_dump($cond1);
$cond2 = is_bool($cond1);
var_dump($cond2);
$cond3 = is_float(NEW_CONSTANT);
var_dump($cond3);
$cond4 = defined('NEW_CONSTANT');
var_dump($cond4);