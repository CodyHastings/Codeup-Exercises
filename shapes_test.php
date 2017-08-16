<?php 

require_once "Rectangle.php";

require_once "Square.php";


$rect1 = new Rectangle(40,20);


echo $rect1->area() . PHP_EOL;


$square1 = new Square(40,40);

echo $square1->perimeter();
