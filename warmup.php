<?php


$result = 0;

$testArray = [2, 1, -5, "bob"];

foreach ($testArray as $test) {
	if (is_numeric($test) && $test % 2 == 0) {
		$result = abs($test) * $result;
	} elseif (is_numeric($test)) {
		$result = abs($test) + $result;
	} else {
		echo $result .PHP_EOL;
	}
}