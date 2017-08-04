<?php
require_once 'phpFunctionLibrary.php';

// Take in a parameter called $prefix. If nothing is passed to the constructor, the $prefix should default to 'log'.
// Set the $filename property of the class to $prefix-YYYY-MM-DD.log.
// Open the $filename for appending and assign the file pointer to the property $handle.

class Log
{

	public $filename;

	public $handle;

	public function __construct($prefix = "log") 
	{
		$this->filename = $prefix . "-" . date("Y-m-d") . ".log";
	}

	public function __destruct()
	{
		fclose($this->handle);
	}

	public function logMessage($logLevel, $message)
	{
    	
    	$message = date("Y-m-d h:i:s ") ."[$logLevel]" . " " . $message . PHP_EOL;
    	$this->handle = fopen($this->filename, 'a');
		fwrite($this->handle, $message);

	}

	public function info($message)
	{
		$logLevel = "INFO";
		$this->logMessage($logLevel, $message);
	}

	public function error($message)
	{
		$logLevel = "ERROR";
		$this->logMessage($logLevel, $message);
	}



}