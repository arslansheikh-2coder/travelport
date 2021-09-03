<?php

namespace FilippoToso\Travelport\GDSQueue;

class TravelerInformation
{

    /**
     * @var EmergencyContact $EmergencyContact
     */
    public $EmergencyContact = null;

    /**
     * @var typeAirport $HomeAirport
     */
    public $HomeAirport = null;

    /**
     * @var date $VisaExpirationDate
     */
    public $VisaExpirationDate = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param typeAirport $HomeAirport
     * @param date $VisaExpirationDate
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($HomeAirport = null, $VisaExpirationDate = null, $BookingTravelerRef = null)
    {
      $this->HomeAirport = $HomeAirport;
      $this->VisaExpirationDate = $VisaExpirationDate;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return EmergencyContact
     */
    public function getEmergencyContact()
    {
      return $this->EmergencyContact;
    }

    /**
     * @param EmergencyContact $EmergencyContact
     * @return \FilippoToso\Travelport\GDSQueue\TravelerInformation
     */
    public function setEmergencyContact($EmergencyContact)
    {
      $this->EmergencyContact = $EmergencyContact;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getHomeAirport()
    {
      return $this->HomeAirport;
    }

    /**
     * @param typeAirport $HomeAirport
     * @return \FilippoToso\Travelport\GDSQueue\TravelerInformation
     */
    public function setHomeAirport($HomeAirport)
    {
      $this->HomeAirport = $HomeAirport;
      return $this;
    }

    /**
     * @return date
     */
    public function getVisaExpirationDate()
    {
      return $this->VisaExpirationDate;
    }

    /**
     * @param date $VisaExpirationDate
     * @return \FilippoToso\Travelport\GDSQueue\TravelerInformation
     */
    public function setVisaExpirationDate($VisaExpirationDate)
    {
      $this->VisaExpirationDate = $VisaExpirationDate;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\TravelerInformation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
