<?php
/**
 * Created by PhpStorm.
 * User: sergii
 * Date: 18.04.16
 * Time: 21:25
 */

namespace Webcourse;


class Response
{
    /**
     * @var int 
     */
    protected $code = 200;
    /**
     * @var array
     */
    protected $headers = array();
    /**
     * @var array
     */
    protected $cookies = array();
    /**
     * @var string
     */
    protected $content;




    public function send(){
        
        http_response_code($this->getCode());
        foreach($this->getHeaders() as $key => $value) {
            header($key . ': ' . $value);
//            $testHeaders =  array($key . ': ' . $value);
        }
//        $testHeader = array_merge($testHeader, );
        foreach($this->getCookies() as $key => $value) {
            setcookie($key . ': ' . $value);
//            $testCookies = ($key . ': ' . $value);
        }
        print $this->getContent();

    }
    
    public function fillResponse($state){

        if (isset($state)) {
            $this->setCode($state['code']);
            $this->setHeaders($state['headers']);
            $this->setCookies($state['cookies']);
            $this->setContent($state['content']);
        }
        
    }

    /**
     * ResponseController constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
        
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        if (isset($code)) {
            $this->code = $code;
        }
        
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders($headers)
    {

        if(isset($headers)){
            $this->headers = $headers;
        }

    }

    /**
     * @return array
     */
    public function getCookies()
    {
        return $this->cookies;
    }

    /**
     * @param array $cookies
     */
    public function setCookies($cookies)
    {
        $this->cookies = $cookies;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    
    
}