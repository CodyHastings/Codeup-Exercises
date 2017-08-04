<?php

require "Soda.php";

$soda = new CanofSoda(); 

$soda->brandName = "Elixer of Doug";
$soda->expirationDate = "Never.......";





echo "Brand Name: {$soda->brandName}" . PHP_EOL;
echo "Expiration date: {$soda->expirationDate}" . PHP_EOL;
echo "Is Full: {$soda->isFull}" . PHP_EOL;
echo "Is Open: {$soda->isOpen}" . PHP_EOL;

echo $soda->openSoda() . PHP_EOL;


echo $soda->pourOut() . PHP_EOL;


echo "Is Full: {$soda->isFull}" . PHP_EOL;
echo "Is Open: {$soda->isOpen}" . PHP_EOL;
?>