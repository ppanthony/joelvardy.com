<?php

// Turn off error reporting
error_reporting(0);

// Set PHP timezone
date_default_timezone_set('Europe/London');

// Set some paths
define('BASE_PATH', realpath(dirname(__FILE__)));
define('APP_PATH', BASE_PATH.'/application');
define('CONFIG_PATH', APP_PATH.'/config');
define('ROUTES_PATH', APP_PATH.'/routes');
define('VIEWS_PATH', APP_PATH.'/views');

// Setup Composer autoloding
require(BASE_PATH.'/vendor/autoload.php');

// Load application configurations
foreach (glob(CONFIG_PATH.'/*.php') as $configuration) {
	Joelvardy\Config::value(pathinfo($configuration)['filename'], require($configuration));
}