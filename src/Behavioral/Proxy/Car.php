<?php

namespace Rpodwika\Designpatterns\Behavioral\Proxy;

/**
 * Class Car
 * @package Rpodwika\Designpatterns\Behavioral\Proxy
 */
class Car implements CarInterface
{
    /**
     * @inheritdoc
     */
    public function drive(Driver $driver)
    {
        return "I am driving a car";
    }
}