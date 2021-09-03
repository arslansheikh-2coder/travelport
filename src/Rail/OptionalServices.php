<?php

namespace FilippoToso\Travelport\Rail;

class OptionalServices
{

    /**
     * @var OptionalServicesTotal $OptionalServicesTotal
     */
    public $OptionalServicesTotal = null;

    /**
     * @var OptionalService $OptionalService
     */
    public $OptionalService = null;

    /**
     * @var GroupedOptionInfo $GroupedOptionInfo
     */
    public $GroupedOptionInfo = null;

    /**
     * @var ServiceRuleType[] $OptionalServiceRules
     */
    public $OptionalServiceRules = null;

    /**
     * @param OptionalService $OptionalService
     * @param GroupedOptionInfo $GroupedOptionInfo
     */
    public function __construct($OptionalService = null, $GroupedOptionInfo = null)
    {
      $this->OptionalService = $OptionalService;
      $this->GroupedOptionInfo = $GroupedOptionInfo;
    }

    /**
     * @return OptionalServicesTotal
     */
    public function getOptionalServicesTotal()
    {
      return $this->OptionalServicesTotal;
    }

    /**
     * @param OptionalServicesTotal $OptionalServicesTotal
     * @return \FilippoToso\Travelport\Rail\OptionalServices
     */
    public function setOptionalServicesTotal($OptionalServicesTotal)
    {
      $this->OptionalServicesTotal = $OptionalServicesTotal;
      return $this;
    }

    /**
     * @return OptionalService
     */
    public function getOptionalService()
    {
      return $this->OptionalService;
    }

    /**
     * @param OptionalService $OptionalService
     * @return \FilippoToso\Travelport\Rail\OptionalServices
     */
    public function setOptionalService($OptionalService)
    {
      $this->OptionalService = $OptionalService;
      return $this;
    }

    /**
     * @return GroupedOptionInfo
     */
    public function getGroupedOptionInfo()
    {
      return $this->GroupedOptionInfo;
    }

    /**
     * @param GroupedOptionInfo $GroupedOptionInfo
     * @return \FilippoToso\Travelport\Rail\OptionalServices
     */
    public function setGroupedOptionInfo($GroupedOptionInfo)
    {
      $this->GroupedOptionInfo = $GroupedOptionInfo;
      return $this;
    }

    /**
     * @return ServiceRuleType[]
     */
    public function getOptionalServiceRules()
    {
      return $this->OptionalServiceRules;
    }

    /**
     * @param ServiceRuleType[] $OptionalServiceRules
     * @return \FilippoToso\Travelport\Rail\OptionalServices
     */
    public function setOptionalServiceRules(array $OptionalServiceRules = null)
    {
      $this->OptionalServiceRules = $OptionalServiceRules;
      return $this;
    }

}
