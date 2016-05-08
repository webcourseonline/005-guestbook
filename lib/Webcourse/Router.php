<?php


namespace Webcourse;


class Router
{
    const CONTROLLER = 'IndexController';
    const ACTION = 'indexAction';

    private $routes;

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function run($uri)
    {
        if ($uri == '/') {
            return ['controllerName' => self::CONTROLLER,
                    'actionName' => self::ACTION];
        } else {
            $uri = substr($uri, 1);
        }

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $segments = explode('/', $path);
                $controllerName = ucfirst(array_shift($segments));
                $actionName = array_shift($segments);
                $variables = substr($uri, strpos($uri, $uriPattern) + strlen($uriPattern));
                $variables = preg_split("/[\/]+/", $variables);
                if(!$variables) {
                    $var = $variables[1];
                    $data = $variables[2];
                }

                if (!$controllerName && !$actionName) {
                    $controllerName = self::CONTROLLER;
                    $actionName = self::ACTION;
                } elseif (!$controllerName && $actionName) {
                    $controllerName = self::CONTROLLER;
                    $actionName = $actionName.'Action';
                } elseif ($controllerName && !$actionName) {
                    $controllerName =  $controllerName.'Controller';
                } elseif ($controllerName && $actionName) {
                    $controllerName =  $controllerName.'Controller';
                    $actionName = $actionName.'Action';
                }
            }
        }
        if (isset($var)) {
            return ['controllerName' => $controllerName,
                'actionName' => $actionName,
                $var => $data,
            ];
        } elseif ($controllerName && $actionName) {
            return ['controllerName' => $controllerName,
                    'actionName' => $actionName,
            ];
        } else {
            return ['error'=>'Такой страницы не существует'];
        }

    }

    public function getRoutes()
    {
        return $this->routes;
    }
}