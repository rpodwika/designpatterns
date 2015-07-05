<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 22:59
 */

namespace Rpodwika\Designpatterns\Creational\Factory;


class Samsung implements Phone
{
    public function doGreatPhoto()
    {
        return 'great photo';
    }

    public function callNumber($number)
    {
        return "Samsung is calling number $number";
    }
}