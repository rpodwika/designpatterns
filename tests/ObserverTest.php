<?php

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 08.07.15
 * Time: 00:51
 */

use \Rpodwika\Designpatterns\Behavioral\Observer\AuthLogging;
use \Rpodwika\Designpatterns\Behavioral\Observer\Auth;
use \Rpodwika\Designpatterns\Behavioral\Observer\AuthMailer;

class ObserverTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Auth::login
     * @covers Auth::logout
     */
    public function testSubjectAttachesObserver()
    {
        $auth = new Auth(); //obserable subject
        $authLogging = new AuthLogging($auth); //observes Auth class and logs events
        $authMailer = new AuthMailer($auth); //observers Auth class and mail about events

        $auth->login();
        $auth->logout();

        $this->expectOutputString(
            'logging event user has logged in' . PHP_EOL .
            'sending mail to administrator user has logged in' . PHP_EOL .
            'logging event user has logged out' . PHP_EOL .
            'sending mail to administrator user has logged out' . PHP_EOL
        );
    }
}
