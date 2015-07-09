<?php

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 09.07.15
 * Time: 23:07
 */
use Rpodwika\Designpatterns\Behavioral\Memento\SimpleBasket;

class SimpleBasketTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers SimpleBasket
     * @covers SimpleBasketMemento
     */
    public function testMementoRevertsState()
    {
        $products = [
            'apple',
            'cherry',
            'orange'
        ];

        $basket = new SimpleBasket($products, 30);

        $this->assertNotNull($basket->getProducts());
        $this->assertCount(3, $basket->getProducts());
        $this->assertContains('apple', $basket->getProducts());
        $this->assertContains('cherry', $basket->getProducts());
        $this->assertContains('orange', $basket->getProducts());
        $basket->removeProductByName('orange');
        $this->assertNotContains('orange', $basket->getProducts());
        $this->assertCount(2, $basket->getProducts());
        $basket->revert();
        $this->assertCount(3, $basket->getProducts());
        $this->assertContains('orange', $basket->getProducts());
        $this->assertEquals($basket->getCapacity(), 30);
        $basket->setCapacity(10);
        $this->assertEquals($basket->getCapacity(), 10);
        $basket->revert();
        $this->assertEquals($basket->getCapacity(), 30);
    }
}
