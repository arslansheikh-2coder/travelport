<?php

namespace FilippoToso\Travelport\Air;

class ExchangeEligibilityInfo
{

    /**
     * @var ExchangePenaltyInfo $ExchangePenaltyInfo
     */
    public $ExchangePenaltyInfo = null;

    /**
     * @var string $EligibleFares
     */
    public $EligibleFares = null;

    /**
     * @var string $RefundableFares
     */
    public $RefundableFares = null;

    /**
     * @var boolean $PassedAutomationChecks
     */
    public $PassedAutomationChecks = null;

    /**
     * @param ExchangePenaltyInfo $ExchangePenaltyInfo
     * @param string $EligibleFares
     * @param string $RefundableFares
     * @param boolean $PassedAutomationChecks
     */
    public function __construct($ExchangePenaltyInfo = null, $EligibleFares = null, $RefundableFares = null, $PassedAutomationChecks = null)
    {
      $this->ExchangePenaltyInfo = $ExchangePenaltyInfo;
      $this->EligibleFares = $EligibleFares;
      $this->RefundableFares = $RefundableFares;
      $this->PassedAutomationChecks = $PassedAutomationChecks;
    }

    /**
     * @return ExchangePenaltyInfo
     */
    public function getExchangePenaltyInfo()
    {
      return $this->ExchangePenaltyInfo;
    }

    /**
     * @param ExchangePenaltyInfo $ExchangePenaltyInfo
     * @return \FilippoToso\Travelport\Air\ExchangeEligibilityInfo
     */
    public function setExchangePenaltyInfo($ExchangePenaltyInfo)
    {
      $this->ExchangePenaltyInfo = $ExchangePenaltyInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getEligibleFares()
    {
      return $this->EligibleFares;
    }

    /**
     * @param string $EligibleFares
     * @return \FilippoToso\Travelport\Air\ExchangeEligibilityInfo
     */
    public function setEligibleFares($EligibleFares)
    {
      $this->EligibleFares = $EligibleFares;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundableFares()
    {
      return $this->RefundableFares;
    }

    /**
     * @param string $RefundableFares
     * @return \FilippoToso\Travelport\Air\ExchangeEligibilityInfo
     */
    public function setRefundableFares($RefundableFares)
    {
      $this->RefundableFares = $RefundableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassedAutomationChecks()
    {
      return $this->PassedAutomationChecks;
    }

    /**
     * @param boolean $PassedAutomationChecks
     * @return \FilippoToso\Travelport\Air\ExchangeEligibilityInfo
     */
    public function setPassedAutomationChecks($PassedAutomationChecks)
    {
      $this->PassedAutomationChecks = $PassedAutomationChecks;
      return $this;
    }

}
