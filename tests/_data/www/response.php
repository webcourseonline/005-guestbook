<?php

require_once '../../../vendor/autoload.php';

$response = new \Webcourse\Response();
$response->send($_REQUEST);
