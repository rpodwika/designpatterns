<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 08.07.15
 * Time: 00:32
 */

namespace Rpodwika\Designpatterns\Behavioral\Observer;


class Subject
{
    /**
     * @var Observer[] $observers
     */
    protected $observers = [];
    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param Observer $observer
     * @return $this
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;

        return $this;
    }

    public function notify()
    {
        /**
         * @var Observer $observer
         */
        foreach ($this->observers as $observer) {
            if (!empty($observer) && $observer instanceof Observer) {
                $observer->update($this);
            }
        }
    }
}