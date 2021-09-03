<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ManualFareAdjustment
{

    /**
     * @var typeAdjustmentTarget $AppliedOn
     */
    public $AppliedOn = null;

    /**
     * @var typeAdjustmentType $AdjustmentType
     */
    public $AdjustmentType = null;

    /**
     * @var float $Value
     */
    public $Value = null;

    /**
     * @var typeRef $PassengerRef
     */
    public $PassengerRef = null;

    /**
     * @var typeTicketDesignator $TicketDesignator
     */
    public $TicketDesignator = null;

    /**
     * @var typeFareTypeCode $FareType
     */
    public $FareType = null;

    /**
     * @param typeAdjustmentTarget $AppliedOn
     * @param typeAdjustmentType $AdjustmentType
     * @param float $Value
     * @param typeRef $PassengerRef
     * @param typeTicketDesignator $TicketDesignator
     * @param typeFareTypeCode $FareType
     */
    public function __construct($AppliedOn = null, $AdjustmentType = null, $Value = null, $PassengerRef = null, $TicketDesignator = null, $FareType = null)
    {
      $this->AppliedOn = $AppliedOn;
      $this->AdjustmentType = $AdjustmentType;
      $this->Value = $Value;
      $this->PassengerRef = $PassengerRef;
      $this->TicketDesignator = $TicketDesignator;
      $this->FareType = $FareType;
    }

    /**
     * @return typeAdjustmentTarget
     */
    public function getAppliedOn()
    {
      return $this->AppliedOn;
    }

    /**
     * @param typeAdjustmentTarget $AppliedOn
     * @return \FilippoToso\Travelport\UniversalRecord\ManualFareAdjustment
     */
    public function setAppliedOn($AppliedOn)
    {
      $this->AppliedOn = $AppliedOn;
      return $this;
    }

    /**
     * @return typeAdjustmentType
     */
    public function getAdjustmentType()
    {
      return $this->AdjustmentType;
    }

    /**
     * @param typeAdjustmentType $AdjustmentType
     * @return \FilippoToso\Travelport\UniversalRecord\ManualFareAdjustment
     */
    public function setAdjustmentType($AdjustmentType)
    {
      $this->AdjustmentType = $AdjustmentType;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \FilippoToso\Travelport\UniversalRecord\ManualFareAdjustment
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassengerRef()
    {
      return $this->PassengerRef;
    }

    /**
     * @param typeRef $PassengerRef
     * @return \FilippoToso\Travelport\UniversalRecord\ManualFareAdjustment
     */
    public function setPassengerRef($PassengerRef)
    {
      $this->PassengerRef = $PassengerRef;
      return $this;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param typeTicketDesignator $TicketDesignator
     * @return \FilippoToso\Travelport\UniversalRecord\ManualFareAdjustment
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

    /**
     * @return typeFareTypeCode
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param typeFareTypeCode $FareType
     * @return \FilippoToso\Travelport\UniversalRecord\ManualFareAdjustment
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

}
