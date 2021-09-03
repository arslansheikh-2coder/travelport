<?php

namespace FilippoToso\Travelport\Vehicle;

class VehiclePickupLocation
{

    /**
     * @var Vendor $Vendor
     */
    public $Vendor = null;

    /**
     * @var VehicleModifier $VehicleModifier
     */
    public $VehicleModifier = null;

    /**
     * @var typeIATACode $PickUpLocation
     */
    public $PickUpLocation = null;

    /**
     * @param Vendor $Vendor
     * @param VehicleModifier $VehicleModifier
     * @param typeIATACode $PickUpLocation
     */
    public function __construct($Vendor = null, $VehicleModifier = null, $PickUpLocation = null)
    {
      $this->Vendor = $Vendor;
      $this->VehicleModifier = $VehicleModifier;
      $this->PickUpLocation = $PickUpLocation;
    }

    /**
     * @return Vendor
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param Vendor $Vendor
     * @return \FilippoToso\Travelport\Vehicle\VehiclePickupLocation
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
      return $this;
    }

    /**
     * @return VehicleModifier
     */
    public function getVehicleModifier()
    {
      return $this->VehicleModifier;
    }

    /**
     * @param VehicleModifier $VehicleModifier
     * @return \FilippoToso\Travelport\Vehicle\VehiclePickupLocation
     */
    public function setVehicleModifier($VehicleModifier)
    {
      $this->VehicleModifier = $VehicleModifier;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getPickUpLocation()
    {
      return $this->PickUpLocation;
    }

    /**
     * @param typeIATACode $PickUpLocation
     * @return \FilippoToso\Travelport\Vehicle\VehiclePickupLocation
     */
    public function setPickUpLocation($PickUpLocation)
    {
      $this->PickUpLocation = $PickUpLocation;
      return $this;
    }

}
