<?php

namespace FilippoToso\Travelport\GDSQueue;

class CHGType
{

    /**
     * @var PenFeeType[] $PenFee
     */
    public $PenFee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PenFeeType[]
     */
    public function getPenFee()
    {
      return $this->PenFee;
    }

    /**
     * @param PenFeeType[] $PenFee
     * @return \FilippoToso\Travelport\GDSQueue\CHGType
     */
    public function setPenFee(array $PenFee = null)
    {
      $this->PenFee = $PenFee;
      return $this;
    }

}
