<?php

class CanOfSoda
{
	public $brandName;
	public $isFull = "Full";
	public $isOpen = "Not Open";
	public $expirationDate;


	public function openSoda() 
	{
		return $this->isOpen = "Is Open";
	}

	public function pourOut() 
	{
		return $this->isFull = "poured out";
	}


}


