<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

$config = array(
    'driver'    => 'mysql', // Db driver
    'host'      => '127.0.0.1',
    'database'  => 'guestbook',
    'username'  => 'root',
    'password'  => 'test123',
    'charset'   => 'utf8', // Optional
    'collation' => 'utf8_general_ci', // Optional
    'prefix'    => '', // Table prefix, optional
    'options'   => array( // PDO constructor options, optional
        PDO::ATTR_TIMEOUT => 5,
        PDO::ATTR_EMULATE_PREPARES => false,
    ),
);

$connection = new \Pixie\Connection('mysql', $config);


/**
 * save in db
 *
 * <code>
 * $data = array(
 *      'name'=>'1N',
 *      'email' =>'2N',
 *      'date'=> date("Y-m-d"),
 *      'message' => '3N'
 * );
 * $result = save($data);
 * </code>
 *
 * @param array $data name, email, message
 * @return bool
 */

$qb = new \Pixie\QueryBuilder\QueryBuilderHandler($connection);

function save(array $data){

    global $connection;
    global $qb;

    try {
        $result = $qb->table('posts')->insert($data);
    } catch (Exception $e) {
       return array('error' => $e->getMessage());
    }


    return true;
}

$result = save($data);

/**
 * loads data from db
 *
 * @return array
 */
function load(){
    global $qb;
    $name=$qb->table('posts')->select('posts.name');
    return array(
        array(
        'name'=> $name,
        'email' =>'2',
        'date'=> date("Y-m-d"),
        'message' => '3'
        ),
    );
}

$loadedData=load();
var_dump($loadedData);

