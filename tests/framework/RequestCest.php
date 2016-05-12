<?php


class RequestCest
{
    public function _before(FrameworkTester $I)
    {
    }

    public function _after(FrameworkTester $I)
    {
    }

    // tests
    public function testInitMethodGet(FrameworkTester $I){
//        $I->amOnUrl("http://127.0.0.1:8088/request.php");
//        $I->see("Nick");
//        $I->canSeeResponseCodeIs(201);
//        $I->setCookie('X-WEBCOURSE-DEV', 'true');

        $I->sendGET("request.php", array('key_get' => "value_get"));
        $requestTest = json_decode($I->grabResponse(), true);
        $I->assertEquals("value_get", $requestTest['params']['key_get']);
        $I->assertEquals("GET", $requestTest['type']);
//        $I->assertEquals('Symfony2 BrowserKit', $requestTest['headers']['User-Agent']);

    }

    public function testInitMethodPost(FrameworkTester $I){
        $I->sendPOST("request.php", array('key_post' => "value_post"));
        $requestTest = json_decode($I->grabResponse(), true);
        $I->assertEquals("value_post", $requestTest['params']['key_post']);
        $I->assertEquals("POST", $requestTest['type']);
    }

    public function testInitHeaders(FrameworkTester $I){
        $I->setHeader('Connection', 'keep-alive_7575');
        $I->sendPOST("request.php", array('Connection'=>'keep-alive_7575'));
        $I->seeHttpHeader('Host', '127.0.0.1:8088');
        $requestTest = json_decode($I->grabResponse(), true);
        $I->assertEquals("keep-alive_7575", $requestTest['headers']['Connection']);
        $I->assertNotEquals('example.com', $requestTest['headers']['Host']);

    }

    public function testInitCookiesCorrectDomen(FrameworkTester $I){
        $I->setCookie('X-WEBCOURSE-DEBUG', 'true');
        $I->setCookie('X-WEBCOURSE-DEV', 'true', array("domain" => "127.0.0.1"));
        $I->sendGET("request.php");
        $requestTest = json_decode($I->grabResponse(), true);
        $arrayCookies = array('X-WEBCOURSE-DEBUG'=>'true', 'X-WEBCOURSE-DEV'=>'true');
        $I->assertEquals($arrayCookies, $requestTest['cookies']);
    }

    public function testInitCookiesIncorrectDomen(FrameworkTester $I){
        $I->setCookie('X-WEBCOURSE-ANOTHER', 'true', array("domain" => "example.com"));
        $I->sendPOST("request.php");
        $requestTest = json_decode($I->grabResponse(), true);
        $I->assertNotContains('X-WEBCOURSE-ANOTHER', $requestTest['cookies']);
    }
}
