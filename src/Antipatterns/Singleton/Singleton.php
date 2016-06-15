<?php

namespace Rpodwika\Designpatterns\Antipatterns\Singleton;

/**
 * Class Singleton
 * @package Rpodwika\Designpatterns\Antipatterns\Singleton
 */
class Singleton
{
    private static $instance;

    /**
     * @return $this
     */
    final public static function getInstance()
    {
        return static::$instance === null ? static::$instance = new static() : static::$instance;
    }

    /**
     *
     */
    final private function __construct()
    {
        //default construct should not have public access
    }

    /**
     * @return static::$instance;
     */
    final private function __clone()
    {
        return static::$instance;
    }

    /**
     * @return string
     */
    public function doSomething()
    {
        return 'I do something';
    }
}