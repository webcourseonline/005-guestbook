<?php
/**
 * Created by PhpStorm.
 * User: margarita
 * Date: 18.04.16
 * Time: 21:37
 */

namespace Webcourse;


class Template
{
    /**
     * @var array
     */
    public $data;


    /**
     * @var string
     */
    public $path = "/tests/_data/template.phtml";

    /**
     *
     */

    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @param $path
     */
    public function getPath($path)
    {
        $this->path = $path;
    }


    public function setData(array $data)
    {/**
     * @var array
     */
        $this->data = $data;
    }

    /**
     * @param $data
     */
    public function getData($data)
    {
        $this->data = $data;
    }

    /**
     *
     *
     * @param $data
     */
    public function addData($data)
    {
        $this->data = $data;
    }
    /**
     *Template render.
     */
    public function render()
    {
    }
}