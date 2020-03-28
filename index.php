<?php

require __DIR__ . '/vendor/autoload.php';

use \imonroe\ana\Ana;
use \imonroe\composer_demo\Library;

echo('This is my demo program.'.PHP_EOL);

$now_date = time();

echo('This is a unix time stamp: ' . $now_date .PHP_EOL);

echo('This is a SQL-style time stamp: ' . Ana::sql_datetime($now_date) . PHP_EOL);

echo('This is a google-style time stamp: ' . Ana::google_datetime($now_date) . PHP_EOL);


$library = new Library;
$library->sayHello('WebCamp!');

echo("I just checked google, and this is the response code: " . $library->checkGoogle() .PHP_EOL);


