<?php

namespace FilippoToso\Travelport\UProfile;

class typeBasePreferenceHistory extends typeKeyElement
{

    /**
     * @var date $BookingStartDate
     */
    public $BookingStartDate = null;

    /**
     * @var date $BookingEndDate
     */
    public $BookingEndDate = null;

    /**
     * @var typeCurrency $Currency
     */
    public $Currency = null;

    /**
     * @var typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     */
    public $DepartureGeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     */
    public $DepartureGeoPoliticalAreaCode = null;

    /**
     * @var boolean $Emphasis
     */
    public $Emphasis = null;

    /**
     * @var StringLength1to255 $GeneralPreference
     */
    public $GeneralPreference = null;

    /**
     * @var boolean $Inclusive
     */
    public $Inclusive = null;

    /**
     * @var typeRef $LoyaltyProgramEnrollmentRef
     */
    public $LoyaltyProgramEnrollmentRef = null;

    /**
     * @var anonymous672 $OtherLoyaltyProgramNumber
     */
    public $OtherLoyaltyProgramNumber = null;

    /**
     * @var typeRef $PaymentDetailsRef
     */
    public $PaymentDetailsRef = null;

    /**
     * @var typePreferencePaymentMethod $PreferencePaymentMethod
     */
    public $PreferencePaymentMethod = null;

    /**
     * @var typePreferencePurpose $Purpose
     */
    public $Purpose = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    public $PriorityOrder = null;

    /**
     * @var typeSupplier $Supplier
     */
    public $Supplier = null;

    /**
     * @var boolean $TripApproval
     */
    public $TripApproval = null;

    /**
     * @param typeRef $Key
     * @param date $BookingStartDate
     * @param date $BookingEndDate
     * @param typeCurrency $Currency
     * @param typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     * @param boolean $Emphasis
     * @param StringLength1to255 $GeneralPreference
     * @param boolean $Inclusive
     * @param typeRef $LoyaltyProgramEnrollmentRef
     * @param anonymous672 $OtherLoyaltyProgramNumber
     * @param typeRef $PaymentDetailsRef
     * @param typePreferencePaymentMethod $PreferencePaymentMethod
     * @param typePreferencePurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     * @param typeSupplier $Supplier
     * @param boolean $TripApproval
     */
    public function __construct($Key = null, $BookingStartDate = null, $BookingEndDate = null, $Currency = null, $DepartureGeoPoliticalAreaType = null, $DepartureGeoPoliticalAreaCode = null, $Emphasis = null, $GeneralPreference = null, $Inclusive = null, $LoyaltyProgramEnrollmentRef = null, $OtherLoyaltyProgramNumber = null, $PaymentDetailsRef = null, $PreferencePaymentMethod = null, $Purpose = null, $PriorityOrder = null, $Supplier = null, $TripApproval = null)
    {
      parent::__construct($Key);
      $this->BookingStartDate = $BookingStartDate;
      $this->BookingEndDate = $BookingEndDate;
      $this->Currency = $Currency;
      $this->DepartureGeoPoliticalAreaType = $DepartureGeoPoliticalAreaType;
      $this->DepartureGeoPoliticalAreaCode = $DepartureGeoPoliticalAreaCode;
      $this->Emphasis = $Emphasis;
      $this->GeneralPreference = $GeneralPreference;
      $this->Inclusive = $Inclusive;
      $this->LoyaltyProgramEnrollmentRef = $LoyaltyProgramEnrollmentRef;
      $this->OtherLoyaltyProgramNumber = $OtherLoyaltyProgramNumber;
      $this->PaymentDetailsRef = $PaymentDetailsRef;
      $this->PreferencePaymentMethod = $PreferencePaymentMethod;
      $this->Purpose = $Purpose;
      $this->PriorityOrder = $PriorityOrder;
      $this->Supplier = $Supplier;
      $this->TripApproval = $TripApproval;
    }

    /**
     * @return date
     */
    public function getBookingStartDate()
    {
      return $this->BookingStartDate;
    }

    /**
     * @param date $BookingStartDate
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setBookingStartDate($BookingStartDate)
    {
      $this->BookingStartDate = $BookingStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getBookingEndDate()
    {
      return $this->BookingEndDate;
    }

    /**
     * @param date $BookingEndDate
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setBookingEndDate($BookingEndDate)
    {
      $this->BookingEndDate = $BookingEndDate;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param typeCurrency $Currency
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getDepartureGeoPoliticalAreaType()
    {
      return $this->DepartureGeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setDepartureGeoPoliticalAreaType($DepartureGeoPoliticalAreaType)
    {
      $this->DepartureGeoPoliticalAreaType = $DepartureGeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getDepartureGeoPoliticalAreaCode()
    {
      return $this->DepartureGeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setDepartureGeoPoliticalAreaCode($DepartureGeoPoliticalAreaCode)
    {
      $this->DepartureGeoPoliticalAreaCode = $DepartureGeoPoliticalAreaCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmphasis()
    {
      return $this->Emphasis;
    }

    /**
     * @param boolean $Emphasis
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setEmphasis($Emphasis)
    {
      $this->Emphasis = $Emphasis;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getGeneralPreference()
    {
      return $this->GeneralPreference;
    }

    /**
     * @param StringLength1to255 $GeneralPreference
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setGeneralPreference($GeneralPreference)
    {
      $this->GeneralPreference = $GeneralPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInclusive()
    {
      return $this->Inclusive;
    }

    /**
     * @param boolean $Inclusive
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setInclusive($Inclusive)
    {
      $this->Inclusive = $Inclusive;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getLoyaltyProgramEnrollmentRef()
    {
      return $this->LoyaltyProgramEnrollmentRef;
    }

    /**
     * @param typeRef $LoyaltyProgramEnrollmentRef
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setLoyaltyProgramEnrollmentRef($LoyaltyProgramEnrollmentRef)
    {
      $this->LoyaltyProgramEnrollmentRef = $LoyaltyProgramEnrollmentRef;
      return $this;
    }

    /**
     * @return anonymous672
     */
    public function getOtherLoyaltyProgramNumber()
    {
      return $this->OtherLoyaltyProgramNumber;
    }

    /**
     * @param anonymous672 $OtherLoyaltyProgramNumber
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setOtherLoyaltyProgramNumber($OtherLoyaltyProgramNumber)
    {
      $this->OtherLoyaltyProgramNumber = $OtherLoyaltyProgramNumber;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPaymentDetailsRef()
    {
      return $this->PaymentDetailsRef;
    }

    /**
     * @param typeRef $PaymentDetailsRef
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setPaymentDetailsRef($PaymentDetailsRef)
    {
      $this->PaymentDetailsRef = $PaymentDetailsRef;
      return $this;
    }

    /**
     * @return typePreferencePaymentMethod
     */
    public function getPreferencePaymentMethod()
    {
      return $this->PreferencePaymentMethod;
    }

    /**
     * @param typePreferencePaymentMethod $PreferencePaymentMethod
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setPreferencePaymentMethod($PreferencePaymentMethod)
    {
      $this->PreferencePaymentMethod = $PreferencePaymentMethod;
      return $this;
    }

    /**
     * @return typePreferencePurpose
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param typePreferencePurpose $Purpose
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeSupplier
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param typeSupplier $Supplier
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTripApproval()
    {
      return $this->TripApproval;
    }

    /**
     * @param boolean $TripApproval
     * @return \FilippoToso\Travelport\UProfile\typeBasePreferenceHistory
     */
    public function setTripApproval($TripApproval)
    {
      $this->TripApproval = $TripApproval;
      return $this;
    }

}
