<?php
// Here you can initialize variables that will be available to your tests

require __DIR__ . '/../../vendor/autoload.php';

$config = [
    'hostname'     => '127.0.0.1',
    'port'         => '8090',
    'autostart'    => true,
    'documentRoot' => './www',
    'directoryIndex' => 'index.php'
];
$this->server = new \Codeception\Extension\PhpBuiltinServer($config, []);