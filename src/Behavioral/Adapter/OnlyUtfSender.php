<?php

namespace Rpodwika\Designpatterns\Behavioral\Adapter;

/**
 * Interface OnlyUtfSender
 * @package Rpodwika\Designpatterns\Behavioral\Adapter
 */
interface OnlyUtfSender
{
    /**
     * @return mixed
     */
    public function send();
}