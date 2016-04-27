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

        $this->configDir = __DIR__;
        $this->fc = new \Webcourse\FrontController($this->configDir );
        
    }

    protected function tearDown()
    {
    }

    public function testEnvs(){
        
        $env = array(
            \Webcourse\FrontController::ENV_DEV,
            \Webcourse\FrontController::ENV_PROD,
            \Webcourse\FrontController::ENV_DEMO
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
        $this->assertEquals($this->configDir . '/config_' . \Webcourse\FrontController::ENV_DEV . '.php',
                            $this->fc->getConfigPath()
        );
        $result = $this->fc->init();
        $this->assertTrue($result);
        
    }
    
    public function testMethods(){

        $this->fc->init();
        $this->assertInstanceOf("\Webcourse\Model", $this->fc->getDb());
        
    }
}
