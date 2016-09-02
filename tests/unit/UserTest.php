<?php

use Fixhub\Models\User;

use Illuminate\Support\Facades\Hash;
class UserTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    public function testRegister()
    {
        $name = 'phecho';
        $email = 'phecho@fixhub.org';
        $password ='password';
        User::create(['name' => $name, 'email' => $email, 'password' => $password]);
        $this->tester->seeRecord('users', ['name' => $name, 'email' => $email, 'password' => Hash::make($password)]);
    }
}