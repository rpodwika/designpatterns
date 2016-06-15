<?php

namespace Rpodwika\Designpatterns\Creational\AbstractFactory;

/**
 * Interface TextInputInterface
 * @package Rpodwika\Designpatterns\Creational\AbstractFactory
 */
interface TextInputInterface
{
    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @return string
     */
    public function render();
}