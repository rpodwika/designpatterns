<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 10.07.15
 * Time: 20:15
 */

namespace Rpodwika\Designpatterns\Structural\Decorator;


class ShootingCharacter implements IDecoratedAttack
{
    const SHOOT_ATTACK_HP = 20;

    protected $character;

    public function __construct(IDecoratedAttack $character)
    {
        $this->character = $character;
    }

    /**
     * @inheritdoc
     */
    public function attack(Character $victim)
    {
        //shoots target
        $victim->weaken(self::SHOOT_ATTACK_HP);
        //performs default attack as well
        $this->character->attack($victim);
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getHp()
    {
        return $this->character->getHp();
    }

    /**
     * @inheritdoc
     */
    public function setHp($amount)
    {
        $this->character->setHp($amount);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function weaken($amount)
    {
        return $this->character->weaken($amount);
    }
}