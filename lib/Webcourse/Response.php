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



    public function send($response){
        $this->setCode($response);



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
    public function setCode($response)
    {
        if (isset($response['code'])) {
            $this->code = $response['code'];
        }
        http_response_code($this->code);
        
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
        if (isset($response['headers'])) {
            foreach($response['headers'] as $key => $value){
                $this->headers($key.': '.$value);
            }
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