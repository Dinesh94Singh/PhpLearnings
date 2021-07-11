<?php

function myFunction($param1 = 10, $param2 = 1E3) {
    var_dump($param1);
    var_dump($param2);

    return $param1 + $param2;
}

myFunction(1, 1E10);
echo myFunction(), "\n"; // with default values. All the required values should come before the optional values with default values.

// Calling function with variable name
$variableNameFunction = "myFunction";
echo $variableNameFunction();

// Variable scope doesn't get affected, like expected.
$param1 = 20;
myFunction($param1);
echo $param1;

// Global keywords in function. Just like python, need to specify its global. In python - nonlocal

$globalVar = 20;

function myOtherFunction() {
    global $globalVar;
    $globalVar = 50;
    echo $globalVar;
}

myOtherFunction();
echo "\nAfter Function call, the value is modified, since global", $globalVar;