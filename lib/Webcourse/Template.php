<?php
/**
 * Created by PhpStorm.
 * User: margarita
 * Date: 18.04.16
 * Time: 21:37
 */

namespace Webcourse;

/**
 * Class Template
 *
 * generation page from a template and data therein
 *
 * @package Webcourse
 */
class Template
{
    /**
     * @var array
     */
    public $data;


    /**
     * @var string
     *
     */
    public $path = "/tests/_data/template.phtml";

    /**
     * @param string $path
     *
     */

    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * return string (path)
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param array $data
     */

    public function setData($data)
    {/**
     * @param array $data
     */
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     *
     * @param $data
     */
    public function addData($data)
    {
        return $this->data = $data;
    }

    /**
     *page rendering and output buffering
     */
    public function render()
    {
    }

}