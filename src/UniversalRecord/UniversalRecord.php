<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecord
{

    /**
     * @var LinkedUniversalRecord $LinkedUniversalRecord
     */
    public $LinkedUniversalRecord = null;

    /**
     * @var Group $Group
     */
    public $Group = null;

    /**
     * @var BookingTraveler $BookingTraveler
     */
    public $BookingTraveler = null;

    /**
     * @var ServiceFeeInfo $ServiceFeeInfo
     */
    public $ServiceFeeInfo = null;

    /**
     * @var OSI $OSI
     */
    public $OSI = null;

    /**
     * @var ActionStatus $ActionStatus
     */
    public $ActionStatus = null;

    /**
     * @var ProviderReservationInfo $ProviderReservationInfo
     */
    public $ProviderReservationInfo = null;

    /**
     * @var AirReservation $AirReservation
     */
    public $AirReservation = null;

    /**
     * @var HotelReservation $HotelReservation
     */
    public $HotelReservation = null;

    /**
     * @var VehicleReservation $VehicleReservation
     */
    public $VehicleReservation = null;

    /**
     * @var PassiveReservation $PassiveReservation
     */
    public $PassiveReservation = null;

    /**
     * @var RailReservation $RailReservation
     */
    public $RailReservation = null;

    /**
     * @var CruiseReservation $CruiseReservation
     */
    public $CruiseReservation = null;

    /**
     * @var EMDSummaryInfo $EMDSummaryInfo
     */
    public $EMDSummaryInfo = null;

    /**
     * @var ProviderARNKSegment $ProviderARNKSegment
     */
    public $ProviderARNKSegment = null;

    /**
     * @var SegmentContinuityInfo $SegmentContinuityInfo
     */
    public $SegmentContinuityInfo = null;

    /**
     * @var XMLRemark $XMLRemark
     */
    public $XMLRemark = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    public $GeneralRemark = null;

    /**
     * @var AccountingRemark $AccountingRemark
     */
    public $AccountingRemark = null;

    /**
     * @var UnassociatedRemark $UnassociatedRemark
     */
    public $UnassociatedRemark = null;

    /**
     * @var Postscript $Postscript
     */
    public $Postscript = null;

    /**
     * @var AgencyInfo $AgencyInfo
     */
    public $AgencyInfo = null;

    /**
     * @var AppliedProfile $AppliedProfile
     */
    public $AppliedProfile = null;

    /**
     * @var AgencyContactInfo $AgencyContactInfo
     */
    public $AgencyContactInfo = null;

    /**
     * @var CustomerID $CustomerID
     */
    public $CustomerID = null;

    /**
     * @var CommissionRemark $CommissionRemark
     */
    public $CommissionRemark = null;

    /**
     * @var ConsolidatorRemark $ConsolidatorRemark
     */
    public $ConsolidatorRemark = null;

    /**
     * @var UnmaskedDataRemark $UnmaskedDataRemark
     */
    public $UnmaskedDataRemark = null;

    /**
     * @var InvoiceRemark $InvoiceRemark
     */
    public $InvoiceRemark = null;

    /**
     * @var ReviewBooking $ReviewBooking
     */
    public $ReviewBooking = null;

    /**
     * @var SSR $SSR
     */
    public $SSR = null;

    /**
     * @var InvoiceData $InvoiceData
     */
    public $InvoiceData = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @var typeLocatorCode $LocatorCode
     */
    public $LocatorCode = null;

    /**
     * @var typeLocatorCode $SavedTripLocatorCode
     */
    public $SavedTripLocatorCode = null;

    /**
     * @var string $LockReason
     */
    public $LockReason = null;

    /**
     * @var \DateTime $CreateDate
     */
    public $CreateDate = null;

    /**
     * @var typeURVersion $Version
     */
    public $Version = null;

    /**
     * @var typeURStatus $Status
     */
    public $Status = null;

    /**
     * @param LinkedUniversalRecord $LinkedUniversalRecord
     * @param Group $Group
     * @param BookingTraveler $BookingTraveler
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @param OSI $OSI
     * @param ActionStatus $ActionStatus
     * @param ProviderReservationInfo $ProviderReservationInfo
     * @param AirReservation $AirReservation
     * @param HotelReservation $HotelReservation
     * @param VehicleReservation $VehicleReservation
     * @param PassiveReservation $PassiveReservation
     * @param RailReservation $RailReservation
     * @param CruiseReservation $CruiseReservation
     * @param EMDSummaryInfo $EMDSummaryInfo
     * @param ProviderARNKSegment $ProviderARNKSegment
     * @param SegmentContinuityInfo $SegmentContinuityInfo
     * @param XMLRemark $XMLRemark
     * @param GeneralRemark $GeneralRemark
     * @param AccountingRemark $AccountingRemark
     * @param UnassociatedRemark $UnassociatedRemark
     * @param Postscript $Postscript
     * @param AgencyInfo $AgencyInfo
     * @param AppliedProfile $AppliedProfile
     * @param AgencyContactInfo $AgencyContactInfo
     * @param CustomerID $CustomerID
     * @param CommissionRemark $CommissionRemark
     * @param ConsolidatorRemark $ConsolidatorRemark
     * @param UnmaskedDataRemark $UnmaskedDataRemark
     * @param InvoiceRemark $InvoiceRemark
     * @param ReviewBooking $ReviewBooking
     * @param SSR $SSR
     * @param InvoiceData $InvoiceData
     * @param FormOfPayment $FormOfPayment
     * @param typeLocatorCode $LocatorCode
     * @param typeLocatorCode $SavedTripLocatorCode
     * @param string $LockReason
     * @param \DateTime $CreateDate
     * @param typeURVersion $Version
     * @param typeURStatus $Status
     */
    public function __construct($LinkedUniversalRecord = null, $Group = null, $BookingTraveler = null, $ServiceFeeInfo = null, $OSI = null, $ActionStatus = null, $ProviderReservationInfo = null, $AirReservation = null, $HotelReservation = null, $VehicleReservation = null, $PassiveReservation = null, $RailReservation = null, $CruiseReservation = null, $EMDSummaryInfo = null, $ProviderARNKSegment = null, $SegmentContinuityInfo = null, $XMLRemark = null, $GeneralRemark = null, $AccountingRemark = null, $UnassociatedRemark = null, $Postscript = null, $AgencyInfo = null, $AppliedProfile = null, $AgencyContactInfo = null, $CustomerID = null, $CommissionRemark = null, $ConsolidatorRemark = null, $UnmaskedDataRemark = null, $InvoiceRemark = null, $ReviewBooking = null, $SSR = null, $InvoiceData = null, $FormOfPayment = null, $LocatorCode = null, $SavedTripLocatorCode = null, $LockReason = null, \DateTime $CreateDate = null, $Version = null, $Status = null)
    {
      $this->LinkedUniversalRecord = $LinkedUniversalRecord;
      $this->Group = $Group;
      $this->BookingTraveler = $BookingTraveler;
      $this->ServiceFeeInfo = $ServiceFeeInfo;
      $this->OSI = $OSI;
      $this->ActionStatus = $ActionStatus;
      $this->ProviderReservationInfo = $ProviderReservationInfo;
      $this->AirReservation = $AirReservation;
      $this->HotelReservation = $HotelReservation;
      $this->VehicleReservation = $VehicleReservation;
      $this->PassiveReservation = $PassiveReservation;
      $this->RailReservation = $RailReservation;
      $this->CruiseReservation = $CruiseReservation;
      $this->EMDSummaryInfo = $EMDSummaryInfo;
      $this->ProviderARNKSegment = $ProviderARNKSegment;
      $this->SegmentContinuityInfo = $SegmentContinuityInfo;
      $this->XMLRemark = $XMLRemark;
      $this->GeneralRemark = $GeneralRemark;
      $this->AccountingRemark = $AccountingRemark;
      $this->UnassociatedRemark = $UnassociatedRemark;
      $this->Postscript = $Postscript;
      $this->AgencyInfo = $AgencyInfo;
      $this->AppliedProfile = $AppliedProfile;
      $this->AgencyContactInfo = $AgencyContactInfo;
      $this->CustomerID = $CustomerID;
      $this->CommissionRemark = $CommissionRemark;
      $this->ConsolidatorRemark = $ConsolidatorRemark;
      $this->UnmaskedDataRemark = $UnmaskedDataRemark;
      $this->InvoiceRemark = $InvoiceRemark;
      $this->ReviewBooking = $ReviewBooking;
      $this->SSR = $SSR;
      $this->InvoiceData = $InvoiceData;
      $this->FormOfPayment = $FormOfPayment;
      $this->LocatorCode = $LocatorCode;
      $this->SavedTripLocatorCode = $SavedTripLocatorCode;
      $this->LockReason = $LockReason;
      $this->CreateDate = $CreateDate ? $CreateDate->format(\DateTime::ATOM) : null;
      $this->Version = $Version;
      $this->Status = $Status;
    }

    /**
     * @return LinkedUniversalRecord
     */
    public function getLinkedUniversalRecord()
    {
      return $this->LinkedUniversalRecord;
    }

    /**
     * @param LinkedUniversalRecord $LinkedUniversalRecord
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setLinkedUniversalRecord($LinkedUniversalRecord)
    {
      $this->LinkedUniversalRecord = $LinkedUniversalRecord;
      return $this;
    }

    /**
     * @return Group
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param Group $Group
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
      return $this;
    }

    /**
     * @return BookingTraveler
     */
    public function getBookingTraveler()
    {
      return $this->BookingTraveler;
    }

    /**
     * @param BookingTraveler $BookingTraveler
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setBookingTraveler($BookingTraveler)
    {
      $this->BookingTraveler = $BookingTraveler;
      return $this;
    }

    /**
     * @return ServiceFeeInfo
     */
    public function getServiceFeeInfo()
    {
      return $this->ServiceFeeInfo;
    }

    /**
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setServiceFeeInfo($ServiceFeeInfo)
    {
      $this->ServiceFeeInfo = $ServiceFeeInfo;
      return $this;
    }

    /**
     * @return OSI
     */
    public function getOSI()
    {
      return $this->OSI;
    }

    /**
     * @param OSI $OSI
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setOSI($OSI)
    {
      $this->OSI = $OSI;
      return $this;
    }

    /**
     * @return ActionStatus
     */
    public function getActionStatus()
    {
      return $this->ActionStatus;
    }

    /**
     * @param ActionStatus $ActionStatus
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setActionStatus($ActionStatus)
    {
      $this->ActionStatus = $ActionStatus;
      return $this;
    }

    /**
     * @return ProviderReservationInfo
     */
    public function getProviderReservationInfo()
    {
      return $this->ProviderReservationInfo;
    }

    /**
     * @param ProviderReservationInfo $ProviderReservationInfo
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setProviderReservationInfo($ProviderReservationInfo)
    {
      $this->ProviderReservationInfo = $ProviderReservationInfo;
      return $this;
    }

    /**
     * @return AirReservation
     */
    public function getAirReservation()
    {
      return $this->AirReservation;
    }

    /**
     * @param AirReservation $AirReservation
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setAirReservation($AirReservation)
    {
      $this->AirReservation = $AirReservation;
      return $this;
    }

    /**
     * @return HotelReservation
     */
    public function getHotelReservation()
    {
      return $this->HotelReservation;
    }

    /**
     * @param HotelReservation $HotelReservation
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setHotelReservation($HotelReservation)
    {
      $this->HotelReservation = $HotelReservation;
      return $this;
    }

    /**
     * @return VehicleReservation
     */
    public function getVehicleReservation()
    {
      return $this->VehicleReservation;
    }

    /**
     * @param VehicleReservation $VehicleReservation
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setVehicleReservation($VehicleReservation)
    {
      $this->VehicleReservation = $VehicleReservation;
      return $this;
    }

    /**
     * @return PassiveReservation
     */
    public function getPassiveReservation()
    {
      return $this->PassiveReservation;
    }

    /**
     * @param PassiveReservation $PassiveReservation
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setPassiveReservation($PassiveReservation)
    {
      $this->PassiveReservation = $PassiveReservation;
      return $this;
    }

    /**
     * @return RailReservation
     */
    public function getRailReservation()
    {
      return $this->RailReservation;
    }

    /**
     * @param RailReservation $RailReservation
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setRailReservation($RailReservation)
    {
      $this->RailReservation = $RailReservation;
      return $this;
    }

    /**
     * @return CruiseReservation
     */
    public function getCruiseReservation()
    {
      return $this->CruiseReservation;
    }

    /**
     * @param CruiseReservation $CruiseReservation
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setCruiseReservation($CruiseReservation)
    {
      $this->CruiseReservation = $CruiseReservation;
      return $this;
    }

    /**
     * @return EMDSummaryInfo
     */
    public function getEMDSummaryInfo()
    {
      return $this->EMDSummaryInfo;
    }

    /**
     * @param EMDSummaryInfo $EMDSummaryInfo
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setEMDSummaryInfo($EMDSummaryInfo)
    {
      $this->EMDSummaryInfo = $EMDSummaryInfo;
      return $this;
    }

    /**
     * @return ProviderARNKSegment
     */
    public function getProviderARNKSegment()
    {
      return $this->ProviderARNKSegment;
    }

    /**
     * @param ProviderARNKSegment $ProviderARNKSegment
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setProviderARNKSegment($ProviderARNKSegment)
    {
      $this->ProviderARNKSegment = $ProviderARNKSegment;
      return $this;
    }

    /**
     * @return SegmentContinuityInfo
     */
    public function getSegmentContinuityInfo()
    {
      return $this->SegmentContinuityInfo;
    }

    /**
     * @param SegmentContinuityInfo $SegmentContinuityInfo
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setSegmentContinuityInfo($SegmentContinuityInfo)
    {
      $this->SegmentContinuityInfo = $SegmentContinuityInfo;
      return $this;
    }

    /**
     * @return XMLRemark
     */
    public function getXMLRemark()
    {
      return $this->XMLRemark;
    }

    /**
     * @param XMLRemark $XMLRemark
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setXMLRemark($XMLRemark)
    {
      $this->XMLRemark = $XMLRemark;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return AccountingRemark
     */
    public function getAccountingRemark()
    {
      return $this->AccountingRemark;
    }

    /**
     * @param AccountingRemark $AccountingRemark
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
      return $this;
    }

    /**
     * @return UnassociatedRemark
     */
    public function getUnassociatedRemark()
    {
      return $this->UnassociatedRemark;
    }

    /**
     * @param UnassociatedRemark $UnassociatedRemark
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setUnassociatedRemark($UnassociatedRemark)
    {
      $this->UnassociatedRemark = $UnassociatedRemark;
      return $this;
    }

    /**
     * @return Postscript
     */
    public function getPostscript()
    {
      return $this->Postscript;
    }

    /**
     * @param Postscript $Postscript
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setPostscript($Postscript)
    {
      $this->Postscript = $Postscript;
      return $this;
    }

    /**
     * @return AgencyInfo
     */
    public function getAgencyInfo()
    {
      return $this->AgencyInfo;
    }

    /**
     * @param AgencyInfo $AgencyInfo
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setAgencyInfo($AgencyInfo)
    {
      $this->AgencyInfo = $AgencyInfo;
      return $this;
    }

    /**
     * @return AppliedProfile
     */
    public function getAppliedProfile()
    {
      return $this->AppliedProfile;
    }

    /**
     * @param AppliedProfile $AppliedProfile
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setAppliedProfile($AppliedProfile)
    {
      $this->AppliedProfile = $AppliedProfile;
      return $this;
    }

    /**
     * @return AgencyContactInfo
     */
    public function getAgencyContactInfo()
    {
      return $this->AgencyContactInfo;
    }

    /**
     * @param AgencyContactInfo $AgencyContactInfo
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setAgencyContactInfo($AgencyContactInfo)
    {
      $this->AgencyContactInfo = $AgencyContactInfo;
      return $this;
    }

    /**
     * @return CustomerID
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param CustomerID $CustomerID
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return CommissionRemark
     */
    public function getCommissionRemark()
    {
      return $this->CommissionRemark;
    }

    /**
     * @param CommissionRemark $CommissionRemark
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setCommissionRemark($CommissionRemark)
    {
      $this->CommissionRemark = $CommissionRemark;
      return $this;
    }

    /**
     * @return ConsolidatorRemark
     */
    public function getConsolidatorRemark()
    {
      return $this->ConsolidatorRemark;
    }

    /**
     * @param ConsolidatorRemark $ConsolidatorRemark
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setConsolidatorRemark($ConsolidatorRemark)
    {
      $this->ConsolidatorRemark = $ConsolidatorRemark;
      return $this;
    }

    /**
     * @return UnmaskedDataRemark
     */
    public function getUnmaskedDataRemark()
    {
      return $this->UnmaskedDataRemark;
    }

    /**
     * @param UnmaskedDataRemark $UnmaskedDataRemark
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setUnmaskedDataRemark($UnmaskedDataRemark)
    {
      $this->UnmaskedDataRemark = $UnmaskedDataRemark;
      return $this;
    }

    /**
     * @return InvoiceRemark
     */
    public function getInvoiceRemark()
    {
      return $this->InvoiceRemark;
    }

    /**
     * @param InvoiceRemark $InvoiceRemark
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setInvoiceRemark($InvoiceRemark)
    {
      $this->InvoiceRemark = $InvoiceRemark;
      return $this;
    }

    /**
     * @return ReviewBooking
     */
    public function getReviewBooking()
    {
      return $this->ReviewBooking;
    }

    /**
     * @param ReviewBooking $ReviewBooking
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setReviewBooking($ReviewBooking)
    {
      $this->ReviewBooking = $ReviewBooking;
      return $this;
    }

    /**
     * @return SSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param SSR $SSR
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return InvoiceData
     */
    public function getInvoiceData()
    {
      return $this->InvoiceData;
    }

    /**
     * @param InvoiceData $InvoiceData
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setInvoiceData($InvoiceData)
    {
      $this->InvoiceData = $InvoiceData;
      return $this;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getSavedTripLocatorCode()
    {
      return $this->SavedTripLocatorCode;
    }

    /**
     * @param typeLocatorCode $SavedTripLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setSavedTripLocatorCode($SavedTripLocatorCode)
    {
      $this->SavedTripLocatorCode = $SavedTripLocatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLockReason()
    {
      return $this->LockReason;
    }

    /**
     * @param string $LockReason
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setLockReason($LockReason)
    {
      $this->LockReason = $LockReason;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeURVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeURVersion $Version
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return typeURStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeURStatus $Status
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecord
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
