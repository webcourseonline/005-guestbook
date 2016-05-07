<?php
/**
 * Created by PhpStorm.
 * User: dolphin
 * Date: 06.05.16
 * Time: 20:17
 */

namespace Webcourse;


class Register {

        protected static $data;

        /**
         * @return mixed
         */
        public static function getValue($key)
        {
                return self::$data[$key];
        }

        /**
         * @param mixed $value
         */
        public static function setValue($key, $value)
        {
                self::$data[$key] =  $value;
        }











}