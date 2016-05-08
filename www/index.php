<?php

$dir = __DIR__;
require_once realpath($dir . "/../vendor/autoload.php");

date_default_timezone_set('America/Los_Angeles');
$configPath = realpath($dir . "/../config");
$srcPath = realpath($dir . "/../src");

$app = new \Webcourse\FrontController($configPath, \Webcourse\FrontController::ENV_DEV, $srcPath);
$app->init();
$app->run();
$app->send();