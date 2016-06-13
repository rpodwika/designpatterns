<?php

namespace Rpodwika\Designpatterns\Behavioral\Proxy;

/**
 * Interface CarInterface
 * @package Rpodwika\Designpatterns\Behavioral\Proxy
 */
interface CarInterface
{
    /**
     * Method drives a car
     *
     * @param Driver $driver
     *
     * @return string
     */
    public function drive(Driver $driver);
}