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
        $fc = new \Webcourse\Request();
        $this->assertInstanceOf("\Webcourse\Request", $fc);
    }

    public function testTypeParams(){

    }

    public function testTypeHeaders(){

    }

    public function testTypeCookies(){

    }

    public function testTypeType(){

    }

}

