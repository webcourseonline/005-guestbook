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
    public function tryToTest(FrameworkTester $I)
    {

//        $I->amOnUrl("http://127.0.0.1:8088/request.php");
//        $I->see("Nick");
//        $I->canSeeResponseCodeIs(201);
//        $I->setCookie('X-WEBCOURSE-DEV', 'true');

        $I->setCookie('X-WEBCOURSE-DEBUG', 'true');
        $I->setCookie('X-WEBCOURSE-DEV', 'true', array("domain" => "127.0.0.1"));
        $I->setCookie('X-WEBCOURSE-ANOTHER', 'true', array("domain" => "example.com"));
        $I->sendGET("request.php", array('key_get' => "value_get"));
        $requestTest = json_decode($I->grabResponse(), true);
        $I->assertEquals("value_get", $requestTest['params']['key_get']);
        $I->assertEquals('X-WEBCOURSE-DEBUG=true', $requestTest['cookies'][0]);
        $I->assertEquals(' X-WEBCOURSE-DEV=true', $requestTest['cookies'][1]);
        $I->assertEquals("GET", $requestTest['type']);

        }
}
