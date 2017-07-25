<?php

// Copy search-arrays.php and rename it merge-arrays.php.

// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().
// Test your combine_arrays() function with $names and $compare. The resulting array should look like:

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isInArray($needle, $haystack) 
{
    // if $needle exists anywhere in the array $haystack, return true.
    // otherwise, return false.

    // be CAREFUL b/c array_search returns the index and that index may be zero

    if(array_search($needle, $haystack) === false) {
        return false;
    } else {
        return true;
    }
}


if(isInArray("Tina", $names)) {
    echo "Tina is in the array" . PHP_EOL;
} else {
    echo "Tina aint in the array" . PHP_EOL;
}

if(isInArray("Bob", $names)) {
    echo "Bob is in the array, babay and he's here to stay, yay!" . PHP_EOL;
} else {
    echo "Bob aint in the array." . PHP_EOL;
}



// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().
function numberOfValuesInCommon($array1, $array2)
{
    $count = 0;

    // $value first time through the array is the string 'Tina'
    foreach($array1 as $value) {
        if(isInArray($value, $array2)) {
            $count++;
        }
    }

    return $count;
}

echo "The number of values that \$names and \$compare have in common is " . numberOfValuesInCommon($names, $compare) . PHP_EOL;

function combine_arrays($array1, $array2) 
{
	$newArray = [];
	foreach ($array1 as $key => $value) {
		if (isInArray($value, $array2)) {
			array_push($newArray, $array1[$key]);
		} else {
			array_push($newArray, $array1[$key]);
			array_push($newArray, $array2[$key]);
		}

	}

	return $newArray;
}

$newArray = combine_arrays($names, $compare);

print_r($newArray);


