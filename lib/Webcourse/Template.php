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
 *Генерация страницы из шаблона и данных, подставленных в этот шаблон
 * @package Webcourse
 */
class Template
{
    /**
     *переменная, хранящая данные, которые подставляются в шаблон для генерации страницы
     * @var array
     */
    protected $data;


    /**
     * переменная, хранящая путь к файлу шаблона
     * @var string
     *
     */

    protected $path;

    /**
     * Задать путь к файлу
     * @param string $path
     *
     */

    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * return string $path
     * Получить путь к файлу
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param array $data
     * Задать данные
     */

    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     * Получить данные
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     *Добавить новые данные
     * @param $data
     */
    public function addData($data)
    {
        return $this->data = $data;
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