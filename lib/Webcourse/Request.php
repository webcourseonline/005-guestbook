<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 18.04.16
 * Time: 21:15
 */

namespace Webcourse;


class Request
{
//internals
    protected static $params;
    protected static $headers;
    protected static $cookies;
    protected static $type;

    /**
     * Request constructor.
     */
    public function __construct()
    {
    }
//methods
    private function init($init){

    }

    public function getParams(){

    }

    public function addParams($params){

    }

    public function getHeaders(){

    }

    public function addHeaders($headers){

    }
    public function getCookies(){

    }

    public function setCookies($cookies){

    }

    public function getType(){

    }

    public function setType($type){

    }

}