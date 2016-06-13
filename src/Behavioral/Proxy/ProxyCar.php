<?php

namespace Rpodwika\Designpatterns\Behavioral\Proxy;

/**
 * Class ProxyCar
 * @package Rpodwika\Designpatterns\Behavioral\Proxy
 */
class ProxyCar implements CarInterface
{
    /**
     * @var CarInterface
     */
    private $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    /**
     * @inheritdoc
     */
    public function drive(Driver $driver)
    {
        if ($driver->isDrunk()) {
            return 'Driver cannot drive';
        }

        return $this->car->drive($driver);
    }
}