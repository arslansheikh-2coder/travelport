<?php

namespace FilippoToso\Travelport\Rail;

class HotelLocation
{

    /**
     * @var typeIATACode $Location
     */
    public $Location = null;

    /**
     * @var typeHotelLocation $LocationType
     */
    public $LocationType = null;

    /**
     * @param typeIATACode $Location
     * @param typeHotelLocation $LocationType
     */
    public function __construct($Location = null, $LocationType = null)
    {
      $this->Location = $Location;
      $this->LocationType = $LocationType;
    }

    /**
     * @return typeIATACode
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param typeIATACode $Location
     * @return \FilippoToso\Travelport\Rail\HotelLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return typeHotelLocation
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param typeHotelLocation $LocationType
     * @return \FilippoToso\Travelport\Rail\HotelLocation
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

}
