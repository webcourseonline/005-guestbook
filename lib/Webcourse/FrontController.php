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

//    /**
//     * @var 
//     */
//    protected $router;

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
     * FrontController constructor.
     */
    public function __construct($configDir, $env = self::ENV_DEV)
    {
        
        $configName = "config_{$env}.php";
        $this->setConfigPath($configDir . "/" . $configName);
        $this->config = include $this->getConfigPath();

    }

    /**
     * @return bool
     */
    public function init()
    {
        
        $this->setDb(new Model($this->config));
        $this->setConfig(array());
        $this->setResponse(new Response());
        $this->setRequest(new Request());
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

    /**
     * @return Request
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
    
}