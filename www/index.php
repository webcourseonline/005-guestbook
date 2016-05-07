<?php

$dir = __DIR__;
require_once realpath($dir . "/../vendor/autoload.php");

date_default_timezone_set('America/Los_Angeles');
$configPath = realpath($dir . "/../config");

$app = new \Webcourse\FrontController($configPath);
$app->init();
$app->run();