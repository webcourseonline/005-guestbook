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
        $jhlk = array('code' => 500, 'headers' => array("pass"=>"qwerty"), 'cookies'=>array('X-WEBCOURSE-DEBUG' => 'true'), 'content'=>'ldshcowdlahindsljhfLSAkhcda');
        $I->sendPOST("response.php", array('code' => 500, 'headers' => array("pass"=>"qwerty"), 'cookies'=>array('X-WEBCOURSE-DEBUG' => 'true'), 'content'=>'ldshcowdlahindsljhfLSAkhcda'));
        $I->seeResponseCodeIs(500);
//        $responsTest = json_decode($I->grabResponse(), true);
        $I->see('ldshcowdlahindsljhfLSAkhcda');
        $I->seeCookie('X-WEBCOURSE-DEBUG');
        $I->seeHttpHeader('pass', 'qwerty');
    }
}
