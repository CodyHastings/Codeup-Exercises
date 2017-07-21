<?php


// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.

// Create a loop that will echo out every value, including those nested in arrays. Output should look like this.




$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thing) {
	if (is_array($thing)){
		echo "is array \n";
	} else if (is_bool($thing)) {
		echo "is a boolean\n";
	} else if (is_float($thing)) {
		echo "is a float\n";	
	} else if (is_int($thing)) {
		echo "is and integer\n";
	} else if (is_null($thing)) {
		echo "is null\n";	
	}

	
	
}

// is_array() - Checks if value is of type array
// is_bool() - Checks if value if of type boolean
// is_float() - Checks if value is of type float
// is_double() - alias of is_float()
// is_real() - alias of is_float()
// is_int() - Checks if value is of type integer
// is_integer() - alias of is_int()
// is_long() - alias of is_int()
// is_null() - Checks if value is of type null
// is_numeric() - Checks if value is of type float or integer
// is_scalar() - Checks if value is of type float, integer, string, or boolean
// is_string() - Checks if value is of type string