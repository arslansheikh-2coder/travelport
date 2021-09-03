<?php

namespace FilippoToso\Travelport\Air;

class MerchandisingDetails
{

    /**
     * @var AirItineraryDetails $AirItineraryDetails
     */
    public $AirItineraryDetails = null;

    /**
     * @var AccountCode $AccountCode
     */
    public $AccountCode = null;

    /**
     * @param AirItineraryDetails $AirItineraryDetails
     * @param AccountCode $AccountCode
     */
    public function __construct($AirItineraryDetails = null, $AccountCode = null)
    {
      $this->AirItineraryDetails = $AirItineraryDetails;
      $this->AccountCode = $AccountCode;
    }

    /**
     * @return AirItineraryDetails
     */
    public function getAirItineraryDetails()
    {
      return $this->AirItineraryDetails;
    }

    /**
     * @param AirItineraryDetails $AirItineraryDetails
     * @return \FilippoToso\Travelport\Air\MerchandisingDetails
     */
    public function setAirItineraryDetails($AirItineraryDetails)
    {
      $this->AirItineraryDetails = $AirItineraryDetails;
      return $this;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\Air\MerchandisingDetails
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

}
