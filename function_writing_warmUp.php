<?php

function capitalizing($string) 
{
	$string = strtolower($string);
	return ucfirst($string);
}


$stringCap = capitalizing('aBc');

echo $stringCap . PHP_EOL;




function greeting($firstName, $lastName)
{
	$output = "";
	if (!is_string($firstName) || !is_string($lastName)) 
	{
		$output =  "Sorry, two valid names were not given" . PHP_EOL;
	} else 
	{
		$output =  "Hello $firstName $lastName!" . PHP_EOL;
	}
	return $output;
}

echo greeting(123, 'Hastings');