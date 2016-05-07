<?php

$config['database'] = array(
    'username'  => 'root',
    'password'  => '',
);

$parentConfig = include "config_dev.php";
return array_replace_recursive($parentConfig, $config);
