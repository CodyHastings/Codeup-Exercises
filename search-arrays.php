<?php

// Create a function that returns TRUE or FALSE if an array value is found. 
// Search for Tina and Bob in $names. Make sure it works as expected.

// Create a function to compare 2 arrays that returns the number of values in common 
// between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function existsInArray($needle, $haystack) 
{
	if (array_search($needle, $haystack) === false) {
		return "False";	
	} else {
		return "True";
	}
}

$result1 = existsInArray('Tina', $names);

$result2 = existsInArray('Bob', $names);


function compareArrays($arr1, $arr2){
	$sameName = count(array_intersect($arr1, $arr2));
	return $sameName;
}

$comparison = compareArrays($names, $compare);

echo "the result of Tina is $result1" . PHP_EOL;
echo "the result of Bob is $result2" . PHP_EOL;
echo "There are $comparison of the same name in arrays" . PHP_EOL;
