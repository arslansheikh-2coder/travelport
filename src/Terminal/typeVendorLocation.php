<?php

namespace FilippoToso\Travelport\Terminal;

class typeVendorLocation
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeSupplierCode $VendorCode
     */
    public $VendorCode = null;

    /**
     * @var anonymous4 $VendorLocationID
     */
    public $VendorLocationID = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $VendorCode
     * @param anonymous4 $VendorLocationID
     * @param typeRef $Key
     */
    public function __construct($ProviderCode = null, $VendorCode = null, $VendorLocationID = null, $Key = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->VendorCode = $VendorCode;
      $this->VendorLocationID = $VendorLocationID;
      $this->Key = $Key;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Terminal\typeVendorLocation
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param typeSupplierCode $VendorCode
     * @return \FilippoToso\Travelport\Terminal\typeVendorLocation
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return anonymous4
     */
    public function getVendorLocationID()
    {
      return $this->VendorLocationID;
    }

    /**
     * @param anonymous4 $VendorLocationID
     * @return \FilippoToso\Travelport\Terminal\typeVendorLocation
     */
    public function setVendorLocationID($VendorLocationID)
    {
      $this->VendorLocationID = $VendorLocationID;
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
     * @return \FilippoToso\Travelport\Terminal\typeVendorLocation
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
