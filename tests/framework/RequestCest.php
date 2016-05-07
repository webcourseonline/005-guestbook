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

        $I->setCookie('X-WEBCOURSE-DEBUG', 'true');
        $I->setCookie('X-WEBCOURSE-DEV', 'true');
        $I->sendGET("request.php", array('key' => "value"));
        $requestTest = json_decode($I->grabResponse(), true);

    }
}
