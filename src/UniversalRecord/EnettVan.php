<?php

namespace FilippoToso\Travelport\UniversalRecord;

class EnettVan
{

    /**
     * @var typeIntegerPercentage $MinPercentage
     */
    public $MinPercentage = null;

    /**
     * @var typeIntegerPercentage $MaxPercentage
     */
    public $MaxPercentage = null;

    /**
     * @var typeDurationYearInDays $ExpiryDays
     */
    public $ExpiryDays = null;

    /**
     * @var boolean $MultiUse
     */
    public $MultiUse = null;

    /**
     * @param typeIntegerPercentage $MinPercentage
     * @param typeIntegerPercentage $MaxPercentage
     * @param typeDurationYearInDays $ExpiryDays
     * @param boolean $MultiUse
     */
    public function __construct($MinPercentage = null, $MaxPercentage = null, $ExpiryDays = null, $MultiUse = null)
    {
      $this->MinPercentage = $MinPercentage;
      $this->MaxPercentage = $MaxPercentage;
      $this->ExpiryDays = $ExpiryDays;
      $this->MultiUse = $MultiUse;
    }

    /**
     * @return typeIntegerPercentage
     */
    public function getMinPercentage()
    {
      return $this->MinPercentage;
    }

    /**
     * @param typeIntegerPercentage $MinPercentage
     * @return \FilippoToso\Travelport\UniversalRecord\EnettVan
     */
    public function setMinPercentage($MinPercentage)
    {
      $this->MinPercentage = $MinPercentage;
      return $this;
    }

    /**
     * @return typeIntegerPercentage
     */
    public function getMaxPercentage()
    {
      return $this->MaxPercentage;
    }

    /**
     * @param typeIntegerPercentage $MaxPercentage
     * @return \FilippoToso\Travelport\UniversalRecord\EnettVan
     */
    public function setMaxPercentage($MaxPercentage)
    {
      $this->MaxPercentage = $MaxPercentage;
      return $this;
    }

    /**
     * @return typeDurationYearInDays
     */
    public function getExpiryDays()
    {
      return $this->ExpiryDays;
    }

    /**
     * @param typeDurationYearInDays $ExpiryDays
     * @return \FilippoToso\Travelport\UniversalRecord\EnettVan
     */
    public function setExpiryDays($ExpiryDays)
    {
      $this->ExpiryDays = $ExpiryDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMultiUse()
    {
      return $this->MultiUse;
    }

    /**
     * @param boolean $MultiUse
     * @return \FilippoToso\Travelport\UniversalRecord\EnettVan
     */
    public function setMultiUse($MultiUse)
    {
      $this->MultiUse = $MultiUse;
      return $this;
    }

}
