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
    protected $code;
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
        foreach ($this->getHeaders() as $key => $value){
            header($key . ': ' . $value);
        }
        echo $this->getContent();
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
        $this->code = $code;
        
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
        $this->headers = $headers;
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