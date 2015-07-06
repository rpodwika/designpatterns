<?php

namespace Rpodwika\Designpatterns\Behavioral\Strategy;

/**
 * Created by PhpStorm.
 * User: robertpodwikamac
 * Date: 05.07.15
 * Time: 21:59
 */
class RiskCalculator
{
    /**
     * @var RiskCalculatingBehavior $riskCalculatingBehavior
     */
    private $riskCalculatingBehaviour;

    private $riskVariableA;
    private $riskVariableB;
    private $riskVariableC;

    public function __construct(RiskCalculatingBehavior $riskCalculatingBehavior)
    {
        $this->setRiskCalculatingBehaviour($riskCalculatingBehavior);
    }

    /**
     * @return mixed
     */
    public function getRiskCalculatingBehaviour()
    {
        return $this->riskCalculatingBehaviour;
    }

    /**
     * @param mixed $riskCalculatingBehaviour
     */
    public function setRiskCalculatingBehaviour($riskCalculatingBehaviour)
    {
        $this->riskCalculatingBehaviour = $riskCalculatingBehaviour;
    }

    /**
     * @return mixed
     */
    public function getRiskVariableA()
    {
        return $this->riskVariableA;
    }

    /**
     * @param mixed $riskVariableA
     */
    public function setRiskVariableA($riskVariableA)
    {
        $this->riskVariableA = $riskVariableA;
    }

    /**
     * @return mixed
     */
    public function getRiskVariableB()
    {
        return $this->riskVariableB;
    }

    /**
     * @param mixed $riskVariableB
     */
    public function setRiskVariableB($riskVariableB)
    {
        $this->riskVariableB = $riskVariableB;
    }

    /**
     * @return mixed
     */
    public function getRiskVariableC()
    {
        return $this->riskVariableC;
    }

    /**
     * @param mixed $riskVariableC
     */
    public function setRiskVariableC($riskVariableC)
    {
        $this->riskVariableC = $riskVariableC;
    }


    public function calculateRisk()
    {
        return $this->riskCalculatingBehaviour->calculateRisk($this->getRiskVariableA(), $this->getRiskVariableB(),
            $this->getRiskVariableC());
    }



}