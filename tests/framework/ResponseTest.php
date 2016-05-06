<?php

class ResponseTest extends \PHPUnit_Framework_TestCase
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
        $response = new \Webcourse\Response();
        $this->assertInstanceOf("\Webcourse\Response", $response);
        $response->setCode(200);
        $code = $response->getCode();
        $this->assertInternalType("int", $code);

    }


}
