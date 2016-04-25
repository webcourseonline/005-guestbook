<?php

class ModelTest extends \PHPUnit_Framework_TestCase
{
    public $table;
    protected $config;


    protected function setUp()
    {
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
