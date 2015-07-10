<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 10.07.15
 * Time: 20:04
 */

namespace Rpodwika\Designpatterns\Structural\Decorator;


class Character implements IDecoratedAttack
{
    const DEFAULT_HP = 100;
    const DEFAULT_ATTACK_HP = 5;

    protected $hp;

    /**
     * @param int $hp
     */
    public function __construct($hp = self::DEFAULT_HP)
    {
        $this->setHp($hp);
    }

    /**
     * @inheritdoc
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @inheritdoc
     */
    public function setHp($amount)
    {
        $this->hp = $amount;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function attack(Character $victim)
    {
        $victim->weaken(self::DEFAULT_ATTACK_HP);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function weaken($amount)
    {
        $this->hp -= $amount;

        return $this->hp <= 0 ? 'dead' : 'alive';
    }


}