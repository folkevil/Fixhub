<?php
$I = new FunctionalTester($scenario);
$I->wantTo('login as a user');

$I->haveRecord('users', [
    'name'       => 'Joe Doe',
    'email'      => 'joe@doe.com',
    'password'   => bcrypt('password'),
    'created_at' => new DateTime(),
    'updated_at' => new DateTime(),
]);

$I->amOnPage('/auth/login');
$I->fillField('login', 'Joe Doe');
$I->fillField('password', 'password');
$I->click('button[type=submit]');

$I->amOnPage('/');
$I->seeAuthentication();
$I->see('Joe Doe', '.dropdown-username');