<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 22:58
 */

namespace Rpodwika\Designpatterns\Creational\Factory;


class Iphone implements Phone
{
    public function doSelfie()
    {
        return 'selfie';
    }

    public function callNumber($number)
    {
        return  "Iphone is calling number $number";
    }


}