<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 21:53
 */

namespace Rpodwika\Designpatterns\Antipatterns;


class SingletonSample
{
    use SingletonTrait;

    public function doSomething()
    {
        return 'I do something';
    }
}