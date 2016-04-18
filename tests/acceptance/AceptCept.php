<?php 
$I = new AcceptanceTester($scenario);
$I->amOnPage('/template.php');
$I->see('Name');
$I->wait(5);
$I->fillField(['name' => 'name'], 'Sergii');
$I->wait(5);

