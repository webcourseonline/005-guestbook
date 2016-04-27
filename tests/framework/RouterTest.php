<?php

class RouterTest extends \PHPUnit_Framework_TestCase
{
    protected $router;

    protected function setUp()
    {
        $this->router = new \Webcourse\Router();
    }

    protected function tearDown()
    {
    }

    public function testInit()
    {
        $this->assertInstanceOf("\Webcourse\Router", $this->router);
    }

    /**
     * @depends testInit
     */
    public function testRoutesSetup()
    {
        $routes = $this->router->getRoutes();
        $this->assertTrue(!empty($routes));
    }

    /**
     * @depends testRoutesSetup
     */
    public function testGetControllerName()
    {
        $arrayPath = $this->router->run();
        $this->assertNotNull( strripos($arrayPath['controllerName'], 'Controller') );
    }

    /**
     * @depends testRoutesSetup
     */
    public function testGetActionName()
    {
        $arrayPath = $this->router->run();
        $this->assertNotNull( strripos($arrayPath['actionName'], 'action') );
    }
}
