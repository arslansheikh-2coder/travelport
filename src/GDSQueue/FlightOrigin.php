<?php

namespace FilippoToso\Travelport\GDSQueue;

class FlightOrigin
{

    /**
     * @var Airport $Airport
     */
    public $Airport = null;

    /**
     * @param Airport $Airport
     */
    public function __construct($Airport = null)
    {
      $this->Airport = $Airport;
    }

    /**
     * @return Airport
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param Airport $Airport
     * @return \FilippoToso\Travelport\GDSQueue\FlightOrigin
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

}
