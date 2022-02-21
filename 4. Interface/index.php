//https://www.phptutorial.net/php-oop/php-interface/
<?php
require_once 'FileLogger.php';
require_once 'DatabaseLogger.php';

// examle 1
$logger = new FileLogger('./log.txt', 'w');
$logger->log('PHP interfae is awesome');

// example 2

//check the file log.txt
//February 16, 2022, 9:55 pm: PHP interfae is awesome
//February 16, 2022, 9:55 pm: Log message
$loggers = [
	new FileLogger('./log.txt'),
	new DatabaseLogger()
];

foreach ($loggers as $logger) {
	$logger->log('Log message');
}