<?php

// TODO: Create your inspect() function here

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;



function inspect($arg)
{
	if (is_null($arg)) {
		$message = 'The Value is NULL' . PHP_EOL;
	} elseif (is_array($arg) && !empty($arg)) {
		$message = 'The Value is an Array' . PHP_EOL;
	} elseif (empty($arg) && is_string($arg)) {
		$message = 'The string is empty' . PHP_EOL;
	} elseif (is_bool($arg) && $arg == true) {
		$message = "The argument is a boolean and is TRUE "  . PHP_EOL;
	} elseif (is_bool($arg) && $arg == false) {
		$message = "The argument is a boolean and is FALSE "  . PHP_EOL;
	} elseif (empty($arg) && is_array($arg)) {
		$message = "The array is empty" . PHP_EOL;
	} else {	
		$message = "The $arg is " . gettype($arg) . PHP_EOL;	
	}
	return $message;
}

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1) . PHP_EOL;


echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2) . PHP_EOL;


echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3) . PHP_EOL;


echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4) . PHP_EOL;


echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null) . PHP_EOL;


echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;


echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;


echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1) . PHP_EOL; 


echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2) . PHP_EOL;


echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;


echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;
