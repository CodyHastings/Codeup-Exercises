<?php

// In this new file, create a class named Rectangle that contains

// the properties $height and $width
// a constructor to set the height and width on instantiation
// a method named area() that returns the area based on the height and width.

class Rectangle 
{
	public $height;
	public $width;

	public function __construct($height, $width) 
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function area()
	{

		return $this->height * $this->width;

	}



}