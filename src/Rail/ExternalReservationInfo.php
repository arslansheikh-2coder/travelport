<?php

namespace FilippoToso\Travelport\Rail;

class ExternalReservationInfo
{

    /**
     * @var typeLocatorCode $LocatorCode
     */
    public $LocatorCode = null;

    /**
     * @var typeCarrier $Carrier
     */
    public $Carrier = null;

    /**
     * @param typeLocatorCode $LocatorCode
     * @param typeCarrier $Carrier
     */
    public function __construct($LocatorCode = null, $Carrier = null)
    {
      $this->LocatorCode = $LocatorCode;
      $this->Carrier = $Carrier;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Rail\ExternalReservationInfo
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Rail\ExternalReservationInfo
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

}
