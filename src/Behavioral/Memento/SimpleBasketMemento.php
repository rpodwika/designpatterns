<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 09.07.15
 * Time: 23:05
 */

namespace Rpodwika\Designpatterns\Behavioral\Memento;


class SimpleBasketMemento
{
    private $products;
    private $capacity;

    /**
     * @param array $products
     * @param $capacity
     */
    public function __construct(array $products, $capacity)
    {
        $this->products = $products;
        $this->capacity = $capacity;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
}