<?php
require_once 'phpFunctionLibrary.php';

// A property called $filename where you store the name of the file for the log.
// A method called logMessage() that will take in a log level and message as before. 
// It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle.
// Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.

class Log
{

	public $filename;

	public function logMessage($logLevel, $message)
	{
    	
    	$message = date("Y-m-d h:i:s ") ."[$logLevel]" . " " . $message . PHP_EOL;
    	appendToFile($this->filename, $message);
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