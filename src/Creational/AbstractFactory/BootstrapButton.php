<?php

namespace Rpodwika\Designpatterns\Creational\AbstractFactory;

/**
 * Class BootstrapButton
 * @package Rpodwika\Designpatterns\Creational\AbstractFactory
 */
class BootstrapButton implements ButtonInterface
{
    private $name;
    private $text;

    /**
     * @param $name
     * @param $text
     */
    public function __construct($name, $text)
    {
        $this->name = $name;
        $this->text = $text;
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
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function render()
    {
        return sprintf('<button name="%s">%s</button>', $this->name, $this->text);
    }


}