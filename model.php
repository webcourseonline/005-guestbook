<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

$config = array(
    'driver'    => 'mysql', // Db driver
    'host'      => '127.0.0.1',
    'database'  => 'guestbook',
    'username'  => 'root',
    'password'  => 'test123',//'test123',
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
 *      'date'=> date("Y-m-d"),
 *      'name'=>'1N',
 *      'email' =>'2N',
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

    global $qb;

    try {
        $result = $qb->table('posts')->insert($data);
    } catch (Exception $e) {
       return array('error' => $e->getMessage());
    }
    return true;
}


// test data to check save() method in DB
//$data = array(
//    'date'=> date("Y-m-d"),
//    'name'=>'1N',
//    'email' =>'2N',
//    'message' => '3N'
//);
//$result = save($data);

/**
 * loads data from db
 *
 * @return array $loadData
 * <code>
 * $loadData=load();
 * <code>
 * getting data in array objects $loadData
 *
 * $loadData = array(
 *  object 0 (
 * 'id' => string 'data'
 * 'date' => string 'data'
 * 'name' => string 'data'
 * 'email' => string 'data'
 * 'message' => string 'data'
 *  )
 * object 1 (
 * 'id' => string 'data'
 * 'date' => string 'data'
 * 'name' => string 'data'
 * 'email' => string 'data'
 * 'message' => string 'data'
 * )
 * ---///---
 * )
 */

function load()
{
    global $qb;
    $data_db = $qb->table('posts')->get();

    $arrayOfArrays = array();

    foreach ($data_db as $dataRaw) {
        $objectsIntoArray = get_object_vars($dataRaw);
        $arrayOfArrays[] = $objectsIntoArray;
    }

    $posts = array_reverse($arrayOfArrays);
    return $posts;
}

//returns array of arrays (posts)
$posts=load();
//var_dump($posts);


