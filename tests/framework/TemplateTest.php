<?php

class TemplateTest extends \PHPUnit_Framework_TestCase
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

        $fc = new \Webcourse\Template();
        $this->assertInstanceOf("\Webcourse\Template", $fc);
    }
}
