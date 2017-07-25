<?php

// Copy search-arrays.php and rename it merge-arrays.php.

// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().
// Test your combine_arrays() function with $names and $compare. The resulting array should look like:

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combine_arrays($names, $compare) 
{
	if (the arrays have the same value at the same index) {
		// it should only be added once
	} else {
		// the value from the first array should be added and then the second. 
	}



	return $newArray;
}

// out should match this
 // Array
 // (
 //     [0] => Tina
 //     [1] => Dana
 //     [2] => Dean
 //     [3] => Mike
 //     [4] => Mel
 //     [5] => Amy
 //     [6] => Adam
 //     [7] => Michael
 // )

