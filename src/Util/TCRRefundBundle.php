<?php

namespace FilippoToso\Travelport\Util;

class TCRRefundBundle
{

    /**
     * @var AirRefundInfo $AirRefundInfo
     */
    public $AirRefundInfo = null;

    /**
     * @var WaiverCode $WaiverCode
     */
    public $WaiverCode = null;

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    public $AirSegment = null;

    /**
     * @var typeFeeInfo $FeeInfo
     */
    public $FeeInfo = null;

    /**
     * @var typeTaxInfo $TaxInfo
     */
    public $TaxInfo = null;

    /**
     * @var HostToken $HostToken
     */
    public $HostToken = null;

    /**
     * @var typeTCRNumber $TCRNumber
     */
    public $TCRNumber = null;

    /**
     * @var anonymous662 $RefundType
     */
    public $RefundType = null;

    /**
     * @var anonymous645 $RefundAccessCode
     */
    public $RefundAccessCode = null;

    /**
     * @param AirRefundInfo $AirRefundInfo
     * @param WaiverCode $WaiverCode
     * @param typeBaseAirSegment $AirSegment
     * @param typeFeeInfo $FeeInfo
     * @param typeTaxInfo $TaxInfo
     * @param HostToken $HostToken
     * @param typeTCRNumber $TCRNumber
     * @param anonymous662 $RefundType
     * @param anonymous645 $RefundAccessCode
     */
    public function __construct($AirRefundInfo = null, $WaiverCode = null, $AirSegment = null, $FeeInfo = null, $TaxInfo = null, $HostToken = null, $TCRNumber = null, $RefundType = null, $RefundAccessCode = null)
    {
      $this->AirRefundInfo = $AirRefundInfo;
      $this->WaiverCode = $WaiverCode;
      $this->AirSegment = $AirSegment;
      $this->FeeInfo = $FeeInfo;
      $this->TaxInfo = $TaxInfo;
      $this->HostToken = $HostToken;
      $this->TCRNumber = $TCRNumber;
      $this->RefundType = $RefundType;
      $this->RefundAccessCode = $RefundAccessCode;
    }

    /**
     * @return AirRefundInfo
     */
    public function getAirRefundInfo()
    {
      return $this->AirRefundInfo;
    }

    /**
     * @param AirRefundInfo $AirRefundInfo
     * @return \FilippoToso\Travelport\Util\TCRRefundBundle
     */
    public function setAirRefundInfo($AirRefundInfo)
    {
      $this->AirRefundInfo = $AirRefundInfo;
      return $this;
    }

    /**
     * @return WaiverCode
     */
    public function getWaiverCode()
    {
      return $this->WaiverCode;
    }

    /**
     * @param WaiverCode $WaiverCode
     * @return \FilippoToso\Travelport\Util\TCRRefundBundle
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
      return $this;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \FilippoToso\Travelport\Util\TCRRefundBundle
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return typeFeeInfo
     */
    public function getFeeInfo()
    {
      return $this->FeeInfo;
    }

    /**
     * @param typeFeeInfo $FeeInfo
     * @return \FilippoToso\Travelport\Util\TCRRefundBundle
     */
    public function setFeeInfo($FeeInfo)
    {
      $this->FeeInfo = $FeeInfo;
      return $this;
    }

    /**
     * @return typeTaxInfo
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo $TaxInfo
     * @return \FilippoToso\Travelport\Util\TCRRefundBundle
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\Util\TCRRefundBundle
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return typeTCRNumber
     */
    public function getTCRNumber()
    {
      return $this->TCRNumber;
    }

    /**
     * @param typeTCRNumber $TCRNumber
     * @return \FilippoToso\Travelport\Util\TCRRefundBundle
     */
    public function setTCRNumber($TCRNumber)
    {
      $this->TCRNumber = $TCRNumber;
      return $this;
    }

    /**
     * @return anonymous662
     */
    public function getRefundType()
    {
      return $this->RefundType;
    }

    /**
     * @param anonymous662 $RefundType
     * @return \FilippoToso\Travelport\Util\TCRRefundBundle
     */
    public function setRefundType($RefundType)
    {
      $this->RefundType = $RefundType;
      return $this;
    }

    /**
     * @return anonymous645
     */
    public function getRefundAccessCode()
    {
      return $this->RefundAccessCode;
    }

    /**
     * @param anonymous645 $RefundAccessCode
     * @return \FilippoToso\Travelport\Util\TCRRefundBundle
     */
    public function setRefundAccessCode($RefundAccessCode)
    {
      $this->RefundAccessCode = $RefundAccessCode;
      return $this;
    }

}
