<?php


namespace Webcourse;


class Router
{
    const CONTROLLER = 'IndexController';
    const ACTION = 'indexAction';

    private $routes;

    public function __construct()
    {
        $this->routes = require dirname(__FILE__).'/Routs.php';
    }

    public function run($uri = '/')
    {

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $segments = explode('/', $path);
                $controllerName = ucfirst(array_shift($segments));
                $actionName = array_shift($segments);
                if (!$controllerName && !$actionName) {
                    $controllerName = self::CONTROLLER;
                    $actionName = self::ACTION;
                } elseif (!$controllerName && $actionName) {
                    $controllerName = self::CONTROLLER;
                    $actionName = $actionName.'Action';
                }elseif ($controllerName && !$actionName) {
                    $controllerName =  $controllerName.'Controller';
                }
                return ['controllerName' => $controllerName,
                    'actionName' => $actionName];
            } else {
                return ['error'=>'Такой страницы не существует'];
            }
        }
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}