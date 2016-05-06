<?php

$config = array(
);

$parentConfig = include "config_prod.php";
return array_replace_recursive($parentConfig, $config);