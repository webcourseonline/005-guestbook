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
    protected $data;


    /**
     * @var array
     */
    protected $param;

    /**
     * @var string
     *
     */

    protected $path;

    /**
     * @param string $path
     *
     */

    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * return string $path
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


    public function setParam($param)
    {
        $this->param = $param;
    }

    public function getParam()
    {
       return $this->param;
    }
    /**
     *page rendering
     */
    public function render()
    {
        try {
            if (file_exists($this->path)
                && is_file($this->path)) {
                $template = file_get_contents($this->path);
                return $template;
            }
        } catch (\Exception $e) {
            return $e->getMessage() ."\n<br/>". $e->getTraceAsString();
        }



    }

}