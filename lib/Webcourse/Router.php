<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 18.04.16
 * Time: 20:45
 */

namespace Webcourse;


class ActivityStreamController
{
    public function addActivity()
    {
        echo 'work!!!';
    }
}

class Router
{
    public function route($url)
    {
        $path = $this->dispatchUrl($url);
        $this->callController($path);
    }

    protected function dispatchUrl($url)
    {
        $partsOfUrl = preg_split("/[\/]+/", $url);

        if ( isset($partsOfUrl[2])){
            $controllerName = ucfirst($partsOfUrl[2]).'Controller';
        } else {
            $controllerName = 'IndexController';
        }
        if ( isset($partsOfUrl[3])){
            $actionName = $partsOfUrl[3].'Action';
        } else {
            $actionName = 'indexAction';
        }

        return ['controllerName' => $controllerName,
            'actionName' => $actionName,
        ];
    }

    protected function callController($path)
    {
        $controller = new $path['controllerName']();
        $controller->$path['actionName']();
    }
}



$router = new Router();
$router->route('http://domain.ru/activityStream/addActivity');
}