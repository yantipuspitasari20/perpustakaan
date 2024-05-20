<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Create an instance of the Laravel application...
$app = require_once __DIR__.'/../bootstrap/app.php';

// Bind the captured request to the application...
$request = Request::capture();

// Handle the request...
$response = $app->handle($request);

// Send the response back to the browser...
$response->send();

// Terminate the application...
$app->terminate();
