<?php

namespace FilippoToso\Travelport\Vehicle;

class VehiclePolicy
{

    /**
     * @var VehicleDisclaimer $VehicleDisclaimer
     */
    public $VehicleDisclaimer = null;

    /**
     * @var VehicleDetail $VehicleDetail
     */
    public $VehicleDetail = null;

    /**
     * @param VehicleDisclaimer $VehicleDisclaimer
     * @param VehicleDetail $VehicleDetail
     */
    public function __construct($VehicleDisclaimer = null, $VehicleDetail = null)
    {
      $this->VehicleDisclaimer = $VehicleDisclaimer;
      $this->VehicleDetail = $VehicleDetail;
    }

    /**
     * @return VehicleDisclaimer
     */
    public function getVehicleDisclaimer()
    {
      return $this->VehicleDisclaimer;
    }

    /**
     * @param VehicleDisclaimer $VehicleDisclaimer
     * @return \FilippoToso\Travelport\Vehicle\VehiclePolicy
     */
    public function setVehicleDisclaimer($VehicleDisclaimer)
    {
      $this->VehicleDisclaimer = $VehicleDisclaimer;
      return $this;
    }

    /**
     * @return VehicleDetail
     */
    public function getVehicleDetail()
    {
      return $this->VehicleDetail;
    }

    /**
     * @param VehicleDetail $VehicleDetail
     * @return \FilippoToso\Travelport\Vehicle\VehiclePolicy
     */
    public function setVehicleDetail($VehicleDetail)
    {
      $this->VehicleDetail = $VehicleDetail;
      return $this;
    }

}
