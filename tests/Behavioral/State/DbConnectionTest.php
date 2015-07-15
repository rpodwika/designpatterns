<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 15.07.15
 * Time: 00:51
 */

namespace Rpodwika\Designpatterns\Tests\Behavioral\State;


use Rpodwika\Designpatterns\Behavioral\State\DbConnection;

class DbConnectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\State\DbConnection
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionEstablished
     */
    public function testConnect()
    {
        $dbConnection = new DbConnection(123, 'mysql://user@pass');
        $this->assertEquals(123, $dbConnection->getPort());
        $this->assertEquals('mysql://user@pass', $dbConnection->getUri());
        $this->assertEquals('Opening connection mysql://user@pass:123', $dbConnection->connect());
        $this->assertInstanceOf('\Rpodwika\Designpatterns\Behavioral\State\ConnectionEstablished', $dbConnection->getState());
    }

    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\State\DbConnection
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionClosed
     */
    public function testClose()
    {
        $dbConnection = new DbConnection(123, 'mysql://user@pass');
        $this->assertEquals('Closing connection', $dbConnection->close());
        $this->assertInstanceOf('\Rpodwika\Designpatterns\Behavioral\State\ConnectionClosed', $dbConnection->getState());
    }

    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\State\DbConnection
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionClosed
     * @covers \Rpodwika\Designpatterns\Behavioral\State\ConnectionEstablished
     */
    public function testReconnect()
    {
        $dbConnection = new DbConnection(123, 'mysql://user@pass');
        $this->assertEquals('Reconnecting', $dbConnection->reconnect());
        $this->assertInstanceOf('\Rpodwika\Designpatterns\Behavioral\State\ConnectionEstablished', $dbConnection->getState());
    }
}
