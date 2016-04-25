<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 18.04.16
 * Time: 21:19
 */

namespace Webcourse;
use Pixie\QueryBuilder\QueryBuilderHandler;

class Model
$config = array(
    'driver'    => 'mysql', // Db driver
    'host'      => '127.0.0.1',
    'database'  => 'guestbook',
    'username'  => 'root',
    'password'  => '21609332',//'test123',
    'charset'   => 'utf8', // Optional
    'collation' => 'utf8_general_ci', // Optional
//    'prefix'    => '', // Table prefix, optional
//    'options'   => array( // PDO constructor options, optional
//        PDO::ATTR_TIMEOUT => 5,
//        PDO::ATTR_EMULATE_PREPARES => false,
//    ),

);
$post = array(
    'name' => 'Olga1',
    'email' => 'olga@gmail.com',
    'date' => '2016-04-25',
    'message' => 'Hello my friend!=)',
);

class FModel
{
    public function __construct(){

    }
    public function create(QueryBuilderHandler $table, array $data){

    }
    public function read($table, $id){

    }
    public function update($table, $id, array $data){

    }
    public function delete($table, $id){

    }


}