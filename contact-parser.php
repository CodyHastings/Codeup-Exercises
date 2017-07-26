<?php
function openContacts()
{
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	return $contents;

}

$contents = openContacts();


function parseContacts($contents)
{
	$finalContacts = [];
	$trimContacts = trim($contents);
    $contacts = explode("\n", $trimContacts);
    foreach ($contacts as $contact) {
    	$parsedContacts = explode("|", $contact);
    	$parsedContacts[1] = substr_replace($parsedContacts[1], "-", 3, 0);
    	$parsedContacts[1] = substr_replace($parsedContacts[1], "-", 7, 0);
    	$newArray = ["name" => $parsedContacts[0], "number" => $parsedContacts[1]];

    	array_push($finalContacts, $newArray);


    }
    return $finalContacts;
}

var_dump(parseContacts($contents));



// expected output

 // array(3) {
 //     [0]=>
 //     array(2) {
 //         ["name"]=>
 //         string(10) "Jack Blank"
 //         ["number"]=>
 //         string(12) "123-123-1234"
 //     }
 //     [1]=>
 //     array(2) {
 //         ["name"]=>
 //         string(8) "Jane Doe"
 //         ["number"]=>
 //         string(12) "234-234-2345"
 //     }
 //     [2]=>
 //     array(2) {
 //         ["name"]=>
 //         string(9) "Sam Space"
 //         ["number"]=>
 //         string(12) "345-345-3456"
 //     }
 // }