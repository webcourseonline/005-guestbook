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

    /**
     * Request constructor.
     */
    public function __construct()
    {
    }
//methods
    private function init($init){

    }

    /**
     * получаем параметры от пользователя (принимаем данные)
     */
    public function getParams(){
    return false;
    }

    /**
     *
     * помещаем данные полученные методом getParams() в массив $params
     */
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