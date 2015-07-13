<?php

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 23:18
 */
use \Rpodwika\Designpatterns\Creational\Factory\SamsungFactory;
use \Rpodwika\Designpatterns\Creational\Factory\IphoneFactory;

class FactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \Rpodwika\Designpatterns\Creational\Factory\SamsungFactory
     * @covers \Rpodwika\Designpatterns\Creational\Factory\Samsung
     */
    public function testSamsungFactoryMakePhone()
    {
        $samsungFactory = new SamsungFactory();
        $samsung = $samsungFactory->makePhone();

        $this->assertNotNull($samsung);
        $this->assertEquals('great photo', $samsung->doGreatPhoto());
        $this->assertInstanceOf('Rpodwika\Designpatterns\Creational\Factory\Samsung', $samsung);
    }

    /**
     * @covers \Rpodwika\Designpatterns\Creational\Factory\Iphone
     * @covers \Rpodwika\Designpatterns\Creational\Factory\Phone
     * @covers \Rpodwika\Designpatterns\Creational\Factory\IphoneFactory
     */
    public function testIphoneFactoryMakePhone()
    {
        $iphoneFactory = new IphoneFactory();
        $iphone = $iphoneFactory->makePhone();
        $this->assertEquals(sprintf('Iphone is calling number %d', 123), $iphone->callNumber(123));
        $this->assertEquals('selfie', $iphone->doSelfie());
        $this->assertNotNull($iphone);
        $this->assertInstanceOf('Rpodwika\Designpatterns\Creational\Factory\Iphone', $iphone);
    }
}
