<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirScheduleChangedInfo
{

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    public $AirPricingSolution = null;

    /**
     * @param AirPricingSolution $AirPricingSolution
     */
    public function __construct($AirPricingSolution = null)
    {
      $this->AirPricingSolution = $AirPricingSolution;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \FilippoToso\Travelport\GDSQueue\AirScheduleChangedInfo
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

}
