<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 09.07.15
 * Time: 00:01
 */

namespace Rpodwika\Designpatterns\Behavioral\Observer;


class AuthMailer extends Observer
{
    /**
     * @inheritdoc
     */
    public function update(Subject $subject)
    {
        if ($subject->getState() == 'logged in') {
            $this->sendUserHasLoggedInMail();
        } else {
            $this->sendUserHasLoggedOutMail();
        }
    }

    private function sendUserHasLoggedInMail()
    {
        //sending mail
        echo 'sending mail to administrator user has logged in' . PHP_EOL;
        return true;
    }

    private function sendUserHasLoggedOutMail()
    {
        //sending mail
        echo 'sending mail to administrator user has logged out' . PHP_EOL;
        return true;
    }

}