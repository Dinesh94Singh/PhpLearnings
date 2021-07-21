<?php

$currency = 'dollar';

$interpolatedString = "A $currency saved is a $currency earned.";

echo $interpolatedString;
echo "\n";

// String concat using . operator
echo $interpolatedString." - Dinesh";
echo "\n";
echo "{$interpolatedString} - Dinesh";
echo "\n";

# ------------------- String functions ------------------------

echo substr($interpolatedString, 0, 10)."\n"; // need to provide the length as 3rd argument. Prints 0 - 9 (inclusive) chars
echo substr($interpolatedString, -10)."\n"; // last 10 chars
echo strtoupper($interpolatedString)."\n";
echo strtolower($interpolatedString)."\n";

echo strlen($interpolatedString)." is the string length \n";

echo strpos($interpolatedString, "saved")."\n"; // similar to indexOf in java and "in" in python
echo strpos($interpolatedString, "Rupee")." - Returns empty if not found \n"; // If not found, returns empty
var_dump(strpos($interpolatedString, "Rupee")); // returns a bool false
echo strpos($interpolatedString, "saved", 5)."\n"; // find the substring saved in haystack string starting from index - 10

echo str_replace("dollar", "rupee", $interpolatedString, $count)."\n"; // $count is how many times, it got replaced (optional parameter)
echo $interpolatedString."\n"; // actual string doesn't change. You are getting a new string
echo $count;

$charArray = str_split($interpolatedString, 8); // second param is optional, which will split the string into specified length
print_r($charArray); // prints the char array instead of hash