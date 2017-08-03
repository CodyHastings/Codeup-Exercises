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
    	$fileDate = "log-" . date("Y-m-d") . ".log";
    	$message = date("Y-m-d h:i:s ") ."[$logLevel]" . " " . $message . PHP_EOL;
    	appendToFile($fileDate, $message);
	}

	public function logInfo($message)
	{
		$logLevel = "INFO";
		logMessage($logLevel, $message);
	}

	function logError($message)
	{
		$logLevel = "ERROR";
		logMessage($logLevel, $message);
	}



}