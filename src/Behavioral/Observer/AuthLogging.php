<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 08.07.15
 * Time: 00:45
 */

namespace Rpodwika\Designpatterns\Behavioral\Observer;


class AuthLogging extends Observer
{
    public function update(Subject $subject)
    {
        //doing action when user is logged
        if ($subject->getState() == 'logged in') {
            $this->logUserHasLoggedIn();
        } else {
            if ($subject->getState() == 'logged out') {
                $this->logUserHasLoggedOut();
            }
        }
    }

    private function logUserHasLoggedIn()
    {
        echo 'logging event user has logged in' . PHP_EOL;
        //logic for logging logged user (too many log words :) )
    }

    private function logUserHasLoggedOut()
    {
        echo 'logging event user has logged out' . PHP_EOL;
        //logic for logging out user
    }
}