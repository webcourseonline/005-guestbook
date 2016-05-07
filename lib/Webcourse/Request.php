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
    protected  $params;
    protected  $headers;
    protected  $cookies;
    protected  $type;

    public     $init;
    public     $dat_params;
    public     $dat_headers;
    public     $new_cookies;
    public     $new_type;
    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->params = array();
        $this->headers = array();
        $this->cookies = array();
        $this->type = " ";
        $this->init();
    }
//methods
    /**
     * сбор инф. из суперглобальных массивов
     *
     * @param $init
     */
    private function init(){
    $this->type = $_SERVER["REQUEST_METHOD"];
    $this->cookies = $_SERVER["HTTP_COOKIE"];
    $this->headers = getallheaders();
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
     * $params
     */
    public function addParams($dat_params){
        $this->params = array_merge($this->params, $dat_params);
        return $this->params;
    }

    /**
     *
     */
    public function getHeaders(){
        return $this->headers;
    }

    public function addHeaders($dat_headers){
        $this->headers = array_merge($this->headers, $dat_headers);
        return $this->headers;
    }
    public function getCookies(){
        return $this->cookies;
    }

    public function setCookies($new_cookies){
        $this->cookies = $new_cookies;
        return $this->cookies;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($new_type){
        $this->type = $new_type;
        return $this->type;
    }

}
