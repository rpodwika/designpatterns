<?php

namespace Rpodwika\Designpatterns\Behavioral\Adapter;

/**
 * Class EmailClient
 * @package Rpodwika\Designpatterns\Behavioral\Adapter
 */
class EmailClient
{
    /**
     * @return string
     */
    public function sendEmail()
    {
        return 'I sent email';
    }

    /**
     * @return string
     */
    public function sendUtf8Email()
    {
        return 'I sent UTF-8 email';
    }
}