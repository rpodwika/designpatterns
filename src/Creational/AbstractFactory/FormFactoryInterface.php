<?php

namespace Rpodwika\Designpatterns\Creational\AbstractFactory;

/**
 * Interface FormFactoryInterface
 * @package Rpodwika\Designpatterns\Creational\AbstractFactory
 */
interface FormFactoryInterface
{
    /**
     * @param $name
     * @param $text
     *
     * @return ButtonInterface
     */
    public function createButton($name, $text);

    /**
     * @param $name
     * @param $value
     *
     * @return TextInputInterface
     */
    public function createTextInput($name, $value);
}