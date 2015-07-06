<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 23:08
 */

namespace Rpodwika\Designpatterns\Creational\Factory;


class AnyphoneFactory implements PhoneFactory
{
    const TYPE_IPHONE  = 1;
    const TYPE_SAMSUNG = 2;

    private $type;

    /**
     * @return Phone
     */
    public function makePhone()
    {
        return $this->getType() == self::TYPE_IPHONE ? new Iphone() : new Samsung();
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}