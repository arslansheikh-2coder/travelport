<?php

namespace FilippoToso\Travelport\GDSQueue;

class BrandModifiers
{

    /**
     * @var FareFamilyDisplay $FareFamilyDisplay
     */
    public $FareFamilyDisplay = null;

    /**
     * @var BasicDetailsOnly $BasicDetailsOnly
     */
    public $BasicDetailsOnly = null;

    /**
     * @param FareFamilyDisplay $FareFamilyDisplay
     * @param BasicDetailsOnly $BasicDetailsOnly
     */
    public function __construct($FareFamilyDisplay = null, $BasicDetailsOnly = null)
    {
      $this->FareFamilyDisplay = $FareFamilyDisplay;
      $this->BasicDetailsOnly = $BasicDetailsOnly;
    }

    /**
     * @return FareFamilyDisplay
     */
    public function getFareFamilyDisplay()
    {
      return $this->FareFamilyDisplay;
    }

    /**
     * @param FareFamilyDisplay $FareFamilyDisplay
     * @return \FilippoToso\Travelport\GDSQueue\BrandModifiers
     */
    public function setFareFamilyDisplay($FareFamilyDisplay)
    {
      $this->FareFamilyDisplay = $FareFamilyDisplay;
      return $this;
    }

    /**
     * @return BasicDetailsOnly
     */
    public function getBasicDetailsOnly()
    {
      return $this->BasicDetailsOnly;
    }

    /**
     * @param BasicDetailsOnly $BasicDetailsOnly
     * @return \FilippoToso\Travelport\GDSQueue\BrandModifiers
     */
    public function setBasicDetailsOnly($BasicDetailsOnly)
    {
      $this->BasicDetailsOnly = $BasicDetailsOnly;
      return $this;
    }

}
