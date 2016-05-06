<?php
/**
 * Created by PhpStorm.
 * User: dolphin
 * Date: 06.05.16
 * Time: 20:17
 */

namespace Webcourse;


class Register {






    private $_config = array();
    private static $_instance = null;
    private function __construct() {
// приватный конструктор ограничивает реализацию getInstance ()
    }
    protected function __clone() {
// ограничивает клонирование объекта
    }
    static public function getInstance() {
        if(is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function import() {
// ...
    }
    public function get() {
// ...
    }
}



}