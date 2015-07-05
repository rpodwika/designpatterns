<?php

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 23:18
 */
use \Rpodwika\Designpatterns\Creational\Factory\SamsungFactory;

class SamsungFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Samsung::doGreatPhoto()
     * @covers SamsungFactory::makePhone()
     */
    public function testMakePhone()
    {
        $samsungFactory = new SamsungFactory();
        $samsung = $samsungFactory->makePhone();

        $this->assertNotNull($samsung);
        $this->assertEquals('great photo', $samsung->doGreatPhoto());
        $this->assertInstanceOf('Rpodwika\Designpatterns\Creational\Factory\Samsung', $samsung);
    }
}
