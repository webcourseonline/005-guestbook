<?php

class RequestTest extends \PHPUnit_Framework_TestCase
{
    protected  $request;

    protected function setUp()
    {
        $this->request = new \Webcourse\Request();
//        $this->request->setPath("/sfdf/sfsdf");
    }

    protected function tearDown()
    {
    }

    // tests
    public function testInit()
    {

//        $data = file_get_contents("http://127.0.0.1:8088/test.php");

        $request = new \Webcourse\Request();
        $this->assertInstanceOf("\Webcourse\Request", $request);
    }

    public function testGetFilePath(){
        $_SERVER['REQUEST_URI'] = "/test/index.php?id=1&test=wet&id_theme=512";
        $request = new \Webcourse\Request();
        $result = $request->GetFilePath();
        $this->assertEquals("test", $result);
    }

    public function testSetAndGetPath(){
        $request = new \Webcourse\Request();
        $this->request->setPath("some_param");
        $result = $this->request->getPath();
        $this->assertEquals("some_param", $result);
        $this->assertTrue(is_string($result));
    }

//    public function testSetPath(){
//        $request = new \Webcourse\Request();
//        $result = $this->request->setPath("some_param_param");
//        $this->assertEquals("someparam", $result);
//    }

    public function testGetParams(){
        $request = new \Webcourse\Request();
        $result = $request->getParams();
        $this->assertInternalType("array", $result);
    }

    public function testAddParams(){
        $request = new \Webcourse\Request();
        $result = $request->addParams(array("paramName1" => "paramX"));
        $result = $request->addParams(array("paramName2" => "paramY"));
        $this->assertEquals(array("paramName1" => "paramX", "paramName2" => "paramY"), $result);
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
        $this->assertEquals(array(0 => "jsdhfj"), $result);
    }

   public function testAddAndGetCookies(){
       $request = new \Webcourse\Request();
       $this->request->setCookies("param_cook_1x");
       $this->request->addCookie("param_cook_2y");

       $this->assertEquals(array(0=>"param_cook_1x", 1=>"param_cook_2y"), $this->request->getCookies());
   }

    public function testGetType(){
        $request = new \Webcourse\Request();
        $result = $request->getType();
        $this->assertFalse($result, false);
    }

//    public function testSetType(){
//        $request = new \Webcourse\Request();
//        $result = $this->request->setType("sgsg");
//        $this->assertEquals("sgsg", $result);
//    }

    public function testSetAndGetType(){
        $request = new \Webcourse\Request();
        $this->request->setType("value");
        $result = $this->request->getType();
        $this->assertEquals("value", $result);
    }

}