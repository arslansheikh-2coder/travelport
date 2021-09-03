<?php

namespace FilippoToso\Travelport\GDSQueue;

class CruiseReservation extends BaseReservation
{

    /**
     * @var CruiseSegment $CruiseSegment
     */
    public $CruiseSegment = null;

    /**
     * @var CruiseItinerary $CruiseItinerary
     */
    public $CruiseItinerary = null;

    /**
     * @var CruisePricingInfo $CruisePricingInfo
     */
    public $CruisePricingInfo = null;

    /**
     * @var OptionalService $OptionalService
     */
    public $OptionalService = null;

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var ProviderReservationInfoRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var Payment $Payment
     */
    public $Payment = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param Restriction $Restriction
     * @param PassiveInfo $PassiveInfo
     * @param typeLocatorCode $LocatorCode
     * @param string $CreateDate
     * @param string $ModifiedDate
     * @param string $CustomerNumber
     * @param CruiseSegment $CruiseSegment
     * @param CruiseItinerary $CruiseItinerary
     * @param CruisePricingInfo $CruisePricingInfo
     * @param OptionalService $OptionalService
     * @param BookingTravelerRef $BookingTravelerRef
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param Payment $Payment
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $Restriction = null, $PassiveInfo = null, $LocatorCode = null, $CreateDate = null, $ModifiedDate = null, $CustomerNumber = null, $CruiseSegment = null, $CruiseItinerary = null, $CruisePricingInfo = null, $OptionalService = null, $BookingTravelerRef = null, $ProviderReservationInfoRef = null, $Payment = null)
    {
      parent::__construct($AccountingRemark, $GeneralRemark, $Restriction, $PassiveInfo, $LocatorCode, $CreateDate, $ModifiedDate, $CustomerNumber);
      $this->CruiseSegment = $CruiseSegment;
      $this->CruiseItinerary = $CruiseItinerary;
      $this->CruisePricingInfo = $CruisePricingInfo;
      $this->OptionalService = $OptionalService;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Payment = $Payment;
    }

    /**
     * @return CruiseSegment
     */
    public function getCruiseSegment()
    {
      return $this->CruiseSegment;
    }

    /**
     * @param CruiseSegment $CruiseSegment
     * @return \FilippoToso\Travelport\GDSQueue\CruiseReservation
     */
    public function setCruiseSegment($CruiseSegment)
    {
      $this->CruiseSegment = $CruiseSegment;
      return $this;
    }

    /**
     * @return CruiseItinerary
     */
    public function getCruiseItinerary()
    {
      return $this->CruiseItinerary;
    }

    /**
     * @param CruiseItinerary $CruiseItinerary
     * @return \FilippoToso\Travelport\GDSQueue\CruiseReservation
     */
    public function setCruiseItinerary($CruiseItinerary)
    {
      $this->CruiseItinerary = $CruiseItinerary;
      return $this;
    }

    /**
     * @return CruisePricingInfo
     */
    public function getCruisePricingInfo()
    {
      return $this->CruisePricingInfo;
    }

    /**
     * @param CruisePricingInfo $CruisePricingInfo
     * @return \FilippoToso\Travelport\GDSQueue\CruiseReservation
     */
    public function setCruisePricingInfo($CruisePricingInfo)
    {
      $this->CruisePricingInfo = $CruisePricingInfo;
      return $this;
    }

    /**
     * @return OptionalService
     */
    public function getOptionalService()
    {
      return $this->OptionalService;
    }

    /**
     * @param OptionalService $OptionalService
     * @return \FilippoToso\Travelport\GDSQueue\CruiseReservation
     */
    public function setOptionalService($OptionalService)
    {
      $this->OptionalService = $OptionalService;
      return $this;
    }

    /**
     * @return BookingTravelerRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\CruiseReservation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return ProviderReservationInfoRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\GDSQueue\CruiseReservation
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FilippoToso\Travelport\GDSQueue\CruiseReservation
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

}
