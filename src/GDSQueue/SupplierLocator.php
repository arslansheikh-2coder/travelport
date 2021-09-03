<?php

namespace FilippoToso\Travelport\GDSQueue;

class SupplierLocator
{

    /**
     * @var typeGeneralReference[] $SegmentRef
     */
    public $SegmentRef = null;

    /**
     * @var typeCarrier $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @var string $SupplierLocatorCode
     */
    public $SupplierLocatorCode = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var \DateTime $CreateDateTime
     */
    public $CreateDateTime = null;

    /**
     * @param typeCarrier $SupplierCode
     * @param string $SupplierLocatorCode
     * @param typeRef $ProviderReservationInfoRef
     * @param \DateTime $CreateDateTime
     */
    public function __construct($SupplierCode = null, $SupplierLocatorCode = null, $ProviderReservationInfoRef = null, \DateTime $CreateDateTime = null)
    {
      $this->SupplierCode = $SupplierCode;
      $this->SupplierLocatorCode = $SupplierLocatorCode;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->CreateDateTime = $CreateDateTime ? $CreateDateTime->format(\DateTime::ATOM) : null;
    }

    /**
     * @return typeGeneralReference[]
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeGeneralReference[] $SegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\SupplierLocator
     */
    public function setSegmentRef(array $SegmentRef = null)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeCarrier $SupplierCode
     * @return \FilippoToso\Travelport\GDSQueue\SupplierLocator
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierLocatorCode()
    {
      return $this->SupplierLocatorCode;
    }

    /**
     * @param string $SupplierLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\SupplierLocator
     */
    public function setSupplierLocatorCode($SupplierLocatorCode)
    {
      $this->SupplierLocatorCode = $SupplierLocatorCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\GDSQueue\SupplierLocator
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
      if ($this->CreateDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDateTime
     * @return \FilippoToso\Travelport\GDSQueue\SupplierLocator
     */
    public function setCreateDateTime(\DateTime $CreateDateTime)
    {
      $this->CreateDateTime = $CreateDateTime->format(\DateTime::ATOM);
      return $this;
    }

}
