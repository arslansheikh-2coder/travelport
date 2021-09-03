<?php

namespace FilippoToso\Travelport\GDSQueue;

class VehicleRate
{

    /**
     * @var SupplierRate $SupplierRate
     */
    public $SupplierRate = null;

    /**
     * @var typeRateVariance $RateVariance
     */
    public $RateVariance = null;

    /**
     * @var typeVehicleRates $ApproximateRate
     */
    public $ApproximateRate = null;

    /**
     * @var typeVehicleRateDescription[] $VehicleRateDescription
     */
    public $VehicleRateDescription = null;

    /**
     * @var typeRateHostIndicator $RateHostIndicator
     */
    public $RateHostIndicator = null;

    /**
     * @var typeRateInfo $HourlyLateCharge
     */
    public $HourlyLateCharge = null;

    /**
     * @var typeRateInfo $DailyLateCharge
     */
    public $DailyLateCharge = null;

    /**
     * @var PricedEquip $PricedEquip
     */
    public $PricedEquip = null;

    /**
     * @var RateInclusions $RateInclusions
     */
    public $RateInclusions = null;

    /**
     * @var typeRateInfo $WeeklyLateCharge
     */
    public $WeeklyLateCharge = null;

    /**
     * @var string $PrintText
     */
    public $PrintText = null;

    /**
     * @var typeRateTimePeriod $RatePeriod
     */
    public $RatePeriod = null;

    /**
     * @var int $NumberOfPeriods
     */
    public $NumberOfPeriods = null;

    /**
     * @var boolean $UnlimitedMileage
     */
    public $UnlimitedMileage = null;

    /**
     * @var int $MileageAllowance
     */
    public $MileageAllowance = null;

    /**
     * @var typeDistance $Units
     */
    public $Units = null;

    /**
     * @var string $RateSource
     */
    public $RateSource = null;

    /**
     * @var typeRateAvailability $RateAvailability
     */
    public $RateAvailability = null;

    /**
     * @var typeMoney $RequiredCharges
     */
    public $RequiredCharges = null;

    /**
     * @var typeRateCode $RateCode
     */
    public $RateCode = null;

    /**
     * @var typeTrinary $RequestedRateCodeApplied
     */
    public $RequestedRateCodeApplied = null;

    /**
     * @var typeRateCategory $RateCategory
     */
    public $RateCategory = null;

    /**
     * @var typeDiscountNumber $DiscountNumber
     */
    public $DiscountNumber = null;

    /**
     * @var typeTrinary $DiscountNumberApplied
     */
    public $DiscountNumberApplied = null;

    /**
     * @var typeSupplierCode $VendorCode
     */
    public $VendorCode = null;

    /**
     * @var boolean $RateGuaranteed
     */
    public $RateGuaranteed = null;

    /**
     * @var string $RateCodePeriod
     */
    public $RateCodePeriod = null;

    /**
     * @var string $PromotionalCode
     */
    public $PromotionalCode = null;

    /**
     * @var typeTrinary $PromotionalCodeApplied
     */
    public $PromotionalCodeApplied = null;

    /**
     * @var string $TourCode
     */
    public $TourCode = null;

    /**
     * @var typeTrinary $TourCodeApplied
     */
    public $TourCodeApplied = null;

    /**
     * @var typeRateGuarantee $RateGuaranteeType
     */
    public $RateGuaranteeType = null;

    /**
     * @var anonymous549 $RequiredPayment
     */
    public $RequiredPayment = null;

    /**
     * @var boolean $DropOffChargesIncluded
     */
    public $DropOffChargesIncluded = null;

    /**
     * @var boolean $CorporateRate
     */
    public $CorporateRate = null;

    /**
     * @var string $AdvancedBooking
     */
    public $AdvancedBooking = null;

    /**
     * @var boolean $RentalRestriction
     */
    public $RentalRestriction = null;

    /**
     * @var boolean $FlightRestriction
     */
    public $FlightRestriction = null;

    /**
     * @var typeCardNumber $CardNumber
     */
    public $CardNumber = null;

    /**
     * @var typeTrinary $CardNumberApplied
     */
    public $CardNumberApplied = null;

    /**
     * @var int $RateQualifierInd
     */
    public $RateQualifierInd = null;

