<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 22:01
 */
namespace Rpodwika\Designpatterns\Behavioral\Strategy;

interface RiskCalculatingBehavior
{
    public function calculateRisk($a, $b, $c);
}