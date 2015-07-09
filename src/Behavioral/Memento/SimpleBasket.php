<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 09.07.15
 * Time: 23:01
 */

namespace Rpodwika\Designpatterns\Behavioral\Memento;


class SimpleBasket implements Revertable
{
    private $products;
    private $capacity;
    /**
     * @var SimpleBasketMemento $memento
     */
    private $memento;

    /**
     * @param array $products
     * @param $capacity
     */
    public function __construct(array $products, $capacity)
    {
        $this->products = $products;
        $this->capacity = $capacity;
        $this->memento = new SimpleBasketMemento($products, $capacity);
    }

    /**
     * @inheritdoc
     */
    public function revert()
    {
        $this->products = $this->memento->getProducts();
        $this->capacity = $this->memento->getCapacity();
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

    /**
     * @param $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @param $name
     * @return bool
     */
    public function removeProductByName($name)
    {
        $index = array_search($name, $this->getProducts());

        if ($index === false) {

            return false;
        }

        unset($this->products[$index]);

        return true;
    }
}