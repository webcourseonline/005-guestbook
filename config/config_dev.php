<?php

$config['database'] = array(
    'username'  => 'root',
    'password'  => 'toor',//'test123',
);

$parentConfig = include "config_prod.php";
return array_replace_recursive($parentConfig, $config);