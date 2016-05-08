<?php

$parentConfig = include "config_dev.php";
$parentConfig['database']['password'] = '007';

return $parentConfig;