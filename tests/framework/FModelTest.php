<?php

class FModelTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testMe()
    {
        $fc = new \Webcourse\FModel();
        $this->assertInstanceOf("\Webcourse\FModel", $fc);
    }
}
