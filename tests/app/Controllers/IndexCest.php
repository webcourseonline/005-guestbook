<?php
namespace Controllers;
use \AppTester;
use Codeception\Extension\PhpBuiltinServer;

class IndexCest
{

    // tests
    public function tryToTest(AppTester $I)
    {
        
        $I->amOnPage("/");
        $I->see("IndexController:indexAction");
        $I->seeInTitle('Guestbook');


        
    }
}
