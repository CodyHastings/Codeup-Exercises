<?php



// Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.

// This should end with this line:

//  echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";
// and output this result:

//  Some of the most famous fictional theoretical physicists are Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark.
// Turn your solution into a function named humanizedList(). You should be able to pass the $physicistsArray as the only parameter, and your function will return the result.

// Update your code to list the physicists by first name, in alphabetical order.

// Create a second parameter to make alphabetical sorting optional.

// Hint: Default alphabetical sorting to false. If no second parameter is passed to the function no sorting should take place.


 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array, $bool = false) {
 	if ($bool === true) {
 		sort($array);
 	}
 	$holdEndofArray = array_pop($array);
 	$andEnd = 'and ' . $holdEndofArray;
 	array_push($array, $andEnd);
 	return implode(', ', $array);
 }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 
 $physicistsArray = explode(', ', $physicistsString);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray, true);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

 ?>