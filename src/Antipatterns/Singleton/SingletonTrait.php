<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 21:49
 */

namespace Rpodwika\Designpatterns\Antipatterns\Singleton;


trait SingletonTrait
{
    protected static $instance;

    final public static function getInstance()
    {
        return isset(static::$instance) ? static::$instance : static::$instance = new static();
    }

    final private function __construct()
    {
    }

    final private function __wakeup()
    {
    }

    final private function __clone()
    {
    }

}