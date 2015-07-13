<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 11.07.15
 * Time: 20:43
 */

namespace Rpodwika\Designpatterns\Behavioral\Adapter;


class EmailClientOnlyUtfAdapter implements OnlyUtfSender
{
    private $emailClient;

    function __construct(EmailClient $emailClient)
    {
        $this->emailClient = $emailClient;
    }

    public function send()
    {
        return $this->emailClient->sendUtf8Email();
    }
}