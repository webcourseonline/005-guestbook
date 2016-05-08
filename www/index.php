<?php

require_once "../vendor/autoload.php";

$app = new \Webcourse\FrontController("../config");
$app->run();