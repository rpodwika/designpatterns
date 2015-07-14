<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 14:40
 */

namespace Rpodwika\Designpatterns\Antipatterns\Singleton;

class Singleton
{
    private static $instance;

    /**
     * @return bool
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

    final private function __wakeup()
    {
    }

    final private function __clone()
    {
    }

    public function doSomething()
    {
        return 'I do something';
    }
}