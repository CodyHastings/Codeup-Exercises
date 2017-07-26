<?php


function openFile($filename)
{
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	return $contents;

}

$bonusContent = openFile("bonus.txt");


function bonusParse($bonusContent)
{

	$finalArray = [];

	$contentArray = explode("\n", $bonusContent);

	foreach ($contentArray as $key => $value) {
		$parseValue = explode("/", $value);
		$newArray = ["Name" => $parseValue[0], "Age" => $parseValue[1], "Previous Residence" => $parseValue[2]];
		if ($parseValue[3] === "true") {
			$newArray["Name"] = strtoupper($parseValue[0]);
		} else {
			$newArray["Name"] = strtolower($parseValue[0]);
		}




		array_push($finalArray, $newArray);

	}




	return $finalArray;


}

$complete = bonusParse($bonusContent);

print_r($complete);



// // 
//     bonusParse() should take in a string of content and return an array of information for each "person" 
//     in the bonus file. 
// 		Each person's information should be contained in an array with the 
// 		first element 
// //   being their name, 
// 		second element being there age, 
// 		third element being the states they have resided in 
//     the last element should be removed and used to determine if the name of the person in the first element 
//     will be in all CAPS (true) or all lowercase (false).



// John Conner/32/CA,TX,MT/false
// Sara Conner/50/CA,TX/false
// Terminator/3/CA,TX,MT,SC,SD,TN,VT/true