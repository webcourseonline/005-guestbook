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
    protected $headers;
    /**
     * @var array
     */
    protected $cookies;
    /**
     * @var string
     */
    protected $contend;



    /**
     * ResponseController constructor.
     */
    public function __construct()
    {
    }
}