<?php

namespace Controllers;
use \AppTester;
use Codeception\Extension\PhpBuiltinServer;

class GuestbookCest
{
    public function _before(AppTester $I)
    {
    }

    public function _after(AppTester $I)
    {
    }

    // tests
    public function tryToOpenGuestbook(AppTester $I)
    {
        $I->amOnPage("/guestbook");
        $I->makeScreenshot("screen");
        $I->see(date("Y-m-d"));
        $I->

    }
}
