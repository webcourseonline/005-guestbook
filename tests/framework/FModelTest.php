<?php


class FModelTest extends \PHPUnit_Framework_TestCase{
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
        $fc = new \Webcourse\FModel();
        $this->assertInstanceOf("\Webcourse\FModel", $fc);
    }
    public function testCreate(){
//        $this->table =
    }
    public function testRead(){

    }
    public function testUpdate(){

    }
    public function testDelete(){

    }
}
