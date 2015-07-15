<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 15.07.15
 * Time: 00:41
 */

namespace Rpodwika\Designpatterns\Tests\Behavioral\State;

use Rpodwika\Designpatterns\Behavioral\State\ConnectionEstablished;

class ConnectionEstablishedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionEstablished::open
     */
    public function testOpen()
    {
        $connection = new ConnectionEstablished();
        $this->assertEquals('Cannot open already opened connection', $connection->open());
    }

    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionEstablished::close
     */
    public function testClose()
    {
        $connection = new ConnectionEstablished();
        $this->assertEquals('Freeing resources', $connection->close());
    }

    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionEstablished::reconnect
     */
    public function testReconnect()
    {
        $connection = new ConnectionEstablished();
        $this->assertEquals('Waiting for reconnection', $connection->reconnect());
    }
}
