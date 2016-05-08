<?php


class ResponseCest
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
        $I->sendGET("response.php", array('code' => 500, 'headers' => array("pass"=>"qwerty"), 'cookies'=>array("key"=>"value"), 'contend'=>'ldshcowdlahindsljhfLSAkhcda'));
        $I->seeResponseCodeIs(500);
    }
}
