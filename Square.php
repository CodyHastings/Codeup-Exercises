<?php


// Update the Square class to override the parent's constructor by only accepting one attribute (height) 
// and using that to set both $width and $height in your class.

// Update the constructor in Square to instead pass height on to the parent's constructor.

// Add a perimeter() method to your Rectangle class, and an area() method to your Square class. 
// Neither of these should call a parent. Which method is overriding? Which one is a base method?

// Update your shapes_test.php to test the methods in both your Square class and your Rectangle class.

require_once "Rectangle.php";

class Square extends Rectangle
{

	public function __construct($height) {

	parent::__construct($height, $height);

	$this->height = $height;
		
	}

	public function perimeter()
	{

		return $this->height * 4;

	}

		public function area()
	{

		return $this->height * 2;

	}
	

}