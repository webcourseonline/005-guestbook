<?php

class RouterTest extends \PHPUnit_Framework_TestCase
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
        $fc = new \Webcourse\Router();
        $this->assertInstanceOf("\Webcourse\Router", $fc);
    }
}