    /**
     * @param SupplierRate $SupplierRate
     * @param PricedEquip $PricedEquip
     * @param RateInclusions $RateInclusions
     * @param typeRateTimePeriod $RatePeriod
     * @param int $NumberOfPeriods
     * @param boolean $UnlimitedMileage
     * @param int $MileageAllowance
     * @param typeDistance $Units
     * @param string $RateSource
     * @param typeRateAvailability $RateAvailability
     * @param typeMoney $RequiredCharges
     * @param typeRateCode $RateCode
     * @param typeTrinary $RequestedRateCodeApplied
     * @param typeRateCategory $RateCategory
     * @param typeDiscountNumber $DiscountNumber
     * @param typeTrinary $DiscountNumberApplied
     * @param typeSupplierCode $VendorCode
     * @param boolean $RateGuaranteed
     * @param string $RateCodePeriod
     * @param string $PromotionalCode
     * @param typeTrinary $PromotionalCodeApplied
     * @param string $TourCode
     * @param typeTrinary $TourCodeApplied
     * @param typeRateGuarantee $RateGuaranteeType
     * @param anonymous549 $RequiredPayment
     * @param boolean $DropOffChargesIncluded
     * @param boolean $CorporateRate
     * @param string $AdvancedBooking
     * @param boolean $RentalRestriction
     * @param boolean $FlightRestriction
     * @param typeCardNumber $CardNumber
     * @param typeTrinary $CardNumberApplied
     * @param int $RateQualifierInd
     */
    public function __construct($SupplierRate = null, $PricedEquip = null, $RateInclusions = null, $RatePeriod = null, $NumberOfPeriods = null, $UnlimitedMileage = null, $MileageAllowance = null, $Units = null, $RateSource = null, $RateAvailability = null, $RequiredCharges = null, $RateCode = null, $RequestedRateCodeApplied = null, $RateCategory = null, $DiscountNumber = null, $DiscountNumberApplied = null, $VendorCode = null, $RateGuaranteed = null, $RateCodePeriod = null, $PromotionalCode = null, $PromotionalCodeApplied = null, $TourCode = null, $TourCodeApplied = null, $RateGuaranteeType = null, $RequiredPayment = null, $DropOffChargesIncluded = null, $CorporateRate = null, $AdvancedBooking = null, $RentalRestriction = null, $FlightRestriction = null, $CardNumber = null, $CardNumberApplied = null, $RateQualifierInd = null)
    {
      $this->SupplierRate = $SupplierRate;
      $this->PricedEquip = $PricedEquip;
      $this->RateInclusions = $RateInclusions;
      $this->RatePeriod = $RatePeriod;
      $this->NumberOfPeriods = $NumberOfPeriods;
      $this->UnlimitedMileage = $UnlimitedMileage;
      $this->MileageAllowance = $MileageAllowance;
      $this->Units = $Units;
      $this->RateSource = $RateSource;
      $this->RateAvailability = $RateAvailability;
      $this->RequiredCharges = $RequiredCharges;
      $this->RateCode = $RateCode;
      $this->RequestedRateCodeApplied = $RequestedRateCodeApplied;
      $this->RateCategory = $RateCategory;
      $this->DiscountNumber = $DiscountNumber;
      $this->DiscountNumberApplied = $DiscountNumberApplied;
      $this->VendorCode = $VendorCode;
      $this->RateGuaranteed = $RateGuaranteed;
      $this->RateCodePeriod = $RateCodePeriod;
      $this->PromotionalCode = $PromotionalCode;
      $this->PromotionalCodeApplied = $PromotionalCodeApplied;
      $this->TourCode = $TourCode;
      $this->TourCodeApplied = $TourCodeApplied;
      $this->RateGuaranteeType = $RateGuaranteeType;
      $this->RequiredPayment = $RequiredPayment;
      $this->DropOffChargesIncluded = $DropOffChargesIncluded;
      $this->CorporateRate = $CorporateRate;
      $this->AdvancedBooking = $AdvancedBooking;
      $this->RentalRestriction = $RentalRestriction;
      $this->FlightRestriction = $FlightRestriction;
      $this->CardNumber = $CardNumber;
      $this->CardNumberApplied = $CardNumberApplied;
      $this->RateQualifierInd = $RateQualifierInd;
    }

    /**
     * @return SupplierRate
     */
    public function getSupplierRate()
    {
      return $this->SupplierRate;
    }

    /**
     * @param SupplierRate $SupplierRate
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setSupplierRate($SupplierRate)
    {
      $this->SupplierRate = $SupplierRate;
      return $this;
    }

    /**
     * @return typeRateVariance
     */
    public function getRateVariance()
    {
      return $this->RateVariance;
    }

    /**
     * @param typeRateVariance $RateVariance
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateVariance($RateVariance)
    {
      $this->RateVariance = $RateVariance;
      return $this;
    }

    /**
     * @return typeVehicleRates
     */
    public function getApproximateRate()
    {
      return $this->ApproximateRate;
    }

