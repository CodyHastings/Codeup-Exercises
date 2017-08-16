<?php 

require_once "Rectangle.php";

require_once "Square.php";


$rect1 = new Rectangle(4,2);


echo "the area of rect is " . $rect1->area() . PHP_EOL;

echo "the perim of rect is " . $rect1->perimeter() . PHP_EOL;


$square1 = new Square(4,4);

echo "the perim of square is = " . $square1->perimeter() . PHP_EOL;

echo "the area of square is = " . $square1->area();
