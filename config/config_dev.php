<?php

$config['database'] = array(
    'username'  => 'root',
    'password'  => 'z7a7s7x7',//'test123',
);

$parentConfig = include "config_prod.php";
return array_replace_recursive($parentConfig, $config);