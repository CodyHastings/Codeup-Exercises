<?php

$a = 200000;

$b = -86;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b; 
}

// Add code to test your functions here

$addResult = add(1, 2);

$subResult = subtract(8, 2);

$multiplyResult = multiply(8, 2);

$divideResult = divide(10, 2);

$modResult = modulus(8, 2);

echo "add = $addResult, subtract = $subResult, multiply = $multiplyResult, divide = $divideResult, modulus = $modResult" . PHP_EOL;
