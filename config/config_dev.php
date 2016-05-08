<?php

$config['database'] = array(
    'username'  => 'root',
    'password'  => '21609332',//'test123',
);

$parentConfig = include "config_prod.php";
return array_replace_recursive($parentConfig, $config);