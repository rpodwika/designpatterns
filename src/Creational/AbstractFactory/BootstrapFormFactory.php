<?php

namespace Rpodwika\Designpatterns\Creational\AbstractFactory;

/**
 * Class BootstrapFormFactory
 * @package Rpodwika\Designpatterns\Creational\AbstractFactory
 */
class BootstrapFormFactory implements FormFactoryInterface
{
    /**
     * @inheritdoc
     */
    public function createButton($name, $text)
    {
        $button = new BootstrapButton($name, $text);

        return $button;
    }

    /**
     * @inheritdoc
     */
    public function createTextInput($name, $value)
    {
        $textInput = new BootstrapTextInput($name, $value);

        return $textInput;
    }
}