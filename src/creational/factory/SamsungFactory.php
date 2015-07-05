<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 23:07
 */

namespace Rpodwika\Designpatterns\Creational\Factory;


class SamsungFactory implements PhoneFactory
{
    public function makePhone()
    {
        return new Samsung();
    }
}