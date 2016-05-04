<?php
class RequestTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testInit()
    {
        $request = new \Webcourse\Request();
        $this->assertInstanceOf("\Webcourse\Request", $request);
    }

    public function testGetParams(){
        $request = new \Webcourse\Request();
        $result = $request->getParams();
        $this->assertFalse($result);

        $request->addParams(array("paramName"=>"paramX"));
    }

    public function testGetHeaders(){
        $request = new \Webcourse\Request();
        $result = $request->getHeaders();
        $this->assertFalse($result);

        $request->addHeaders(array("Name"=>"X"));
        $result = $request->getHeaders();

        $this->assertContains
    }

    public function testTypeCookies(){

    }

    public function testTypeType(){

    }

}

