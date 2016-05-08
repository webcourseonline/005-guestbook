<?php

namespace Webcourse;

abstract class Controller
{

    /**
     * @var Register
     */
    protected $registry;

    /**
     * Controller constructor.
     * 
     */
    final public function __construct()
    {
        $this->init();
    }

    /**
     * Controller initialization
     */
    public function init(){
        
    }

    /**
     * @return Register
     */
    public function getRegistry()
    {
        return $this->registry;
    }

    /**
     * @param Register $registry
     */
    public function setRegistry($registry)
    {
        $this->registry = $registry;
    }    
    
}