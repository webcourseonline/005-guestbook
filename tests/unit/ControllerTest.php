<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 16.04.16
 * Time: 11:03
 */
class ControllerTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {

    }

    protected function tearDown()
    {

    }

    // tests
//    public function testMe()
//
//    {
//
//        $timestamp = time();
//        $_POST['name'] = $timestamp;
//        $_POST['email'] = 'olga@gmail.com';
//        $_POST['massage'] = 'hello world';
//        $_POST['date'] = '2016-04-16 11:38:21';
//
//        ob_start();
//
//        include realpath(__DIR__ . '/../../index.php');
//
//        $html = ob_get_contents();
//        ob_end_clean();
//
//        $this->assertGreaterThan(0, strpos($html, (string)$timestamp));
//
//
//    }
//
//    public function testProblemEmail()
//
//    {
//
//        $timestamp = date("Y-m-d H:i:s");
//        $_POST['name'] = $timestamp;
//        $_POST['email'] = 'olggmail.com';
//        $_POST['massage'] = 'hello world';
//        $_POST['date'] = '2016-04-16 11:38:21';
//        ob_start();
//
//        include realpath(__DIR__ . '/../../index.php');
//
//        $html = ob_get_contents();
//        ob_end_clean();
//
//        $this->assertGreaterThan(0, strpos($html, "Введите правильный Email"));
//
//
//    }
//    public function testProblemEmail()
//
//    {
//
//        $timestamp = date("Y-m-d H:i:s");
//        $_POST['name'] = 'testProblemEmail';
//        $_POST['email'] = 'olggmail.com';
//        $_POST['massage'] = 'hello world';
//        $_POST['date'] = '2016-04-16 11:38:21';
//        ob_start();
//
//        include realpath(__DIR__ . '/../../index.php');
//
//        $html = ob_get_contents();
//        ob_end_clean();
//
//        $this->assertGreaterThan(0, strpos($html, "Введите правильный Email"));
//
//
//    }
}
