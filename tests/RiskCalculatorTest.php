<?php

use \Rpodwika\Designpatterns\Behavioral\Strategy\RiskCalculator;
use \Rpodwika\Designpatterns\Behavioral\Strategy\SoftRiskCalculator;
use \Rpodwika\Designpatterns\Behavioral\Strategy\HardRiskCalculator;

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 22:10
 */
class RiskCalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \Rpodwika\Designpatterns\Behavioral\Strategy\RiskCalculator::calculateRisk
     */
    public function testRiskCalculatorSoftRisk()
    {
        $softRiskBehavior = new SoftRiskCalculator();
        $hardRiskBehavior = new HardRiskCalculator();
        $riskCalculator = new RiskCalculator($softRiskBehavior);
        $riskCalculator->setRiskVariableA(10);
        $riskCalculator->setRiskVariableB(20);
        $riskCalculator->setRiskVariableC(30);
        $this->assertEquals(610, $riskCalculator->calculateRisk());
        $riskCalculator->setRiskCalculatingBehaviour($hardRiskBehavior);
        $this->assertEquals(1, $riskCalculator->calculateRisk());
    }
}
