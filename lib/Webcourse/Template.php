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
 * Генерация страницы из шаблона и данных, подставленных в этот шаблон
 *
 * @package Webcourse
 */
class Template
{
    /**
     * переменная, хранящая данные, которые подставляются в шаблон для генерации страницы
     *
     * @var array
     */
    protected $data;


    /**
     * переменная, хранящая путь к файлу шаблона
     *
     * @var string
     */
    protected $path;

    /**
     * Задать путь к файлу шаблона
     *
     * @param $path
     * @return bool|string
     */
    public function setPath($path)
    {
        if (is_string($path)) {
            return $this->path = $path;
        } else {
            return false;
        }
    }

    /**
     * Получить путь к файлу шаблона для генерации страницы
     *
     * @return string $path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Задать данные для генерации страницы
     *
     * @param array $data
     * @return bool|string
     */
    public function setData($data)
    {
        if (is_array($data)) {
            return $this->data = $data;
        } else {
            return false;
        }
    }

    /**
     * Получить данные для генерации страницы
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Добавить новые данные
     *
     * @param $data
     * @return bool|string
     */
    public function addData($data)
    {
        if (is_array($data)) {
            $varAddData = $this->getData();
            $result = array_merge($varAddData, $data);
            $this->setData($result);
            return $result;
        } else {
            return false;
        }


    }


    /**
     * Рендеринг страницы
     */
    public function render()
    {
        ob_start();
        try {
            if (file_exists($this->path)
                && is_file($this->path)) {

                $view = $this->getData();
                require realpath($this->path);

                $template = ob_get_contents();
                ob_get_clean();

                return $template;
            }
        } catch (\Exception $e) {
            return $e->getMessage() ."\n<br/>". $e->getTraceAsString();
        }

    }

}