<?php
/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 22:07
 */

namespace Rpodwika\Designpatterns\Behavioral\Strategy;


class SoftRiskCalculator implements RiskCalculatingBehavior
{
    public function calculateRisk($a, $b, $c)
    {
        return $a + $b * $c;
    }
}