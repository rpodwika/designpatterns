<?php

namespace Rpodwika\Designpatterns\Creational\AbstractFactory;

/**
 * Class BootstrapTextInput
 * @package Rpodwika\Designpatterns\Creational\AbstractFactory
 */
class BootstrapTextInput implements TextInputInterface
{
    private $name;
    private $value;

    /**
     * @param $name
     * @param $value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @inheritdoc
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function render()
    {
        return sprintf('<input type="text" name="%s" value="%s" />', $this->name, $this->value);
    }

}