<?php
require_once './vendor/autoload.php';
// require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
// use Kreait\Firebase\ServiceAccount;


$firebase = (new Factory)
    ->withServiceAccount('./secret/php-tutorial-640b0-f517fd37fac9.json')
    // ->withServiceAccount::fromJsonFile(__DIR__ . '/secret/php-tutorial-640b0-f517fd37fac9.json')
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    // ->withDatabaseUri('https://php-tutorial-640b0.firebaseio.com/')
    ->create();

$database = $firebase->getDatabase();

die(print_r($database));
