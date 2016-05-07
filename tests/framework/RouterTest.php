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

    public function testRoutesRecognition(){

        $fixture = array(
            '/' => array('actionName' => 'indexAction', 'controllerName' => 'IndexController'),
//            'index/index' => array('actionName' => 'indexAction', 'controllerName' => 'IndexController'),
//            'index/test' => array('actionName' => 'testAction', 'controllerName' => 'IndexController'),
//            '/test' => array('actionName' => 'indexAction', 'controllerName' => 'TestController'),
//            '/test/var1/data' => array('actionName' => 'testAction', 'controllerName' => 'IndexController', 'var1' => 'data'),
//            '/var1/data' => array('actionName' => 'indexAction', 'controllerName' => 'IndexController', 'var1' => 'data')
        );
        foreach ($fixture as $uri => $route) {
            $routes = $this->router->run($uri);
            $this->assertTrue($routes['controllerName'] == $route['controllerName']
                && $routes['actionName'] == $route['actionName']);
        }

    }
}
