<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CustomerReceiptInfo
{

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var typeRef $EmailRef
     */
    public $EmailRef = null;

    /**
     * @param typeRef $BookingTravelerRef
     * @param typeRef $EmailRef
     */
    public function __construct($BookingTravelerRef = null, $EmailRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->EmailRef = $EmailRef;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\CustomerReceiptInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getEmailRef()
    {
      return $this->EmailRef;
    }

    /**
     * @param typeRef $EmailRef
     * @return \FilippoToso\Travelport\UniversalRecord\CustomerReceiptInfo
     */
    public function setEmailRef($EmailRef)
    {
      $this->EmailRef = $EmailRef;
      return $this;
    }

}
