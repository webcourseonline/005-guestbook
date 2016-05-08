<?php

class RegisterTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testImport()
    {
//        $registry = \Webcourse\Register::getInstance();
//        $registry->importConfig("config/config_test.php");
//        $host = $registry->getValue('host');
//        $this->assertEquals('127.0.0.1', $host);
    }

    public function testGetSet()
    {

        \Webcourse\Register::setValue(2, 'name');
        $get = \Webcourse\Register::getValue(2);
        $this->assertEquals('name', $get);





//        $registry = \Webcourse\Register::getInstance();
//        $response->setCode(200);
//        $code = $response->getCode();
//        $this->assertInternalType("int", $code);

    }


}
