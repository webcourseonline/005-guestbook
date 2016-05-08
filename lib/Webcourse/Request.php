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
    protected  $path;
    protected  $params;
    protected  $headers;
    protected  $cookies;
    protected  $type;

    /**
     * Request constructor.
     */
    public function __construct($selfInit = false)
    {
        $this->params = array();
        $this->headers = array();
        $this->cookies = array();
        $this->type = false;

        if($selfInit){
            $this->init();
        }
    }
//methods
    /**
     * сбор инф. из суперглобальных массивов
     *
     * @param $init
     */
    private function init(){

        if (isset($_SERVER["REQUEST_URI"])){
            $this->path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
        
        if (isset($_SERVER["REQUEST_METHOD"])){
            $this->type = $_SERVER["REQUEST_METHOD"];
        }

        if (function_exists("getallheaders")){
            $this->headers = getallheaders();
        }

        $this->cookies = $_COOKIE;
        if($this->type == "GET"){
            $this->params = $_GET;
        }
        elseif($this->type == "POST"){
            $this->params = $_POST;
        }
        else{
            $this->params = array();
        }
    }

    /**
     *
     */
    public function getParams(){
        return $this->params;
    }

    /**
     *
     */
    public function getPath(){
        return $this->path;
    }

    /**
     *
     */
    public function setPath($path){
        $this->path = $path;
    }

    /**
     * $params
     */
    public function addParams($paramsData){
        $this->params = array_merge($this->params, $paramsData);
        return $this->params;
    }

    /**
     *
     */
    public function getHeaders(){
        return $this->headers;
    }

    public function addHeaders($headersData){
        $this->headers = array_merge($this->headers, $headersData);
        return $this->headers;
    }
    public function getCookies(){
        return $this->cookies;
    }

    public function setCookies($cookiesData){
        $this->cookies = $cookiesData;
        return $this->cookies;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($typeData){
        $this->type = $typeData;
        return $this->type;
    }

}
