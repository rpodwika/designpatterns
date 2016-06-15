<?php

namespace Rpodwika\Designpatterns\Antipatterns\Singleton;

/**
 * Class SingletonSample
 * @package Rpodwika\Designpatterns\Antipatterns\Singleton
 */
class SingletonSample
{
    use SingletonTrait;

    /**
     * @return string
     */
    public function doSomething()
    {
        return 'I do something';
    }
}