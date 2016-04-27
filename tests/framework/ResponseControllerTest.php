<?php

class ResponseControllerTest extends \PHPUnit_Framework_TestCase
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
        $rc = new \Webcourse\Response();
        $this->assertInstanceOf("\Webcourse\Response", $rc);
    }
}
