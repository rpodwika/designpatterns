<?php
namespace Rpodwika\Designpatterns\Tests\Creational\Factory;

use Rpodwika\Designpatterns\Creational\Factory\AnyphoneFactory;

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 23:12
 */
class AnyphoneFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Rpodwika\Designpatterns\Creational\Factory\AnyphoneFactory
     * @covers \Rpodwika\Designpatterns\Creational\Factory\Iphone
     */
    public function testFactoryCreatesIphone()
    {
        $anyPhoneFactory = new AnyphoneFactory();
        $anyPhoneFactory->setType(AnyphoneFactory::TYPE_IPHONE);
        $iphone = $anyPhoneFactory->makePhone();

        $this->assertEquals('Iphone is calling number 434', $iphone->callNumber(434));
        $this->assertInstanceOf('Rpodwika\Designpatterns\Creational\Factory\Iphone', $iphone);
    }

    /**
     * @covers \Rpodwika\Designpatterns\Creational\Factory\Samsung
     * @covers \Rpodwika\Designpatterns\Creational\Factory\AnyphoneFactory
     */
    public function testFactoryCreatesSamsung()
    {
        $anyPhoneFactory = new AnyphoneFactory();
        $anyPhoneFactory->setType(AnyphoneFactory::TYPE_SAMSUNG);
        $samsung = $anyPhoneFactory->makePhone();

        $this->assertEquals('Samsung is calling number 434', $samsung->callNumber(434));
        $this->assertInstanceOf('Rpodwika\Designpatterns\Creational\Factory\Samsung', $samsung);
    }
}
