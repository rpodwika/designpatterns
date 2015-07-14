<?php

namespace Rpodwika\Designpatterns\Tests\Structural\Decorator;

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 10.07.15
 * Time: 20:31
 */
use \Rpodwika\Designpatterns\Structural\Decorator\Character;
use \Rpodwika\Designpatterns\Structural\Decorator\ShootingCharacter;

class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Rpodwika\Designpatterns\Structural\Decorator\Character
     */
    public function testCharacterAttack()
    {
        $murderer = new Character();
        $victim = new Character(90);

        $this->assertEquals(100, $murderer->getHp());
        $this->assertEquals(90, $victim->getHp());
        $murderer->weaken(10);
        $this->assertEquals(90, $murderer->getHp());
    }

    /**
     * @covers \Rpodwika\Designpatterns\Structural\Decorator\ShootingCharacter
     */
    public function testShootingCharacter()
    {
        $victim = new Character();
        $murderer = new Character();

        $shootingMurderer = new ShootingCharacter($murderer);
        $this->assertEquals($murderer->getHp(), $shootingMurderer->getHp());
        $shootingMurderer->attack($victim);
        $this->assertEquals(75, $victim->getHp());
        $murderer->attack($victim);
        $this->assertEquals(70, $victim->getHp());
    }

    /**
     * @covers \Rpodwika\Designpatterns\Structural\Decorator\Character::weaken
     */
    public function testWeakenCharacter()
    {
        $character = new Character(100);
        $character->weaken(10);
        $this->assertEquals(90, $character->getHp());
    }
}