    /**
     * @param typeVehicleRates $ApproximateRate
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setApproximateRate($ApproximateRate)
    {
      $this->ApproximateRate = $ApproximateRate;
      return $this;
    }

    /**
     * @return typeVehicleRateDescription[]
     */
    public function getVehicleRateDescription()
    {
      return $this->VehicleRateDescription;
    }

    /**
     * @param typeVehicleRateDescription[] $VehicleRateDescription
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setVehicleRateDescription(array $VehicleRateDescription = null)
    {
      $this->VehicleRateDescription = $VehicleRateDescription;
      return $this;
    }

    /**
     * @return typeRateHostIndicator
     */
    public function getRateHostIndicator()
    {
      return $this->RateHostIndicator;
    }

    /**
     * @param typeRateHostIndicator $RateHostIndicator
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateHostIndicator($RateHostIndicator)
    {
      $this->RateHostIndicator = $RateHostIndicator;
      return $this;
    }

    /**
     * @return typeRateInfo
     */
    public function getHourlyLateCharge()
    {
      return $this->HourlyLateCharge;
    }

    /**
     * @param typeRateInfo $HourlyLateCharge
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setHourlyLateCharge($HourlyLateCharge)
    {
      $this->HourlyLateCharge = $HourlyLateCharge;
      return $this;
    }

    /**
     * @return typeRateInfo
     */
    public function getDailyLateCharge()
    {
      return $this->DailyLateCharge;
    }

    /**
     * @param typeRateInfo $DailyLateCharge
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setDailyLateCharge($DailyLateCharge)
    {
      $this->DailyLateCharge = $DailyLateCharge;
      return $this;
    }

    /**
     * @return PricedEquip
     */
    public function getPricedEquip()
    {
      return $this->PricedEquip;
    }

    /**
     * @param PricedEquip $PricedEquip
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setPricedEquip($PricedEquip)
    {
      $this->PricedEquip = $PricedEquip;
      return $this;
    }

    /**
     * @return RateInclusions
     */
    public function getRateInclusions()
    {
      return $this->RateInclusions;
    }

    /**
     * @param RateInclusions $RateInclusions
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateInclusions($RateInclusions)
    {
      $this->RateInclusions = $RateInclusions;
      return $this;
    }

    /**
     * @return typeRateInfo
     */
    public function getWeeklyLateCharge()
    {
      return $this->WeeklyLateCharge;
    }

    /**
     * @param typeRateInfo $WeeklyLateCharge
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setWeeklyLateCharge($WeeklyLateCharge)
    {
      $this->WeeklyLateCharge = $WeeklyLateCharge;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintText()
    {
      return $this->PrintText;
    }

    /**
     * @param string $PrintText
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setPrintText($PrintText)
    {
      $this->PrintText = $PrintText;
      return $this;
    }

    /**
     * @return typeRateTimePeriod
     */
    public function getRatePeriod()
    {
      return $this->RatePeriod;
    }

    /**
     * @param typeRateTimePeriod $RatePeriod
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRatePeriod($RatePeriod)
    {
      $this->RatePeriod = $RatePeriod;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPeriods()
    {
      return $this->NumberOfPeriods;
    }

    /**
     * @param int $NumberOfPeriods
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setNumberOfPeriods($NumberOfPeriods)
    {
      $this->NumberOfPeriods = $NumberOfPeriods;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnlimitedMileage()
    {
      return $this->UnlimitedMileage;
    }

    /**
     * @param boolean $UnlimitedMileage
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setUnlimitedMileage($UnlimitedMileage)
    {
      $this->UnlimitedMileage = $UnlimitedMileage;
      return $this;
    }

    /**
     * @return int
     */
    public function getMileageAllowance()
    {
      return $this->MileageAllowance;
    }

    /**
     * @param int $MileageAllowance
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setMileageAllowance($MileageAllowance)
    {
      $this->MileageAllowance = $MileageAllowance;
      return $this;
    }

    /**
     * @return typeDistance
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param typeDistance $Units
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateSource()
    {
      return $this->RateSource;
    }

    /**
     * @param string $RateSource
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateSource($RateSource)
    {
      $this->RateSource = $RateSource;
      return $this;
    }

    /**
     * @return typeRateAvailability
     */
    public function getRateAvailability()
    {
      return $this->RateAvailability;
    }

    /**
     * @param typeRateAvailability $RateAvailability
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateAvailability($RateAvailability)
    {
      $this->RateAvailability = $RateAvailability;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRequiredCharges()
    {
      return $this->RequiredCharges;
    }

    /**
     * @param typeMoney $RequiredCharges
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRequiredCharges($RequiredCharges)
    {
      $this->RequiredCharges = $RequiredCharges;
      return $this;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getRequestedRateCodeApplied()
    {
      return $this->RequestedRateCodeApplied;
    }

    /**
     * @param typeTrinary $RequestedRateCodeApplied
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRequestedRateCodeApplied($RequestedRateCodeApplied)
    {
      $this->RequestedRateCodeApplied = $RequestedRateCodeApplied;
      return $this;
    }

    /**
     * @return typeRateCategory
     */
    public function getRateCategory()
    {
      return $this->RateCategory;
    }

