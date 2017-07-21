<?php


fwrite(STDOUT, "Pick two numeric numbers for arithmetic operations. \n");

fwrite(STDOUT, "First Number? \n");
$firstNumber = trim(fgets(STDIN));

fwrite(STDOUT, "Second Number? \n");
$secondNumber = trim(fgets(STDIN));




function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
    return $a + $b;
	
	} else {
		echo throwErrorMessage();
	}
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
    return $a - $b;
	
	} else {
		echo throwErrorMessage();
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
    return $a * $b;
	
	} else {
		echo throwErrorMessage();
	}
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
    return $a / $b;
	
	} else {
		echo throwErrorMessage();
	}
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
	return $a % $b; 
	
	} else {
		echo throwErrorMessage();
	}
}

function throwErrorMessage(){
	return "ERROR: Both arguments must be numbers!" . PHP_EOL;
}


// Add code to test your functions here

$addResult = add($firstNumber, $secondNumber);

$subResult = subtract($firstNumber, $secondNumber);

$multiplyResult = multiply($firstNumber, $secondNumber);

$divideResult = divide($firstNumber, $secondNumber);

$modResult = modulus($firstNumber, $secondNumber);

echo "added = $addResult, subtracted = $subResult, multiplied = $multiplyResult, divided = $divideResult, modulused = $modResult" . PHP_EOL;



