<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RateModifiers
{

    /**
     * @var typeRateCode $RateCode
     */
    public $RateCode = null;

    /**
     * @var typeDiscountNumber $DiscountNumber
     */
    public $DiscountNumber = null;

    /**
     * @var typeSupplierCode $VendorCode
     */
    public $VendorCode = null;

    /**
     * @var string $PromotionalCode
     */
    public $PromotionalCode = null;

    /**
     * @var string $VendorLocationRef
     */
    public $VendorLocationRef = null;

    /**
     * @var string $TourCode
     */
    public $TourCode = null;

    /**
     * @param typeRateCode $RateCode
     * @param typeDiscountNumber $DiscountNumber
     * @param typeSupplierCode $VendorCode
     * @param string $PromotionalCode
     * @param string $VendorLocationRef
     * @param string $TourCode
     */
    public function __construct($RateCode = null, $DiscountNumber = null, $VendorCode = null, $PromotionalCode = null, $VendorLocationRef = null, $TourCode = null)
    {
      $this->RateCode = $RateCode;
      $this->DiscountNumber = $DiscountNumber;
      $this->VendorCode = $VendorCode;
      $this->PromotionalCode = $PromotionalCode;
      $this->VendorLocationRef = $VendorLocationRef;
      $this->TourCode = $TourCode;
    }

    /**
     * @return typeRateCode
     */
    public function getRateCode()
    {
      return $this->RateCode;
    }

    /**
     * @param typeRateCode $RateCode
     * @return \FilippoToso\Travelport\UniversalRecord\RateModifiers
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
      return $this;
    }

    /**
     * @return typeDiscountNumber
     */
    public function getDiscountNumber()
    {
      return $this->DiscountNumber;
    }

    /**
     * @param typeDiscountNumber $DiscountNumber
     * @return \FilippoToso\Travelport\UniversalRecord\RateModifiers
     */
    public function setDiscountNumber($DiscountNumber)
    {
      $this->DiscountNumber = $DiscountNumber;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RateModifiers
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotionalCode()
    {
      return $this->PromotionalCode;
    }

    /**
     * @param string $PromotionalCode
     * @return \FilippoToso\Travelport\UniversalRecord\RateModifiers
     */
    public function setPromotionalCode($PromotionalCode)
    {
      $this->PromotionalCode = $PromotionalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorLocationRef()
    {
      return $this->VendorLocationRef;
    }

    /**
     * @param string $VendorLocationRef
     * @return \FilippoToso\Travelport\UniversalRecord\RateModifiers
     */
    public function setVendorLocationRef($VendorLocationRef)
    {
      $this->VendorLocationRef = $VendorLocationRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param string $TourCode
     * @return \FilippoToso\Travelport\UniversalRecord\RateModifiers
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

}
