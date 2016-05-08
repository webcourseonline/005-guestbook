<?php

class FrontControllerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \Webcourse\FrontController
     */
    protected $fc;

    /**
     * @var string
     */
    protected $configDir;

    protected function setUp()
    {

        $this->configDir = __DIR__ . '/../../config';
        $appRoot = realpath("./tests/_data/src");
        $this->fc = new \Webcourse\FrontController($this->configDir, \Webcourse\FrontController::ENV_TEST, $appRoot);

    }
    protected function tearDown()
    {
    }

    public function testEnvs(){

        $env = array(
            \Webcourse\FrontController::ENV_DEV,
            \Webcourse\FrontController::ENV_PROD,
            \Webcourse\FrontController::ENV_DEMO,
            \Webcourse\FrontController::ENV_TEST
        );

        foreach ($env as $value){
            $fc = new \Webcourse\FrontController($this->configDir, $value);
            $this->assertEquals($this->configDir . '/config_' . $value . '.php', $fc->getConfigPath());
        }
    }

    // tests
    public function testInit()
    {

        $this->assertInstanceOf("\Webcourse\FrontController", $this->fc);
        $this->assertEquals($this->configDir . '/config_' . \Webcourse\FrontController::ENV_TEST . '.php',
                            $this->fc->getConfigPath()
        );
        $result = $this->fc->init();
        $this->assertTrue($result);

        $this->assertInternalType("array", $this->fc->getConfig());
        $this->assertInternalType("string", $this->fc->getAppRoot());
        $this->assertInstanceOf("\Webcourse\Request", $this->fc->getRequest());
        $this->assertInstanceOf("\Webcourse\Response", $this->fc->getResponse());
        $this->assertInstanceOf("\Webcourse\Router", $this->fc->getRouter());
        $this->assertInstanceOf("\Webcourse\Template", $this->fc->getView());
        $this->assertInstanceOf("\Webcourse\Register", $this->fc->getRegistry());
        
    }
    
    public function testRun(){

        $this->fc->init();
        
        $request = new \Webcourse\Request();
        $request->setPath("/");
        
        $this->fc->setRequest($request);
        $this->fc->run();
        
        $response = $this->fc->getResponse();
        $content = $response->getContent();
        
        $this->assertEquals("IndexController:indexAction", $content);
    }
    
}
