<?php

require_once '../../../vendor/autoload.php';

class RequestRun extends \Webcourse\Request{

    public static function __set_state($stateArray)
    {
        print json_encode($stateArray);
    }

}

$request = new RequestRun(true);
eval('print ' . var_export($request, true) . ";");
