<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 15.07.15
 * Time: 00:25
 */

namespace Rpodwika\Designpatterns\Behavioral\State;


interface ConnectionState
{
    public function open();
    public function close();
    public function reconnect();
}