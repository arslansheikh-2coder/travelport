<?php

namespace FilippoToso\Travelport\Terminal;

class typeTaxInfo
{

    /**
     * @var TaxDetail $TaxDetail
     */
    public $TaxDetail = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var string $Category
     */
    public $Category = null;

    /**
     * @var string $CarrierDefinedCategory
     */
    public $CarrierDefinedCategory = null;

    /**
     * @var typeRef $SegmentRef
     */
    public $SegmentRef = null;

    /**
     * @var typeRef $FlightDetailsRef
     */
    public $FlightDetailsRef = null;

    /**
     * @var typeRef $CouponRef
     */
    public $CouponRef = null;

    /**
     * @var boolean $TaxExempted
     */
    public $TaxExempted = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var typeAirport $OriginAirport
     */
    public $OriginAirport = null;

    /**
     * @var typeAirport $DestinationAirport
     */
    public $DestinationAirport = null;

    /**
     * @var string $CountryCode
     */
    public $CountryCode = null;

    /**
     * @var typeRef $FareInfoRef
     */
    public $FareInfoRef = null;

    /**
     * @param TaxDetail $TaxDetail
     * @param typeRef $Key
     * @param string $Category
     * @param string $CarrierDefinedCategory
     * @param typeRef $SegmentRef
     * @param typeRef $FlightDetailsRef
     * @param typeRef $CouponRef
     * @param boolean $TaxExempted
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param typeMoney $Amount
     * @param typeAirport $OriginAirport
     * @param typeAirport $DestinationAirport
     * @param string $CountryCode
     * @param typeRef $FareInfoRef
     */
    public function __construct($TaxDetail = null, $Key = null, $Category = null, $CarrierDefinedCategory = null, $SegmentRef = null, $FlightDetailsRef = null, $CouponRef = null, $TaxExempted = null, $ProviderCode = null, $SupplierCode = null, $Amount = null, $OriginAirport = null, $DestinationAirport = null, $CountryCode = null, $FareInfoRef = null)
    {
      $this->TaxDetail = $TaxDetail;
      $this->Key = $Key;
      $this->Category = $Category;
      $this->CarrierDefinedCategory = $CarrierDefinedCategory;
      $this->SegmentRef = $SegmentRef;
      $this->FlightDetailsRef = $FlightDetailsRef;
      $this->CouponRef = $CouponRef;
      $this->TaxExempted = $TaxExempted;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->Amount = $Amount;
      $this->OriginAirport = $OriginAirport;
      $this->DestinationAirport = $DestinationAirport;
      $this->CountryCode = $CountryCode;
      $this->FareInfoRef = $FareInfoRef;
    }

    /**
     * @return TaxDetail
     */
    public function getTaxDetail()
    {
      return $this->TaxDetail;
    }

    /**
     * @param TaxDetail $TaxDetail
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setTaxDetail($TaxDetail)
    {
      $this->TaxDetail = $TaxDetail;
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
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierDefinedCategory()
    {
      return $this->CarrierDefinedCategory;
    }

    /**
     * @param string $CarrierDefinedCategory
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setCarrierDefinedCategory($CarrierDefinedCategory)
    {
      $this->CarrierDefinedCategory = $CarrierDefinedCategory;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFlightDetailsRef()
    {
      return $this->FlightDetailsRef;
    }

    /**
     * @param typeRef $FlightDetailsRef
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setFlightDetailsRef($FlightDetailsRef)
    {
      $this->FlightDetailsRef = $FlightDetailsRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getCouponRef()
    {
      return $this->CouponRef;
    }

    /**
     * @param typeRef $CouponRef
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setCouponRef($CouponRef)
    {
      $this->CouponRef = $CouponRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxExempted()
    {
      return $this->TaxExempted;
    }

    /**
     * @param boolean $TaxExempted
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setTaxExempted($TaxExempted)
    {
      $this->TaxExempted = $TaxExempted;
      return $this;
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
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getOriginAirport()
    {
      return $this->OriginAirport;
    }

    /**
     * @param typeAirport $OriginAirport
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setOriginAirport($OriginAirport)
    {
      $this->OriginAirport = $OriginAirport;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getDestinationAirport()
    {
      return $this->DestinationAirport;
    }

    /**
     * @param typeAirport $DestinationAirport
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setDestinationAirport($DestinationAirport)
    {
      $this->DestinationAirport = $DestinationAirport;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param typeRef $FareInfoRef
     * @return \FilippoToso\Travelport\Terminal\typeTaxInfo
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
