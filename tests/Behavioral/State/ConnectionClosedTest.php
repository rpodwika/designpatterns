<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 15.07.15
 * Time: 00:41
 */

namespace Rpodwika\Designpatterns\Tests\Behavioral\State;

use Rpodwika\Designpatterns\Behavioral\State\ConnectionClosed;

class ConnectionClosedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionClosed::open
     */
    public function testOpen()
    {
        $connection = new ConnectionClosed();
        $this->assertEquals('Opening connection', $connection->open());
    }

    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionClosed::close
     */
    public function testClose()
    {
        $connection = new ConnectionClosed();
        $this->assertEquals('Connection already closed', $connection->close());
    }

    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionClosed::reconnect
     */
    public function testReconnect()
    {
        $connection = new ConnectionClosed();
        $this->assertEquals('Reconnecting', $connection->reconnect());
    }
}
