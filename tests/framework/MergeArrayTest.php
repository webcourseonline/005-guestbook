<?php

//<?php

class MergeArreyTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testMe(){

//        $array_1 = array("login" => 'Vasya', "pass" => 123 );
//        $array_2 = array("name" => 'Petya', "pass" => 1234 );
//        $result = array_merge($array_1, $array_2);
//        $this->assertArrayHasKey("login", $result);
//        $this->assertEquals('Vasya', $array_1["login"]);
//        $this->assertEquals(123, $array_1["pass"]);
//        $this->assertEquals(1234, $array_2["pass"]);
//        $this->assertEquals('Petya', $array_2["name"]);
//        $this->assertEquals(1234, $result["pass"]);
//
//        $array_1 = array("logins" => array("names" => array( "1" => 'Vasya', "2" => 'Alex', "3" => 'Roma')));
//        $array_2 = array( "other" => array("passes" => array("1" => 1, "2" => 12, "3" => 123)));
//        $result = array_merge($array_1, $array_2);
//        $this->assertEquals('Alex', $array_1["2"]);


        $array_1 = array(
            "names" => 'Vasya',
            "country" => "Ukraine",
            "pass" => array(
                "123" => 123, //
                "vk" => "kostyaa",
                "login" => array(
                    "nick2" => 'gek',
                    "nick" => 'gek'
                )
            )
        );
        $array_2 = array(
            "names" => 'Kostya',
            "city" => "Kharkiv",
            "pass" => array(
                "1" => 12,
                "123" => 100,
                "fb" => "vasyapupkin",
                "login" => array(
                    "nick" => 'kuk'
                )
            )
        );
        $result = array_replace_recursive($array_1, $array_2);

        $this->assertEquals('Kostya', $result["names"]);
        $this->assertEquals('Kharkiv', $result["city"]);
        $this->assertEquals('Ukraine', $result["country"]);
        $this->assertEquals('12', $result["pass"]["1"]);
        $this->assertEquals('kuk', $result["pass"]["login"]["nick"]);
        $this->assertEquals('gek', $result["pass"]["login"]["nick2"]);
        $this->assertEquals('kostyaa', $result["pass"]["vk"]);
        $this->assertEquals('vasyapupkin', $result["pass"]["fb"]);



//        $result_1 = array_merge($array_1["pass"], $array_2["pass"]);
//        $result_2 = array_merge($array_1["pass"]["login"], $array_2["pass"]["login"]);






//        $this->assertEquals('Vasya', $array_1["names"]);
//        $this->assertEquals('123', $array_1["pass"]["1"]);
//        $this->assertEquals('gek', $array_1["pass"]["login"]["nick"]);
//
//        $this->assertEquals('Kostya', $array_2["names"]);
//        $this->assertEquals('12', $array_2["pass"]["1"]);
//        $this->assertEquals('1234', $array_2["pass"]["value"]);
//        $this->assertEquals('kuk', $array_2["pass"]["login"]["nick"]);
//
//        $this->assertEquals('Kostya', $result["names"]);
//        $this->assertEquals('12', $result["pass"]["1"]);
//        $this->assertEquals('1234', $result["pass"]["value"]);
























//        $fc = new \Webcourse\MergeArrey();
//        $this->assertInstanceOf("\Webcourse\MergeArrey", $fc);

    }
}


/**
 * Created by PhpStorm.
 * User: dolphin
 * Date: 27.04.16
 * Time: 22:08
 */
