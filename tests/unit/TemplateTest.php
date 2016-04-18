<?php

class TemplateTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }
    
    public function testOutput()
    {

        
        $data = array(
            array(
                'name' => "Ann",
                'email' => "Test",
                'date' => "Test",
                'message' => "Test"
            ),
            array(
                'name' => "Jack",
                'email' => "Test",
                'date' => "Test",
                'message' => "Test"
            )
        );
        
        ob_start();

        include realpath(__DIR__ . '/../../template.php');

        $html = ob_get_contents();
        ob_end_clean();
        
        $this->assertGreaterThan(0, strpos($html, "Ann"));


    }
}