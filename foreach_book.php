<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

//  :::::::  only show books after 1950
// foreach($books as $book => $info) {
// 	foreach($info as $key => $value) {
// 		if ($value > 1950) {
// 			echo "=============" .PHP_EOL;
// 			echo "Title : {$book}" .PHP_EOL;
// 			echo "$key : $value" .PHP_EOL;
// 		}
// 	}
// }
// bonus 1 :::::::: only show books with pages less than 300
// foreach($books as $book => $info) {
// 	if ($info['pages'] < 300) {
// 		echo "=============" .PHP_EOL;
// 		echo "Title : {$book}" .PHP_EOL;
// 		foreach($info as $key => $value) {
// 			echo "$key : $value" .PHP_EOL;
// 		}
// 	}
// }
$numberOfPages = [];

foreach($books as $book => $info) {
	array_push($numberOfPages, $info['pages']) .PHP_EOL;
}
foreach($numberOfPages as $pages){

	echo $pages .PHP_EOL;
}

	
// }

