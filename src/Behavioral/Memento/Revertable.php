<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 09.07.15
 * Time: 22:59
 */

namespace Rpodwika\Designpatterns\Behavioral\Memento;


interface Revertable
{
    /**
     * Returns object initial state
     * @return void
     */
    public function revert();
}