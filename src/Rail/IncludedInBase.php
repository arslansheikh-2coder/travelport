<?php

namespace FilippoToso\Travelport\Rail;

class IncludedInBase
{

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @param typeMoney $Amount
     */
    public function __construct($Amount = null)
    {
      $this->Amount = $Amount;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Rail\IncludedInBase
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
