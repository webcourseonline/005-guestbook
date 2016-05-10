<?php

$parentConfig = include "config_dev.php";
$parentConfig['database']['password'] = '1111';

return $parentConfig;