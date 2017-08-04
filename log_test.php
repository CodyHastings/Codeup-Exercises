<?php

require_once 'Log.php';
require_once 'phpFunctionLibrary.php';

// Create a log_test.php file in your exercises directory. At the top of log_test.php, 
// be sure to require_once 'Log.php';. In your code, you will need to:
// Create an instance of the Log class
// Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
// Call the methods logMessage(), info(), and error() with to test the functionality of each.

$log = new Log("cli");


$log->logMessage("info", "Everything is great in php");

$log->info("yarrrrhahar");

$log->error("this is an error");
