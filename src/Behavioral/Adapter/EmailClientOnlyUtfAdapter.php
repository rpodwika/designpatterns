<?php

namespace Rpodwika\Designpatterns\Behavioral\Adapter;

/**
 * Class EmailClientOnlyUtfAdapter
 * @package Rpodwika\Designpatterns\Behavioral\Adapter
 */
class EmailClientOnlyUtfAdapter implements OnlyUtfSender
{
    private $emailClient;

    /**
     * @param EmailClient $emailClient
     */
    public function __construct(EmailClient $emailClient)
    {
        $this->emailClient = $emailClient;
    }

    /**
     * @inheritdoc
     */
    public function send()
    {
        return $this->emailClient->sendUtf8Email();
    }
}