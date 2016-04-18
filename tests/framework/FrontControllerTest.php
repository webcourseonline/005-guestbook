<?php

class FrontControllerTest extends \PHPUnit_Framework_TestCase
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
        
        $fc = new \Webcourse\FrontController();
        $this->assertInstanceOf("\Webcourse\FrontController", $fc);
        
    }
}
