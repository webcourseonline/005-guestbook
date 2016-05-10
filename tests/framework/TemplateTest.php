<?php

class TemplateTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    public function testInit()
    {
        $template = new \Webcourse\Template();
        $this->assertInstanceOf("\Webcourse\Template", $template);
    }

    public function testSetPath()
    {
        $template = new \Webcourse\Template();
        $path = "/tests/_data/template.phtml";
        $template->setPath($path);
        $varGet = $template->getPath();
        $this->assertInternalType("string", $varGet);
        $this->assertEquals($path, $varGet);
    }

    public function testSetData()
    {
        $template = new \Webcourse\Template();
        $data = array();
        $template->setData($data);
        $varGetdata = $template->getData();
        $this->assertInternalType("array", $varGetdata);
    }

    public function testAddData()
    {
        $template = new \Webcourse\Template();
        $template->setData(array("test1" => "Hello"));
        $template->addData(array("test2" => " world"));
        $getData = $template->getData();
        $this->assertInternalType("array", $getData);
        $this->assertCount(2, $getData);
//      $this->assertArrayHasKey()
    }

    public function testRender()
    {
        $template = new \Webcourse\Template();
        $path =  realpath("tests/_data/template.phtml");
        $template->setPath($path);
        $template->setData(array("test" => "Hello world"));
        $result = $template->render();
        $this->assertInternalType("string", $result);
        $this->assertEquals($result, 'Hello world');
    }
}
