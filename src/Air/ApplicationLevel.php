<?php

namespace FilippoToso\Travelport\Air;

class ApplicationLevel
{

    /**
     * @var ApplicationLimits $ApplicationLimits
     */
    public $ApplicationLimits = null;

    /**
     * @var ServiceData $ServiceData
     */
    public $ServiceData = null;

    /**
     * @var anonymous321 $ApplicableLevels
     */
    public $ApplicableLevels = null;

    /**
     * @var string $ProviderDefinedApplicableLevels
     */
    public $ProviderDefinedApplicableLevels = null;

    /**
     * @param ServiceData $ServiceData
     * @param anonymous321 $ApplicableLevels
     * @param string $ProviderDefinedApplicableLevels
     */
    public function __construct($ServiceData = null, $ApplicableLevels = null, $ProviderDefinedApplicableLevels = null)
    {
      $this->ServiceData = $ServiceData;
      $this->ApplicableLevels = $ApplicableLevels;
      $this->ProviderDefinedApplicableLevels = $ProviderDefinedApplicableLevels;
    }

    /**
     * @return ApplicationLimits
     */
    public function getApplicationLimits()
    {
      return $this->ApplicationLimits;
    }

    /**
     * @param ApplicationLimits $ApplicationLimits
     * @return \FilippoToso\Travelport\Air\ApplicationLevel
     */
    public function setApplicationLimits($ApplicationLimits)
    {
      $this->ApplicationLimits = $ApplicationLimits;
      return $this;
    }

    /**
     * @return ServiceData
     */
    public function getServiceData()
    {
      return $this->ServiceData;
    }

    /**
     * @param ServiceData $ServiceData
     * @return \FilippoToso\Travelport\Air\ApplicationLevel
     */
    public function setServiceData($ServiceData)
    {
      $this->ServiceData = $ServiceData;
      return $this;
    }

    /**
     * @return anonymous321
     */
    public function getApplicableLevels()
    {
      return $this->ApplicableLevels;
    }

    /**
     * @param anonymous321 $ApplicableLevels
     * @return \FilippoToso\Travelport\Air\ApplicationLevel
     */
    public function setApplicableLevels($ApplicableLevels)
    {
      $this->ApplicableLevels = $ApplicableLevels;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderDefinedApplicableLevels()
    {
      return $this->ProviderDefinedApplicableLevels;
    }

    /**
     * @param string $ProviderDefinedApplicableLevels
     * @return \FilippoToso\Travelport\Air\ApplicationLevel
     */
    public function setProviderDefinedApplicableLevels($ProviderDefinedApplicableLevels)
    {
      $this->ProviderDefinedApplicableLevels = $ProviderDefinedApplicableLevels;
      return $this;
    }

}