    /**
     * @param typeRateCategory $RateCategory
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateCategory($RateCategory)
    {
      $this->RateCategory = $RateCategory;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setDiscountNumber($DiscountNumber)
    {
      $this->DiscountNumber = $DiscountNumber;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getDiscountNumberApplied()
    {
      return $this->DiscountNumberApplied;
    }

    /**
     * @param typeTrinary $DiscountNumberApplied
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setDiscountNumberApplied($DiscountNumberApplied)
    {
      $this->DiscountNumberApplied = $DiscountNumberApplied;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRateGuaranteed()
    {
      return $this->RateGuaranteed;
    }

    /**
     * @param boolean $RateGuaranteed
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateGuaranteed($RateGuaranteed)
    {
      $this->RateGuaranteed = $RateGuaranteed;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateCodePeriod()
    {
      return $this->RateCodePeriod;
    }

    /**
     * @param string $RateCodePeriod
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateCodePeriod($RateCodePeriod)
    {
      $this->RateCodePeriod = $RateCodePeriod;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setPromotionalCode($PromotionalCode)
    {
      $this->PromotionalCode = $PromotionalCode;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getPromotionalCodeApplied()
    {
      return $this->PromotionalCodeApplied;
    }

    /**
     * @param typeTrinary $PromotionalCodeApplied
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setPromotionalCodeApplied($PromotionalCodeApplied)
    {
      $this->PromotionalCodeApplied = $PromotionalCodeApplied;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getTourCodeApplied()
    {
      return $this->TourCodeApplied;
    }

    /**
     * @param typeTrinary $TourCodeApplied
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setTourCodeApplied($TourCodeApplied)
    {
      $this->TourCodeApplied = $TourCodeApplied;
      return $this;
    }

    /**
     * @return typeRateGuarantee
     */
    public function getRateGuaranteeType()
    {
      return $this->RateGuaranteeType;
    }

    /**
     * @param typeRateGuarantee $RateGuaranteeType
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateGuaranteeType($RateGuaranteeType)
    {
      $this->RateGuaranteeType = $RateGuaranteeType;
      return $this;
    }

    /**
     * @return anonymous549
     */
    public function getRequiredPayment()
    {
      return $this->RequiredPayment;
    }

    /**
     * @param anonymous549 $RequiredPayment
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRequiredPayment($RequiredPayment)
    {
      $this->RequiredPayment = $RequiredPayment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDropOffChargesIncluded()
    {
      return $this->DropOffChargesIncluded;
    }

    /**
     * @param boolean $DropOffChargesIncluded
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setDropOffChargesIncluded($DropOffChargesIncluded)
    {
      $this->DropOffChargesIncluded = $DropOffChargesIncluded;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorporateRate()
    {
      return $this->CorporateRate;
    }

    /**
     * @param boolean $CorporateRate
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setCorporateRate($CorporateRate)
    {
      $this->CorporateRate = $CorporateRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdvancedBooking()
    {
      return $this->AdvancedBooking;
    }

    /**
     * @param string $AdvancedBooking
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setAdvancedBooking($AdvancedBooking)
    {
      $this->AdvancedBooking = $AdvancedBooking;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRentalRestriction()
    {
      return $this->RentalRestriction;
    }

    /**
     * @param boolean $RentalRestriction
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRentalRestriction($RentalRestriction)
    {
      $this->RentalRestriction = $RentalRestriction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlightRestriction()
    {
      return $this->FlightRestriction;
    }

    /**
     * @param boolean $FlightRestriction
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setFlightRestriction($FlightRestriction)
    {
      $this->FlightRestriction = $FlightRestriction;
      return $this;
    }

    /**
     * @return typeCardNumber
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param typeCardNumber $CardNumber
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getCardNumberApplied()
    {
      return $this->CardNumberApplied;
    }

    /**
     * @param typeTrinary $CardNumberApplied
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setCardNumberApplied($CardNumberApplied)
    {
      $this->CardNumberApplied = $CardNumberApplied;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateQualifierInd()
    {
      return $this->RateQualifierInd;
    }

    /**
     * @param int $RateQualifierInd
     * @return \FilippoToso\Travelport\GDSQueue\VehicleRate
     */
    public function setRateQualifierInd($RateQualifierInd)
    {
      $this->RateQualifierInd = $RateQualifierInd;
      return $this;
    }

}
