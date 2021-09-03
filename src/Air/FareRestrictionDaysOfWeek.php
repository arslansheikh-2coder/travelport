<?php

namespace FilippoToso\Travelport\Air;

class FareRestrictionDaysOfWeek
{

    /**
     * @var typeFareDirectionality $Direction
     */
    public $Direction = null;

    /**
     * @var typeFareTripType $TripType
     */
    public $TripType = null;

    /**
     * @var boolean $Monday
     */
    public $Monday = null;

    /**
     * @var boolean $Tuesday
     */
    public $Tuesday = null;

    /**
     * @var boolean $Wednesday
     */
    public $Wednesday = null;

    /**
     * @var boolean $Thursday
     */
    public $Thursday = null;

    /**
     * @var boolean $Friday
     */
    public $Friday = null;

    /**
     * @var boolean $Saturday
     */
    public $Saturday = null;

    /**
     * @var boolean $Sunday
     */
    public $Sunday = null;

    /**
     * @param typeFareDirectionality $Direction
     * @param typeFareTripType $TripType
     * @param boolean $Monday
     * @param boolean $Tuesday
     * @param boolean $Wednesday
     * @param boolean $Thursday
     * @param boolean $Friday
     * @param boolean $Saturday
     * @param boolean $Sunday
     */
    public function __construct($Direction = null, $TripType = null, $Monday = null, $Tuesday = null, $Wednesday = null, $Thursday = null, $Friday = null, $Saturday = null, $Sunday = null)
    {
      $this->Direction = $Direction;
      $this->TripType = $TripType;
      $this->Monday = $Monday;
      $this->Tuesday = $Tuesday;
      $this->Wednesday = $Wednesday;
      $this->Thursday = $Thursday;
      $this->Friday = $Friday;
      $this->Saturday = $Saturday;
      $this->Sunday = $Sunday;
    }

    /**
     * @return typeFareDirectionality
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param typeFareDirectionality $Direction
     * @return \FilippoToso\Travelport\Air\FareRestrictionDaysOfWeek
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return typeFareTripType
     */
    public function getTripType()
    {
      return $this->TripType;
    }

    /**
     * @param typeFareTripType $TripType
     * @return \FilippoToso\Travelport\Air\FareRestrictionDaysOfWeek
     */
    public function setTripType($TripType)
    {
      $this->TripType = $TripType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMonday()
    {
      return $this->Monday;
    }

    /**
     * @param boolean $Monday
     * @return \FilippoToso\Travelport\Air\FareRestrictionDaysOfWeek
     */
    public function setMonday($Monday)
    {
      $this->Monday = $Monday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTuesday()
    {
      return $this->Tuesday;
    }

    /**
     * @param boolean $Tuesday
     * @return \FilippoToso\Travelport\Air\FareRestrictionDaysOfWeek
     */
    public function setTuesday($Tuesday)
    {
      $this->Tuesday = $Tuesday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWednesday()
    {
      return $this->Wednesday;
    }

    /**
     * @param boolean $Wednesday
     * @return \FilippoToso\Travelport\Air\FareRestrictionDaysOfWeek
     */
    public function setWednesday($Wednesday)
    {
      $this->Wednesday = $Wednesday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThursday()
    {
      return $this->Thursday;
    }

    /**
     * @param boolean $Thursday
     * @return \FilippoToso\Travelport\Air\FareRestrictionDaysOfWeek
     */
    public function setThursday($Thursday)
    {
      $this->Thursday = $Thursday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFriday()
    {
      return $this->Friday;
    }

    /**
     * @param boolean $Friday
     * @return \FilippoToso\Travelport\Air\FareRestrictionDaysOfWeek
     */
    public function setFriday($Friday)
    {
      $this->Friday = $Friday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaturday()
    {
      return $this->Saturday;
    }

    /**
     * @param boolean $Saturday
     * @return \FilippoToso\Travelport\Air\FareRestrictionDaysOfWeek
     */
    public function setSaturday($Saturday)
    {
      $this->Saturday = $Saturday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSunday()
    {
      return $this->Sunday;
    }

    /**
     * @param boolean $Sunday
     * @return \FilippoToso\Travelport\Air\FareRestrictionDaysOfWeek
     */
    public function setSunday($Sunday)
    {
      $this->Sunday = $Sunday;
      return $this;
    }

}
