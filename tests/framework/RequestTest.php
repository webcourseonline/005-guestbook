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

    public function testGetParams()
    {
        $request = new \Webcourse\Request();
        $result = $request->getParams();
        $this->assert($result);
    }

    public function testAddParams(){
        $request = new \Webcourse\Request();
        $result = $request->addParams(array("paramName" => "paramX"));
        $this->assertEquals(array("paramName" => "paramX"), $result);
    }

    public function testTypeHeaders()
    {
    }

    public function testTypeCookies()
    {
    }

    public function testTypeType()
    {
    }
}