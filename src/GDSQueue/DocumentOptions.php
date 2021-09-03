<?php

namespace FilippoToso\Travelport\GDSQueue;

class DocumentOptions
{

    /**
     * @var PassengerReceiptOverride $PassengerReceiptOverride
     */
    public $PassengerReceiptOverride = null;

    /**
     * @var typeOverrideOption[] $OverrideOption
     */
    public $OverrideOption = null;

    /**
     * @var boolean $SuppressItineraryRemarks
     */
    public $SuppressItineraryRemarks = null;

    /**
     * @var boolean $GenerateItinNumbers
     */
    public $GenerateItinNumbers = null;

    /**
     * @param PassengerReceiptOverride $PassengerReceiptOverride
     * @param boolean $SuppressItineraryRemarks
     * @param boolean $GenerateItinNumbers
     */
    public function __construct($PassengerReceiptOverride = null, $SuppressItineraryRemarks = null, $GenerateItinNumbers = null)
    {
      $this->PassengerReceiptOverride = $PassengerReceiptOverride;
      $this->SuppressItineraryRemarks = $SuppressItineraryRemarks;
      $this->GenerateItinNumbers = $GenerateItinNumbers;
    }

    /**
     * @return PassengerReceiptOverride
     */
    public function getPassengerReceiptOverride()
    {
      return $this->PassengerReceiptOverride;
    }

    /**
     * @param PassengerReceiptOverride $PassengerReceiptOverride
     * @return \FilippoToso\Travelport\GDSQueue\DocumentOptions
     */
    public function setPassengerReceiptOverride($PassengerReceiptOverride)
    {
      $this->PassengerReceiptOverride = $PassengerReceiptOverride;
      return $this;
    }

    /**
     * @return typeOverrideOption[]
     */
    public function getOverrideOption()
    {
      return $this->OverrideOption;
    }

    /**
     * @param typeOverrideOption[] $OverrideOption
     * @return \FilippoToso\Travelport\GDSQueue\DocumentOptions
     */
    public function setOverrideOption(array $OverrideOption = null)
    {
      $this->OverrideOption = $OverrideOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressItineraryRemarks()
    {
      return $this->SuppressItineraryRemarks;
    }

    /**
     * @param boolean $SuppressItineraryRemarks
     * @return \FilippoToso\Travelport\GDSQueue\DocumentOptions
     */
    public function setSuppressItineraryRemarks($SuppressItineraryRemarks)
    {
      $this->SuppressItineraryRemarks = $SuppressItineraryRemarks;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenerateItinNumbers()
    {
      return $this->GenerateItinNumbers;
    }

    /**
     * @param boolean $GenerateItinNumbers
     * @return \FilippoToso\Travelport\GDSQueue\DocumentOptions
     */
    public function setGenerateItinNumbers($GenerateItinNumbers)
    {
      $this->GenerateItinNumbers = $GenerateItinNumbers;
      return $this;
    }

}
