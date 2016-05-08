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

        $config = [
            'hostname'     => 'localhost',
            'port'         => '8000',
            'autostart'    => true,
            'documentRoot' => 'tests/_data'
        ];
        $server = new \Codeception\Extension\PhpBuiltinServer($config, []);
        $this->assertTrue($server->isRunning());

        
        
//        $response = new \Webcourse\Response();
//        $this->assertInstanceOf("\Webcourse\Response", $response);
//        $response->setCode(300);
//        $code = $response->getCode();
//        $this->assertInternalType("int", $code);

    }
    
    
    
    public function testSend(){
        $response = new \Webcourse\Response();
        $response->fillResponse(array('code' => 500, 'headers' => array("pass"=>"qwerty"), 'cookies'=>array("key"=>"value"), 'content'=>'Hello world'));
        $this->assertEquals(500, $response->getCode());
        $this->assertEquals("Hello world", $response->getContent());
        $this->assertEquals(array("pass"=>"qwerty"), $response->getHeaders());
        $this->assertEquals(array("key"=>"value"), $response->getCookies());
    }
    
    
    public function test


}

//if (!headers_sent()) {
//    header('Location: http://www.example.com/');
//    exit;
//}

//ob_start();
//
//include realpath(__DIR__ . '/../../template.php');
//
//$html = ob_get_contents();
//ob_end_clean();
//
//$this->assertGreaterThan(0, strpos($html, "Ann"));


