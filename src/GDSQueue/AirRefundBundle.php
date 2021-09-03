<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirRefundBundle
{

    /**
     * @var AirRefundInfo $AirRefundInfo
     */
    public $AirRefundInfo = null;

    /**
     * @var Name $Name
     */
    public $Name = null;

    /**
     * @var typeTaxInfo $TaxInfo
     */
    public $TaxInfo = null;

    /**
     * @var WaiverCode $WaiverCode
     */
    public $WaiverCode = null;

    /**
     * @var string $TicketNumber
     */
    public $TicketNumber = null;

    /**
     * @var UNKNOWN $PTC
     */
    public $PTC = null;

    /**
     * @var anonymous737 $RefundType
     */
    public $RefundType = null;

    /**
     * @param AirRefundInfo $AirRefundInfo
     * @param Name $Name
     * @param typeTaxInfo $TaxInfo
     * @param WaiverCode $WaiverCode
     * @param string $TicketNumber
     * @param UNKNOWN $PTC
     * @param anonymous737 $RefundType
     */
    public function __construct($AirRefundInfo = null, $Name = null, $TaxInfo = null, $WaiverCode = null, $TicketNumber = null, $PTC = null, $RefundType = null)
    {
      $this->AirRefundInfo = $AirRefundInfo;
      $this->Name = $Name;
      $this->TaxInfo = $TaxInfo;
      $this->WaiverCode = $WaiverCode;
      $this->TicketNumber = $TicketNumber;
      $this->PTC = $PTC;
      $this->RefundType = $RefundType;
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
     * @return \FilippoToso\Travelport\GDSQueue\AirRefundBundle
     */
    public function setAirRefundInfo($AirRefundInfo)
    {
      $this->AirRefundInfo = $AirRefundInfo;
      return $this;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\GDSQueue\AirRefundBundle
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\GDSQueue\AirRefundBundle
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
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
     * @return \FilippoToso\Travelport\GDSQueue\AirRefundBundle
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param string $TicketNumber
     * @return \FilippoToso\Travelport\GDSQueue\AirRefundBundle
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getPTC()
    {
      return $this->PTC;
    }

    /**
     * @param UNKNOWN $PTC
     * @return \FilippoToso\Travelport\GDSQueue\AirRefundBundle
     */
    public function setPTC($PTC)
    {
      $this->PTC = $PTC;
      return $this;
    }

    /**
     * @return anonymous737
     */
    public function getRefundType()
    {
      return $this->RefundType;
    }

    /**
     * @param anonymous737 $RefundType
     * @return \FilippoToso\Travelport\GDSQueue\AirRefundBundle
     */
    public function setRefundType($RefundType)
    {
      $this->RefundType = $RefundType;
      return $this;
    }

}
