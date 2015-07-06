<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 23:06
 */

namespace Rpodwika\Designpatterns\Creational\Factory;


class IphoneFactory implements PhoneFactory
{
    public function makePhone()
    {
        return new Iphone();
    }
}