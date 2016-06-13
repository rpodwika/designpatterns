<?php

namespace Rpodwika\Designpatterns\Behavioral\Proxy;

/**
 * Class Driver
 * @package Rpodwika\Designpatterns\Behavioral\Proxy
 */
class Driver
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $isDrunk;

    /**
     * @param $name
     * @param $isDrunk
     */
    public function __construct($name, $isDrunk)
    {
        $this->name = $name;
        $this->isDrunk = $isDrunk;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isDrunk()
    {
        return $this->isDrunk;
    }

    /**
     * @param boolean $isDrunk
     *
     * @return $this
     */
    public function setIsDrunk($isDrunk)
    {
        $this->isDrunk = $isDrunk;

        return $this;
    }


}