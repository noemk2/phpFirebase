<?php
require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;

$firebase = (new Factory)
    ->withServiceAccount('./secret/php-tutorial-640b0-f517fd37fac9.json')
    ->withDatabaseUri('https://php-tutorial-640b0.firebaseio.com/')
    ->create();

$database = $firebase->getDatabase();

die(print_r($database));
