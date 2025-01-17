<?php

namespace FilippoToso\Travelport\Util;

class UpsellBrand
{

    /**
     * @var string $FareBasis
     */
    public $FareBasis = null;

    /**
     * @var string $FareInfoRef
     */
    public $FareInfoRef = null;

    /**
     * @param string $FareBasis
     * @param string $FareInfoRef
     */
    public function __construct($FareBasis = null, $FareInfoRef = null)
    {
      $this->FareBasis = $FareBasis;
      $this->FareInfoRef = $FareInfoRef;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return \FilippoToso\Travelport\Util\UpsellBrand
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param string $FareInfoRef
     * @return \FilippoToso\Travelport\Util\UpsellBrand
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
