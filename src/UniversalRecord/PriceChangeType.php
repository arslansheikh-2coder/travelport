<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PriceChangeType
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var string $Amount
     */
    public $Amount = null;

    /**
     * @var string $Carrier
     */
    public $Carrier = null;

    /**
     * @var string $SegmentRef
     */
    public $SegmentRef = null;

    /**
     * @param string $_
     * @param string $Amount
     * @param string $Carrier
     * @param string $SegmentRef
     */
    public function __construct($_ = null, $Amount = null, $Carrier = null, $SegmentRef = null)
    {
      $this->_ = $_;
      $this->Amount = $Amount;
      $this->Carrier = $Carrier;
      $this->SegmentRef = $SegmentRef;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\UniversalRecord\PriceChangeType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param string $Amount
     * @return \FilippoToso\Travelport\UniversalRecord\PriceChangeType
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \FilippoToso\Travelport\UniversalRecord\PriceChangeType
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param string $SegmentRef
     * @return \FilippoToso\Travelport\UniversalRecord\PriceChangeType
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

}
