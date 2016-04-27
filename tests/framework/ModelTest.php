<?php

class ModelTest extends \PHPUnit_Framework_TestCase
{
    public $table;
    protected $config;


    protected function setUp()
    {
        //class Moded
//$config = array(
//    'driver'    => 'mysql', // Db driver
//    'host'      => '127.0.0.1',
//    'database'  => 'guestbook',
//    'username'  => 'root',
//    'password'  => '21609332',//'test123',
//    'charset'   => 'utf8', // Optional
//    'collation' => 'utf8_general_ci', // Optional
////    'prefix'    => '', // Table prefix, optional
////    'options'   => array( // PDO constructor options, optional
////        PDO::ATTR_TIMEOUT => 5,
////        PDO::ATTR_EMULATE_PREPARES => false,
////    ),
//
//);
//$post = array(
//    'name' => 'Olga1',
//    'email' => 'olga@gmail.com',
//    'date' => '2016-04-25',
//    'message' => 'Hello my friend!=)',
//);

    }

    protected function tearDown()
    {
    }

//     tests
    public function testMe()
    {
        $fc = new \Webcourse\Model();
        $this->assertInstanceOf("\Webcourse\Model", $fc);
    }
    public function testCreate(){
//        $th
    }
    public function testRead(){

    }
    public function testUpdate(){

    }
    public function testDelete(){

    }
}
