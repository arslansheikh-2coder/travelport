<?php

namespace FilippoToso\Travelport\GDSQueue;

class FareStatus
{

    /**
     * @var FareStatusFailureInfo $FareStatusFailureInfo
     */
    public $FareStatusFailureInfo = null;

    /**
     * @var typeFareStatusCode $Code
     */
    public $Code = null;

    /**
     * @param FareStatusFailureInfo $FareStatusFailureInfo
     * @param typeFareStatusCode $Code
     */
    public function __construct($FareStatusFailureInfo = null, $Code = null)
    {
      $this->FareStatusFailureInfo = $FareStatusFailureInfo;
      $this->Code = $Code;
    }

    /**
     * @return FareStatusFailureInfo
     */
    public function getFareStatusFailureInfo()
    {
      return $this->FareStatusFailureInfo;
    }

    /**
     * @param FareStatusFailureInfo $FareStatusFailureInfo
     * @return \FilippoToso\Travelport\GDSQueue\FareStatus
     */
    public function setFareStatusFailureInfo($FareStatusFailureInfo)
    {
      $this->FareStatusFailureInfo = $FareStatusFailureInfo;
      return $this;
    }

    /**
     * @return typeFareStatusCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeFareStatusCode $Code
     * @return \FilippoToso\Travelport\GDSQueue\FareStatus
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
