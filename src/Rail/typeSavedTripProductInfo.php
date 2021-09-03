<?php

namespace FilippoToso\Travelport\Rail;

class typeSavedTripProductInfo
{

    /**
     * @var typeProduct $ProductType
     */
    public $ProductType = null;

    /**
     * @var string $VendorCode
     */
    public $VendorCode = null;

    /**
     * @var string $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @param typeProduct $ProductType
     * @param string $VendorCode
     * @param string $ProviderCode
     */
    public function __construct($ProductType = null, $VendorCode = null, $ProviderCode = null)
    {
      $this->ProductType = $ProductType;
      $this->VendorCode = $VendorCode;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return typeProduct
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param typeProduct $ProductType
     * @return \FilippoToso\Travelport\Rail\typeSavedTripProductInfo
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param string $VendorCode
     * @return \FilippoToso\Travelport\Rail\typeSavedTripProductInfo
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param string $ProviderCode
     * @return \FilippoToso\Travelport\Rail\typeSavedTripProductInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
