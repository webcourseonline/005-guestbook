<?php

require_once '../../../vendor/autoload.php';

$response = new \Webcourse\Response();
$response->fillResponse($_REQUEST);
$response->send();
