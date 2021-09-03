<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeDateSpec
{

    /**
     * @var typeDateRange $DateRange
     */
    public $DateRange = null;

    /**
     * @var date $SpecificDate
     */
    public $SpecificDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeDateRange
     */
    public function getDateRange()
    {
      return $this->DateRange;
    }

    /**
     * @param typeDateRange $DateRange
     * @return \FilippoToso\Travelport\UniversalRecord\typeDateSpec
     */
    public function setDateRange($DateRange)
    {
      $this->DateRange = $DateRange;
      return $this;
    }

    /**
     * @return date
     */
    public function getSpecificDate()
    {
      return $this->SpecificDate;
    }

    /**
     * @param date $SpecificDate
     * @return \FilippoToso\Travelport\UniversalRecord\typeDateSpec
     */
    public function setSpecificDate($SpecificDate)
    {
      $this->SpecificDate = $SpecificDate;
      return $this;
    }

}
