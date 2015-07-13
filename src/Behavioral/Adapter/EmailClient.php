<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 11.07.15
 * Time: 20:35
 */

namespace Rpodwika\Designpatterns\Behavioral\Adapter;


class EmailClient
{
    public function __construct()
    {

    }

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