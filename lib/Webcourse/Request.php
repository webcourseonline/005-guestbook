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
    protected  $filePath;
    protected  $path;
    protected  $params;
    protected  $headers;
    protected  $cookies;
    protected  $type;

    /**
     * Request constructor.
     * $selfInit:bool
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
     *   Метод init() собирает информацию из суперглобальных массивов.
     */
    private function init(){
        $this->path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->type = $_SERVER["REQUEST_METHOD"];
        $this->cookies = $_COOKIE;
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


    public function getFilePath(){
        $filePath = explode("/", $_SERVER['REQUEST_URI']);
        $hhf = $filePath;
        $this->filePath = $filePath[1];
        return $this->filePath;

    }
    /**
     * @return mixed
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
     * @return array
     */
    public function getParams(){
        return $this->params;
    }

    /**
     * @param array $paramsData
     * @return array
     */
    public function addParams($paramsData){
        $this->params = array_merge($this->params, $paramsData);
        return $this->params;
    }

    /**
     * @return array
     */
    public function getHeaders(){
        return $this->headers;
    }

    /**
     * @param $headersData
     * @return array
     */
    public function addHeaders($headersData){
        $this->headers = array_merge($this->headers, $headersData);
        return $this->headers;
    }

    /**
     * @return array
     */
    public function getCookies(){
        return $this->cookies;
    }

    /**
     * @param $cookiesData
     * @return array|bool
     */
    public function setCookies($cookiesData){
        if (is_array($cookiesData)){
            $this->cookies = $cookiesData;
            return $this->cookies;
        }
        elseif (is_string($cookiesData)){
            $cookiesData = explode("=", $cookiesData);
            $this->cookies = $cookiesData;
            return $this->cookies;
        }
        else{
            return false;
        }
    }

    /**
     * @param $addCook
     * @return bool
     */
    public function addCookie($addCook){
        if (isset($this->cookies)){
            if (is_array($addCook)) {
                $this->cookies = array_merge($this->cookies, $addCook);
            }
            elseif(is_string($addCook)){
                $addCook = explode("=", $addCook);
                $this->cookies = array_merge($this->cookies, $addCook);
            }
            else
                return false;
        }
        else
            $this->setCookies($addCook);
    }

    /**
     * @return string
     */
    public function getType(){
        return $this->type;
    }

    /**
     * @param $typeData
     */
    public function setType($typeData){
        $this->type = $typeData;
    }
}
