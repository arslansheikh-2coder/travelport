<?php

namespace FilippoToso\Travelport\UProfile;

class typeDateOptions
{

    /**
     * @var typeDay $Day
     */
    public $Day = null;

    /**
     * @var typeMonth $Month
     */
    public $Month = null;

    /**
     * @var typeYear $Year
     */
    public $Year = null;

    /**
     * @param typeDay $Day
     * @param typeMonth $Month
     * @param typeYear $Year
     */
    public function __construct($Day = null, $Month = null, $Year = null)
    {
      $this->Day = $Day;
      $this->Month = $Month;
      $this->Year = $Year;
    }

    /**
     * @return typeDay
     */
    public function getDay()
    {
      return $this->Day;
    }

    /**
     * @param typeDay $Day
     * @return \FilippoToso\Travelport\UProfile\typeDateOptions
     */
    public function setDay($Day)
    {
      $this->Day = $Day;
      return $this;
    }

    /**
     * @return typeMonth
     */
    public function getMonth()
    {
      return $this->Month;
    }

    /**
     * @param typeMonth $Month
     * @return \FilippoToso\Travelport\UProfile\typeDateOptions
     */
    public function setMonth($Month)
    {
      $this->Month = $Month;
      return $this;
    }

    /**
     * @return typeYear
     */
    public function getYear()
    {
      return $this->Year;
    }

    /**
     * @param typeYear $Year
     * @return \FilippoToso\Travelport\UProfile\typeDateOptions
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
      return $this;
    }

}
