<?php
/**
 * Created by PhpStorm.
 * User: dolphin
 * Date: 06.05.16
 * Time: 20:17
 */

namespace Webcourse;


class Register
{
    private $_config = array();
    private static $_instance = null;

    private function __construct()
    {
// приватный конструктор ограничивает реализацию getInstance ()
    }

    protected function __clone()
    {
// ограничивает клонирование объекта
    }

    static public function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function importConfig($path)
    {
        return self::$_instance->_config = include "$path";
    }

    public static function getValue($key)
    {
        return self::$_instance->_config[$key];
    }

    public static function setValue($key, $value)
    {
        self::$_instance->_config[$key] = $value;
    }
}