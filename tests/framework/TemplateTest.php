<?php

class TemplateTest extends \PHPUnit_Framework_TestCase
{

    // tests
    public function testInit()
    {

        $template = new \Webcourse\Template();
        $this->assertInstanceOf("\Webcourse\Template", $template);


    }
    public function testSetPath ()
    {
        $template = new \Webcourse\Template();

    }
    public function testGetPath ()
    {
        $template = new \Webcourse\Template();
        $result = $template->getPath();
        $this->assertInternalType($template, $result);

    }

    public function testSetData ()
    {
        $template = new \Webcourse\Template();

    }

    public function testGetData ()
    {
        $template = new \Webcourse\Template();

    }
    public function testAddData ()
    {
        $template = new \Webcourse\Template();
        $data = (array("paramName" => "paramY"));
        $result = $template->addData($data);
        $this->assertEquals($data, $result);

    }
    public function testRender ()
    {
        $template = new \Webcourse\Template();
        $template->setPath();
        $template->getData();
        //$template ->addData();
        $result = $template->Render;
        $this->assertInternalType("string", $result);
    }
}
