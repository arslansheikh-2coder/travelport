<?php

namespace FilippoToso\Travelport\Rail;

class Commission
{

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var typeMoney $MiscellaneousAmount
     */
    public $MiscellaneousAmount = null;

    /**
     * @var StringLength1to13 $MiscellaneousDescription
     */
    public $MiscellaneousDescription = null;

    /**
     * @param typeMoney $Amount
     * @param typeMoney $MiscellaneousAmount
     * @param StringLength1to13 $MiscellaneousDescription
     */
    public function __construct($Amount = null, $MiscellaneousAmount = null, $MiscellaneousDescription = null)
    {
      $this->Amount = $Amount;
      $this->MiscellaneousAmount = $MiscellaneousAmount;
      $this->MiscellaneousDescription = $MiscellaneousDescription;
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
     * @return \FilippoToso\Travelport\Rail\Commission
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMiscellaneousAmount()
    {
      return $this->MiscellaneousAmount;
    }

    /**
     * @param typeMoney $MiscellaneousAmount
     * @return \FilippoToso\Travelport\Rail\Commission
     */
    public function setMiscellaneousAmount($MiscellaneousAmount)
    {
      $this->MiscellaneousAmount = $MiscellaneousAmount;
      return $this;
    }

    /**
     * @return StringLength1to13
     */
    public function getMiscellaneousDescription()
    {
      return $this->MiscellaneousDescription;
    }

    /**
     * @param StringLength1to13 $MiscellaneousDescription
     * @return \FilippoToso\Travelport\Rail\Commission
     */
    public function setMiscellaneousDescription($MiscellaneousDescription)
    {
      $this->MiscellaneousDescription = $MiscellaneousDescription;
      return $this;
    }

}
