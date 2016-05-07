<?php

$parentConfig = include "config_dev.php";
$parentConfig['database']['password'] = '';

return $parentConfig;