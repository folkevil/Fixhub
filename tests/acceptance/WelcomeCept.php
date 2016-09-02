<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Fixhub.org?');
$I->amOnPage('/');
$I->see('fixhub?');