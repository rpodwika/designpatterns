<?php

namespace Rpodwika\Designpatterns\Tests\Behavioral\Proxy;

use Rpodwika\Designpatterns\Behavioral\Proxy\Driver;
use Rpodwika\Designpatterns\Behavioral\Proxy\ProxyCar;

class ProxyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return Driver[]
     *
     */
    public function getDrunkDrivers()
    {
        return [
            [new Driver('Driver a', true)],
            [new Driver('Driver b', true)],
            [new Driver('Driver c', true)],
        ];
    }

    /**
     * @return Driver[]
     */
    public function getSoberDrivers()
    {
        return [
            [new Driver('Driver a', false)],
            [new Driver('Driver b', false)],
            [new Driver('Driver c', false)],
        ];
    }

    /**
     * @param Driver $driver
     *
     * @dataProvider getSoberDrivers()
     *
     * @covers \Rpodwika\Designpatterns\Behavioral\Proxy\Car
     * @covers \Rpodwika\Designpatterns\Behavioral\Proxy\CarInterface
     * @covers \Rpodwika\Designpatterns\Behavioral\Proxy\Driver
     * @covers \Rpodwika\Designpatterns\Behavioral\Proxy\ProxyCar
     */
    public function testSoberDriverCanDriveCar(Driver $driver)
    {
        $car = new ProxyCar();
        $this->assertSame('I am driving a car', $car->drive($driver));
    }

    /**
     * @param Driver $driver
     *
     * @dataProvider getDrunkDrivers
     *
     * @covers \Rpodwika\Designpatterns\Behavioral\Proxy\Car
     * @covers \Rpodwika\Designpatterns\Behavioral\Proxy\CarInterface
     * @covers \Rpodwika\Designpatterns\Behavioral\Proxy\Driver
     * @covers \Rpodwika\Designpatterns\Behavioral\Proxy\ProxyCar
     */
    public function testDrunkDriverCannotDriveCar(Driver $driver)
    {
        $car = new ProxyCar();
        $this->assertSame('Driver cannot drive', $car->drive($driver));
    }
}