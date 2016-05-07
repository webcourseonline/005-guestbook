<?php

$config['database'] = array(
    'username'  => 'root',
    'password'  => 'toor',
);

$parentConfig = include "config_dev.php";
return array_replace_recursive($parentConfig, $config);
