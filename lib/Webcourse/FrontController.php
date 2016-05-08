<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 18.04.16
 * Time: 20:45
 */

namespace Webcourse;

class FrontController
{

    const ENV_PROD = 'prod';
    const ENV_DEMO = 'demo';
    const ENV_DEV = 'dev';
    const ENV_TEST = 'test';

    /**
     * @var 
     */
    protected $router;

    /**
     * @var Request
     */
    protected $request = false;
    
    /**
     * @var Response
     */
    protected $response = false;
    
    /**
     * @var Model
     */
    protected $db = false;
    
    /**
     * @var array
     */
    protected $config = false;

    /**
     * @var string
     */
    protected $configPath;
    
    /**
     * @var Template
     */
    protected $view = false;

    /**
     * @var Register
     */
    protected $registry;

    /**
     * @var string
     */
    private $appRoot;

    /**
     * FrontController constructor.
     * 
     * @param $configDir
     * @param string $env
     * @param string $appRoot
     */
    public function __construct($configDir, $env = self::ENV_DEV, $appRoot = ".")
    {

        $this->setRegistry(Register::getInstance());
        
        $configName = "config_{$env}.php";
        $this->setConfigPath($configDir . "/" . $configName);
        $config = include $this->getConfigPath();
        $this->setConfig($config);

        $this->appRoot = realpath($appRoot);
    
    }

    /**
     * @return bool
     */
    public function init()
    {

        $routes = $this->getConfig()['routes'];
        $this->setRouter(new Router($routes));

        $connection = $this->getConfig()['database'];
        $this->setDb(new Model($connection));

        $this->setResponse(new Response());
        $this->setRequest(new Request(true));

        $this->setView(new Template());

        if ($this->getDb() instanceof Model
            && $this->getRequest() instanceof Request
            && $this->getResponse() instanceof Response
            && is_array($this->getConfig())
            && $this->getView() instanceof Template){
            return true;
        } else {
            return false;
        }

    }
    
    public function run(){

        $path = $this->getRequest()->getPath();
        $runConfig = $this->router->run($path);

        $path = $this->appRoot . "/App/Controllers/" . $runConfig['controllerName'] . ".php";
        $controllerName = "App\\Controllers\\" . $runConfig['controllerName'];
        $controllerFilePath = realpath($path);

        if ($controllerFilePath){

            require_once $controllerFilePath;

            /**
             * @var Controller $controller
             */
            $controller = new $controllerName();
            $controller->setRegistry($this->getRegistry());
            $this->setResponse($controller->$runConfig['actionName']($this->getRequest()));
            
        } else {
            throw new \Exception("Controller file {$path} not found");
        }

    }
    
    public function send(){
        $response = $this->getResponse();
        $response->send();
    }

    /**     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param Request $request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param Response $response
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @return Model
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param Model $db
     */
    public function setDb(Model $db)
    {
        $this->db = $db;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param array $config
     */
    public function setConfig(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return Template
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param Template $view
     */
    public function setView(Template $view)
    {
        $this->view = $view;
    }

    /**
     * @return string
     */
    public function getConfigPath()
    {
        return $this->configPath;
    }

    /**
     * @param string $configPath
     */
    public function setConfigPath($configPath)
    {
        $this->configPath = $configPath;
    }

    /**
     * @return mixed
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * @param mixed $router
     */
    public function setRouter($router)
    {
        $this->router = $router;
    }

    /**
     * @return Register
     */
    public function getRegistry()
    {
        return $this->registry;
    }

    /**
     * @param Register $registry
     */
    public function setRegistry($registry)
    {
        $this->registry = $registry;
    }

    /**
     * @return string
     */
    public function getAppRoot()
    {
        return $this->appRoot;
    }

}