<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 08.07.15
 * Time: 00:30
 */

namespace Rpodwika\Designpatterns\Behavioral\Observer;


abstract class Observer
{
    /**
     * @param Subject $subject
     */
    public function __construct(Subject $subject = null) {
        if (!empty($subject)) {
            $subject->attach($this);
        }
    }

    /**
     * @param Subject $subject
     */
    abstract public function update(Subject $subject);

}