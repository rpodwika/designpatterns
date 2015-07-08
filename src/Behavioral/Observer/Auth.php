<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 08.07.15
 * Time: 00:37
 */

namespace Rpodwika\Designpatterns\Behavioral\Observer;


class Auth extends Subject
{

    public function login()
    {
        //login logic here
        $this->setState('logged in');
        $this->notify();
    }

    public function logout()
    {
        //logout logic here
        $this->setState('logged out');
        $this->notify();
    }
}