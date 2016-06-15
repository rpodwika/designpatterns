<?php

namespace Rpodwika\Designpatterns\Antipatterns\Singleton;

/**
 * Class SingletonTrait
 * @package Rpodwika\Designpatterns\Antipatterns\Singleton
 */
trait SingletonTrait
{
    protected static $instance;

    /**
     * @return static
     */
    final public static function getInstance()
    {
        return isset(static::$instance) ? static::$instance : static::$instance = new static();
    }

    /**
     * disabled constructor
     */
    final private function __construct()
    {
    }

}