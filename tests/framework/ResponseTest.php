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

        
        
        $response = new \Webcourse\Response();
        $this->assertInstanceOf("\Webcourse\Response", $response);
        $response->setCode(200);
        $code = $response->getCode();
        $this->assertInternalType("int", $code);

    }
    
//    public function testSend(){
//        $response = new \Webcourse\Response();
//        $response->setHeaders(array("X-APIBEST-DEV" => "Serg"));
//        $response->setContent("Hello world");
//        ob_start();
//        $response->send();
//        $html = ob_get_contents();
//        ob_end_clean();
//        $this->assertEquals("Hello world",$html);
//        $header = $response->getHeaders();
//        print_r( $header);
//
//    }
    public function testHeders(){
    }


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


