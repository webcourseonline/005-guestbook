<?php

class RequestTest extends \PHPUnit_Framework_TestCase
{
    protected  $request;
    protected  $path;
    protected function setUp()
    {
        $this->request = new \Webcourse\Request();
        $this->request->setPath("/sfdf/sfsdf");
    }

    protected function tearDown()
    {
    }

    // tests
    public function testInit()
    {

//        $browser = ;

        $data = file_get_contents("http://127.0.0.1:8088/test.php");
        $request = new \Webcourse\Request();
        $this->assertInstanceOf("\Webcourse\Request", $request);
    }

    public function testGetParams(){
        $request = new \Webcourse\Request();
        $result = $request->getParams();
        $this->assertInternalType("array", $result);
    }

    public function testAddParams(){
        $request = new \Webcourse\Request();
        $result = $request->addParams(array("paramName" => "paramX"));
        $this->assertEquals(array("paramName" => "paramX"), $result);
    }

    public function testGetHeaders(){
        $request = new \Webcourse\Request();
        $result = $request->getHeaders();
        $this->assertInternalType("array", $result);
    }

    public function testAddHeaders(){
        $request = new \Webcourse\Request();
        $result = $request->addHeaders(array("paramName" => "paramY"));
        $this->assertEquals(array("paramName" => "paramY"), $result);
    }

    public function testGetCookies(){
        $request = new \Webcourse\Request();
        $result = $request->getCookies();
        $this->assertInternalType("array", $result);
    }

    public function testSetCookies(){
        $request = new \Webcourse\Request();
        $result = $request->setCookies("jsdhfj");
        $this->assertEquals("jsdhfj", $result);
    }

    public function testGetType(){
        $request = new \Webcourse\Request();
        $result = $request->getType();
        $this->assertFalse($result, false);
    }

    public function testGetPath(){
        $result = $this->request->getPath();
        $this->assertTrue(is_string($result));
    }

    public function testSetType(){
        $result = $this->request->setType("sgsg");
        $this->assertEquals("sgsg", $result);
    }

}