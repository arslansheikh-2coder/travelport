<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ExemptOBFee
{

    /**
     * @var typeSubCode[] $SubCode
     */
    public $SubCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeSubCode[]
     */
    public function getSubCode()
    {
      return $this->SubCode;
    }

    /**
     * @param typeSubCode[] $SubCode
     * @return \FilippoToso\Travelport\UniversalRecord\ExemptOBFee
     */
    public function setSubCode(array $SubCode = null)
    {
      $this->SubCode = $SubCode;
      return $this;
    }

}
