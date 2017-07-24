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
	return gettype($arg) . PHP_EOL;

}

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
$output = inspect($num1) . PHP_EOL;
echo "The $output is $num1" .PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;
$output = inspect($num2);
echo "The $output is $num2" .PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;
$output = inspect($num3);
echo "The $output is $num3" .PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;
$output = inspect($num4);
echo "The $output is $num4" .PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;
$output = inspect($null);
echo "The $output is $null" .PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;
$output = inspect($bool1);
echo "The $output is $bool1" .PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;
$output = inspect($bool2);
echo "The $output is $bool2" .PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;
$output = inspect($string1); 
echo "The $output is $string1" .PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;
$output = inspect($string2);
echo "The $output is $string2" .PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
$output = inspect($array1);
echo "The $output is $array1" .PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
$output = inspect($array2);
echo "The $output is $array2" .PHP_EOL;