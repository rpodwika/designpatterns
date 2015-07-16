<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 16.07.15
 * Time: 22:31
 */

namespace Rpodwika\Designpatterns\Tests\Behavioral\ChainOfResponsibility;

use Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility\ClientErrorHandler;
use Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility\HttpRequest;
use Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility\ServerErrorHandler;
use Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility\SuccessHandler;


/**
 * @covers \Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility\ClientErrorHandler
 * @covers \Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility\ServerErrorHandler
 * @covers \Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility\HttpRequest
 * @covers \Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility\Handler
 * @covers \Rpodwika\Designpatterns\Behavioral\ChainOfResponsibility\SuccessHandler
 */

class ChainOfResponsibilityTest extends \PHPUnit_Framework_TestCase
{
    public function testHandleSuccessfulRequest()
    {
        $successHandler = new SuccessHandler();
        $clientErrorHandler = new ClientErrorHandler();
        $serverErrorHandler = new ServerErrorHandler();

        $successHandler->setSuccessor($clientErrorHandler);
        $clientErrorHandler->setSuccessor($serverErrorHandler);

        $successHandler->handleRequest(new HttpRequest('testing OK', 200));
        $this->expectOutputString('Handling successful request');
    }

    public function testHandleServerErrorRequest()
    {
        $successHandler = new SuccessHandler();
        $clientErrorHandler = new ClientErrorHandler();
        $serverErrorHandler = new ServerErrorHandler();

        $successHandler->setSuccessor($clientErrorHandler);
        $clientErrorHandler->setSuccessor($serverErrorHandler);

        $successHandler->handleRequest(new HttpRequest('testing server error request', 503));

        $this->expectOutputString('Handling server error request');
    }

    public function testHandleClientErrorRequest()
    {
        $successHandler = new SuccessHandler();
        $clientErrorHandler = new ClientErrorHandler();
        $serverErrorHandler = new ServerErrorHandler();

        $successHandler->setSuccessor($clientErrorHandler);
        $clientErrorHandler->setSuccessor($serverErrorHandler);

        $successHandler->handleRequest(new HttpRequest('testing client error request', 402));

        $this->expectOutputString('Handling client error request');
    }

    public function testNoHandlerRequest()
    {
        $successHandler = new SuccessHandler();
        $clientErrorHandler = new ClientErrorHandler();
        $serverErrorHandler = new ServerErrorHandler();

        $successHandler->setSuccessor($clientErrorHandler);
        $clientErrorHandler->setSuccessor($serverErrorHandler);

        $successHandler->handleRequest(new HttpRequest('testing client error request', -10));

        $this->expectOutputString('');
    }

    public function testRequest()
    {
        $request = new HttpRequest('test value', 200);

        $this->assertEquals(200, $request->getCode());
        $this->assertEquals('test value', $request->getValue());
    }
}
