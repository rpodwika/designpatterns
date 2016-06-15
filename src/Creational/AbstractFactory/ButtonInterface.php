<?php

namespace Rpodwika\Designpatterns\Creational\AbstractFactory;

/**
 * Interface ButtonInterface
 * @package Rpodwika\Designpatterns\Creational\AbstractFactory
 */
interface ButtonInterface
{
    /**
     * @param $name
     * @return $this
     */
    public function setName($name);

    /**
     * @param $text
     * @return $this
     */
    public function setText($text);

    /**
     * @return string
     */
    public function render();
}