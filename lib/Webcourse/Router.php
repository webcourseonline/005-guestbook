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

    public function run($uri = 'webcourse/write')
    {
        $controllerName = self::CONTROLLER;
        $actionName = self::ACTION;

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $segments = explode('/', $path);
                $controllerName = ucfirst( array_shift($segments).'Controller' );
                $actionName = 'action'.ucfirst( array_shift($segments) );
            }
        }


        return ['controllerName' => $controllerName,
                'actionName' => $actionName];
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}