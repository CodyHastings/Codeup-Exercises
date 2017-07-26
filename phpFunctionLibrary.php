<?php

function appendToFile($filename, $appendMessage)
{
	$handle = fopen($filename, 'a');
	fwrite($handle, $appendMessage);
	fclose($handle);

}


function isEven($input)
{
	if(is_numeric($input) && $input % 2 === 0){
		return true;
	} 
	return false;
	
}

function isVowel($input)
{
	$lowinput = strtolower($input);
	if($lowinput === "a" || $lowinput === "e" || $lowinput === "i" || $lowinput === "o" || $lowinput === "u"){
		return true;
	} 
	return false;
}

function first($input)
{
	if (is_string($input)) {
		$trimmedInput = trim($input);
		return $trimmedInput[0];
	} else if (is_array($input)) {
		return current($input);
	}
}

function second($input)
{
	if (is_string($input)) {
		return $input[1];
	} else if (is_array($input)) {
		return next($input);
	}
}

function last($input)
{
	if (is_string($input)) {
		return substr($input, -1);
	} else if (is_array($input)) {
		return end($input);
	}
}

function reverse($input)
{
	if (is_string($input)) {
		return strrev($input);
	} else if (is_array($input)) {
		return array_reverse($input);
	}
}

function random($input)
{
	if (is_string($input)) {
		$shuffleStr = str_shuffle($input);
		return $shuffleStr[0];
	} else if (is_array($input)) {
		$randKey = array_rand($input);
		return $input[$randKey];
	}
}

$testArray = ['jim' => 'Halbert', 'pam' => 'Halbert', 'dwight'];
$testString = " Jim, Halpert ";

// if (isEven(5256000)){
// 	echo "5256000 is even!!!!!" . PHP_EOL;
// }

// print_r(first($testArray)) . PHP_EOL;
// print_r(second($testArray)) . PHP_EOL;
// print_r(reverse($testArray)) . PHP_EOL;
// print_r(random($testArray)) . PHP_EOL;


// if (isVowel("A")) {
// 	echo "It's a vowel!!!" . PHP_EOL;
// } else {
// 	echo "its not a vowel" . PHP_EOL;
// }
// echo first($testString) . PHP_EOL;
// echo second($testString) . PHP_EOL;
// echo last($testString) . PHP_EOL;
// echo reverse($testString) . PHP_EOL;
// echo random($testString) . PHP_EOL;










