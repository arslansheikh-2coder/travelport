<?php

namespace FilippoToso\Travelport\Vehicle;

class SearchExtraDays
{

    /**
     * @var int $DaysBefore
     */
    public $DaysBefore = null;

    /**
     * @var int $DaysAfter
     */
    public $DaysAfter = null;

    /**
     * @param int $DaysBefore
     * @param int $DaysAfter
     */
    public function __construct($DaysBefore = null, $DaysAfter = null)
    {
      $this->DaysBefore = $DaysBefore;
      $this->DaysAfter = $DaysAfter;
    }

    /**
     * @return int
     */
    public function getDaysBefore()
    {
      return $this->DaysBefore;
    }

    /**
     * @param int $DaysBefore
     * @return \FilippoToso\Travelport\Vehicle\SearchExtraDays
     */
    public function setDaysBefore($DaysBefore)
    {
      $this->DaysBefore = $DaysBefore;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysAfter()
    {
      return $this->DaysAfter;
    }

    /**
     * @param int $DaysAfter
     * @return \FilippoToso\Travelport\Vehicle\SearchExtraDays
     */
    public function setDaysAfter($DaysAfter)
    {
      $this->DaysAfter = $DaysAfter;
      return $this;
    }

}
