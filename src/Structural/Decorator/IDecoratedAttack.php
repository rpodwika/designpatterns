<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 10.07.15
 * Time: 20:02
 */

namespace Rpodwika\Designpatterns\Structural\Decorator;


interface IDecoratedAttack
{
    /**
     * @param Character $victim
     * @return $this
     */
    public function attack(Character $victim);

    /**
     * @return int
     */
    public function getHp();

    /**
     * @param $amount
     * @return $this
     */
    public function setHp($amount);

    /**
     * @param int $amount
     * @return string
     */
    public function weaken($amount);
}