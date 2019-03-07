<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}
define('BASE_PATH',str_replace('\\','/',realpath(dirname(__FILE__).'/'))."/");
//constant
require __DIR__ . '/../data/config/constant.php';



require __DIR__ . '/../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require DATA_CONFIG_PATH.'/config.php';
$app = new \Slim\App($settings);

// Set up dependencies

require DATA_CONFIG_PATH.'/dependencies.php';

// Register middleware
require DATA_CONFIG_PATH . '/middleware.php';

// Register routes
require DATA_CONFIG_PATH . '/routes.php';

//functions
require DATA_FUNCTIONS_PATH . '/function.php';



// Run app
$app->run();
