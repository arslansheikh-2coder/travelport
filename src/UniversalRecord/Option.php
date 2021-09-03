<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Option
{

    /**
     * @var BookingInfo $BookingInfo
     */
    public $BookingInfo = null;

    /**
     * @var Connection $Connection
     */
    public $Connection = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var duration $TravelTime
     */
    public $TravelTime = null;

    /**
     * @param BookingInfo $BookingInfo
     * @param Connection $Connection
     * @param typeRef $Key
     * @param duration $TravelTime
     */
    public function __construct($BookingInfo = null, $Connection = null, $Key = null, $TravelTime = null)
    {
      $this->BookingInfo = $BookingInfo;
      $this->Connection = $Connection;
      $this->Key = $Key;
      $this->TravelTime = $TravelTime;
    }

    /**
     * @return BookingInfo
     */
    public function getBookingInfo()
    {
      return $this->BookingInfo;
    }

    /**
     * @param BookingInfo $BookingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\Option
     */
    public function setBookingInfo($BookingInfo)
    {
      $this->BookingInfo = $BookingInfo;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
      return $this->Connection;
    }

    /**
     * @param Connection $Connection
     * @return \FilippoToso\Travelport\UniversalRecord\Option
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\UniversalRecord\Option
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTravelTime()
    {
      return $this->TravelTime;
    }

    /**
     * @param duration $TravelTime
     * @return \FilippoToso\Travelport\UniversalRecord\Option
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

}
