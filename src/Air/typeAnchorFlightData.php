<?php

namespace FilippoToso\Travelport\Air;

class typeAnchorFlightData
{

    /**
     * @var typeCarrier $AirlineCode
     */
    public $AirlineCode = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    public $FlightNumber = null;

    /**
     * @var boolean $ConnectionIndicator
     */
    public $ConnectionIndicator = null;

    /**
     * @param typeCarrier $AirlineCode
     * @param typeFlightNumber $FlightNumber
     * @param boolean $ConnectionIndicator
     */
    public function __construct($AirlineCode = null, $FlightNumber = null, $ConnectionIndicator = null)
    {
      $this->AirlineCode = $AirlineCode;
      $this->FlightNumber = $FlightNumber;
      $this->ConnectionIndicator = $ConnectionIndicator;
    }

    /**
     * @return typeCarrier
     */
    public function getAirlineCode()
    {
      return $this->AirlineCode;
    }

    /**
     * @param typeCarrier $AirlineCode
     * @return \FilippoToso\Travelport\Air\typeAnchorFlightData
     */
    public function setAirlineCode($AirlineCode)
    {
      $this->AirlineCode = $AirlineCode;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param typeFlightNumber $FlightNumber
     * @return \FilippoToso\Travelport\Air\typeAnchorFlightData
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConnectionIndicator()
    {
      return $this->ConnectionIndicator;
    }

    /**
     * @param boolean $ConnectionIndicator
     * @return \FilippoToso\Travelport\Air\typeAnchorFlightData
     */
    public function setConnectionIndicator($ConnectionIndicator)
    {
      $this->ConnectionIndicator = $ConnectionIndicator;
      return $this;
    }

}
