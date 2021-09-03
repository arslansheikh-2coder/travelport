<?php

namespace FilippoToso\Travelport\Hotel;

class AggregatorHotelDetails extends typeHotelDetails
{

    /**
     * @var string $Aggregator
     */
    public $Aggregator = null;

    /**
     * @var string $AggregatorName
     */
    public $AggregatorName = null;

    /**
     * @var string $RulesAndRestriction
     */
    public $RulesAndRestriction = null;

    /**
     * @var string $TermsAndConditions
     */
    public $TermsAndConditions = null;

    /**
     * @var boolean $SupportsPayment
     */
    public $SupportsPayment = null;

    /**
     * @var string $CommissionModel
     */
    public $CommissionModel = null;

    /**
     * @var string $MultiRoomSupport
     */
    public $MultiRoomSupport = null;

    /**
     * @var boolean $SupportsChildren
     */
    public $SupportsChildren = null;

    /**
     * @var int $ChildStartAge
     */
    public $ChildStartAge = null;

    /**
     * @var int $AdultStartAge
     */
    public $AdultStartAge = null;

    /**
     * @var int $MaxChildrenPerRoom
     */
    public $MaxChildrenPerRoom = null;

    /**
     * @var string $PhoneNumber
     */
    public $PhoneNumber = null;

    /**
     * @var string $AreaCode
     */
    public $AreaCode = null;

    /**
     * @var string $CountryCode
     */
    public $CountryCode = null;

    /**
     * @param HotelProperty $HotelProperty
     * @param HotelDetailItem $HotelDetailItem
     * @param HotelRateDetail $HotelRateDetail
     * @param MediaItem $MediaItem
     * @param string $Aggregator
     * @param string $AggregatorName
     * @param string $RulesAndRestriction
     * @param string $TermsAndConditions
     * @param boolean $SupportsPayment
     * @param string $CommissionModel
     * @param string $MultiRoomSupport
     * @param boolean $SupportsChildren
     * @param int $ChildStartAge
     * @param int $AdultStartAge
     * @param int $MaxChildrenPerRoom
     * @param string $PhoneNumber
     * @param string $AreaCode
     * @param string $CountryCode
     */
    public function __construct($HotelProperty = null, $HotelDetailItem = null, $HotelRateDetail = null, $MediaItem = null, $Aggregator = null, $AggregatorName = null, $RulesAndRestriction = null, $TermsAndConditions = null, $SupportsPayment = null, $CommissionModel = null, $MultiRoomSupport = null, $SupportsChildren = null, $ChildStartAge = null, $AdultStartAge = null, $MaxChildrenPerRoom = null, $PhoneNumber = null, $AreaCode = null, $CountryCode = null)
    {
      parent::__construct($HotelProperty, $HotelDetailItem, $HotelRateDetail, $MediaItem);
      $this->Aggregator = $Aggregator;
      $this->AggregatorName = $AggregatorName;
      $this->RulesAndRestriction = $RulesAndRestriction;
      $this->TermsAndConditions = $TermsAndConditions;
      $this->SupportsPayment = $SupportsPayment;
      $this->CommissionModel = $CommissionModel;
      $this->MultiRoomSupport = $MultiRoomSupport;
      $this->SupportsChildren = $SupportsChildren;
      $this->ChildStartAge = $ChildStartAge;
      $this->AdultStartAge = $AdultStartAge;
      $this->MaxChildrenPerRoom = $MaxChildrenPerRoom;
      $this->PhoneNumber = $PhoneNumber;
      $this->AreaCode = $AreaCode;
      $this->CountryCode = $CountryCode;
    }

    /**
     * @return string
     */
    public function getAggregator()
    {
      return $this->Aggregator;
    }

    /**
     * @param string $Aggregator
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setAggregator($Aggregator)
    {
      $this->Aggregator = $Aggregator;
      return $this;
    }

    /**
     * @return string
     */
    public function getAggregatorName()
    {
      return $this->AggregatorName;
    }

    /**
     * @param string $AggregatorName
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setAggregatorName($AggregatorName)
    {
      $this->AggregatorName = $AggregatorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRulesAndRestriction()
    {
      return $this->RulesAndRestriction;
    }

    /**
     * @param string $RulesAndRestriction
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setRulesAndRestriction($RulesAndRestriction)
    {
      $this->RulesAndRestriction = $RulesAndRestriction;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsAndConditions()
    {
      return $this->TermsAndConditions;
    }

    /**
     * @param string $TermsAndConditions
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setTermsAndConditions($TermsAndConditions)
    {
      $this->TermsAndConditions = $TermsAndConditions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSupportsPayment()
    {
      return $this->SupportsPayment;
    }

    /**
     * @param boolean $SupportsPayment
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setSupportsPayment($SupportsPayment)
    {
      $this->SupportsPayment = $SupportsPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommissionModel()
    {
      return $this->CommissionModel;
    }

    /**
     * @param string $CommissionModel
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setCommissionModel($CommissionModel)
    {
      $this->CommissionModel = $CommissionModel;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiRoomSupport()
    {
      return $this->MultiRoomSupport;
    }

    /**
     * @param string $MultiRoomSupport
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setMultiRoomSupport($MultiRoomSupport)
    {
      $this->MultiRoomSupport = $MultiRoomSupport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSupportsChildren()
    {
      return $this->SupportsChildren;
    }

    /**
     * @param boolean $SupportsChildren
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setSupportsChildren($SupportsChildren)
    {
      $this->SupportsChildren = $SupportsChildren;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildStartAge()
    {
      return $this->ChildStartAge;
    }

    /**
     * @param int $ChildStartAge
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setChildStartAge($ChildStartAge)
    {
      $this->ChildStartAge = $ChildStartAge;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdultStartAge()
    {
      return $this->AdultStartAge;
    }

    /**
     * @param int $AdultStartAge
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setAdultStartAge($AdultStartAge)
    {
      $this->AdultStartAge = $AdultStartAge;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxChildrenPerRoom()
    {
      return $this->MaxChildrenPerRoom;
    }

    /**
     * @param int $MaxChildrenPerRoom
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setMaxChildrenPerRoom($MaxChildrenPerRoom)
    {
      $this->MaxChildrenPerRoom = $MaxChildrenPerRoom;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param string $AreaCode
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
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
     * @return \FilippoToso\Travelport\Hotel\AggregatorHotelDetails
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
