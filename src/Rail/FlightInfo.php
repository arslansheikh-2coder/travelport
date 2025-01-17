<?php

namespace FilippoToso\Travelport\Rail;

class FlightInfo
{

    /**
     * @var FlightInfoDetail $FlightInfoDetail
     */
    public $FlightInfoDetail = null;

    /**
     * @var typeResultMessage[] $FlightInfoErrorMessage
     */
    public $FlightInfoErrorMessage = null;

    /**
     * @var typeRef $CriteriaKey
     */
    public $CriteriaKey = null;

    /**
     * @var typeCarrier $Carrier
     */
    public $Carrier = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    public $FlightNumber = null;

    /**
     * @var typeIATACode $Origin
     */
    public $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    public $Destination = null;

    /**
     * @var date $DepartureDate
     */
    public $DepartureDate = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    public $ClassOfService = null;

    /**
     * @param FlightInfoDetail $FlightInfoDetail
     * @param typeRef $CriteriaKey
     * @param typeCarrier $Carrier
     * @param typeFlightNumber $FlightNumber
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param date $DepartureDate
     * @param typeClassOfService $ClassOfService
     */
    public function __construct($FlightInfoDetail = null, $CriteriaKey = null, $Carrier = null, $FlightNumber = null, $Origin = null, $Destination = null, $DepartureDate = null, $ClassOfService = null)
    {
      $this->FlightInfoDetail = $FlightInfoDetail;
      $this->CriteriaKey = $CriteriaKey;
      $this->Carrier = $Carrier;
      $this->FlightNumber = $FlightNumber;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureDate = $DepartureDate;
      $this->ClassOfService = $ClassOfService;
    }

    /**
     * @return FlightInfoDetail
     */
    public function getFlightInfoDetail()
    {
      return $this->FlightInfoDetail;
    }

    /**
     * @param FlightInfoDetail $FlightInfoDetail
     * @return \FilippoToso\Travelport\Rail\FlightInfo
     */
    public function setFlightInfoDetail($FlightInfoDetail)
    {
      $this->FlightInfoDetail = $FlightInfoDetail;
      return $this;
    }

    /**
     * @return typeResultMessage[]
     */
    public function getFlightInfoErrorMessage()
    {
      return $this->FlightInfoErrorMessage;
    }

    /**
     * @param typeResultMessage[] $FlightInfoErrorMessage
     * @return \FilippoToso\Travelport\Rail\FlightInfo
     */
    public function setFlightInfoErrorMessage(array $FlightInfoErrorMessage = null)
    {
      $this->FlightInfoErrorMessage = $FlightInfoErrorMessage;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getCriteriaKey()
    {
      return $this->CriteriaKey;
    }

    /**
     * @param typeRef $CriteriaKey
     * @return \FilippoToso\Travelport\Rail\FlightInfo
     */
    public function setCriteriaKey($CriteriaKey)
    {
      $this->CriteriaKey = $CriteriaKey;
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
     * @return \FilippoToso\Travelport\Rail\FlightInfo
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
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
     * @return \FilippoToso\Travelport\Rail\FlightInfo
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Rail\FlightInfo
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Rail\FlightInfo
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return date
     */
    public function getDepartureDate()
    {
      return $this->DepartureDate;
    }

    /**
     * @param date $DepartureDate
     * @return \FilippoToso\Travelport\Rail\FlightInfo
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
      return $this;
    }

    /**
     * @return typeClassOfService
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param typeClassOfService $ClassOfService
     * @return \FilippoToso\Travelport\Rail\FlightInfo
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

}
