<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 22:09
 */

namespace Rpodwika\Designpatterns\Behavioral\Strategy;


class HardRiskCalculator implements RiskCalculatingBehavior
{
    public function calculateRisk($a, $b, $c)
    {
        return ($a + $b) / $c;
    }
}