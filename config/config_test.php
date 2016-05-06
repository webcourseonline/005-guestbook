<?php

$config = array(
    'driver'    => 'mysql', // Db driver
    'host'      => '127.0.0.1',
    'database'  => 'test',//test
    'username'  => 'root',
    'password'  => '',//'test123',
    'charset'   => 'utf8', // Optional
    'collation' => 'utf8_general_ci', // Optional
    'prefix'    => '', // Table prefix, optional
    'options'   => array( // PDO constructor options, optional
        PDO::ATTR_TIMEOUT => 5,
        PDO::ATTR_EMULATE_PREPARES => false,
    ),

);

$parentConfig = include "config_dev.php";
return array_replace_recursive($parentConfig, $config);