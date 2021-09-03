<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeTimeSpec
{

    /**
     * @var typeTimeRange $TimeRange
     */
    public $TimeRange = null;

    /**
     * @var typeSpecificTime $SpecificTime
     */
    public $SpecificTime = null;

    /**
     * @var string $PreferredTime
     */
    public $PreferredTime = null;

    /**
     * @param string $PreferredTime
     */
    public function __construct($PreferredTime = null)
    {
      $this->PreferredTime = $PreferredTime;
    }

    /**
     * @return typeTimeRange
     */
    public function getTimeRange()
    {
      return $this->TimeRange;
    }

    /**
     * @param typeTimeRange $TimeRange
     * @return \FilippoToso\Travelport\UniversalRecord\typeTimeSpec
     */
    public function setTimeRange($TimeRange)
    {
      $this->TimeRange = $TimeRange;
      return $this;
    }

    /**
     * @return typeSpecificTime
     */
    public function getSpecificTime()
    {
      return $this->SpecificTime;
    }

    /**
     * @param typeSpecificTime $SpecificTime
     * @return \FilippoToso\Travelport\UniversalRecord\typeTimeSpec
     */
    public function setSpecificTime($SpecificTime)
    {
      $this->SpecificTime = $SpecificTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredTime()
    {
      return $this->PreferredTime;
    }

    /**
     * @param string $PreferredTime
     * @return \FilippoToso\Travelport\UniversalRecord\typeTimeSpec
     */
    public function setPreferredTime($PreferredTime)
    {
      $this->PreferredTime = $PreferredTime;
      return $this;
    }

}
