<?php

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 11.07.15
 * Time: 20:47
 */

use \Rpodwika\Designpatterns\Behavioral\Adapter\EmailClient;
use \Rpodwika\Designpatterns\Behavioral\Adapter\EmailClientOnlyUtfAdapter;

class AdapterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\Adapter\EmailClient::sendUtf8Email
     */
    public function testEmailClientSendsUtf8()
    {
        $emailClient = new EmailClient();
        $this->assertEquals('I sent UTF-8 email', $emailClient->sendUtf8Email());
    }

    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\Adapter\EmailClient::sendEmail
     */
    public function testEmailClientSendsPlainEmail()
    {
        $emailClient = new EmailClient();
        $this->assertEquals('I sent email', $emailClient->sendEmail());
    }

    public function testEmailAdapterSendsEmail()
    {
        $emailClient = new EmailClient();
        $emailClientUffAdapter = new EmailClientOnlyUtfAdapter($emailClient);
        $this->assertEquals('I sent UTF-8 email', $emailClientUffAdapter->send());
    }
}