<?php

namespace FilippoToso\Travelport\GDSQueue;

class ExpertSolution
{

    /**
     * @var LegPrice $LegPrice
     */
    public $LegPrice = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeMoney $TotalPrice
     */
    public $TotalPrice = null;

    /**
     * @var typeMoney $ApproximateTotalPrice
     */
    public $ApproximateTotalPrice = null;

    /**
     * @var date $CreatedDate
     */
    public $CreatedDate = null;

    /**
     * @param LegPrice $LegPrice
     * @param typeRef $Key
     * @param typeMoney $TotalPrice
     * @param typeMoney $ApproximateTotalPrice
     * @param date $CreatedDate
     */
    public function __construct($LegPrice = null, $Key = null, $TotalPrice = null, $ApproximateTotalPrice = null, $CreatedDate = null)
    {
      $this->LegPrice = $LegPrice;
      $this->Key = $Key;
      $this->TotalPrice = $TotalPrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      $this->CreatedDate = $CreatedDate;
    }

    /**
     * @return LegPrice
     */
    public function getLegPrice()
    {
      return $this->LegPrice;
    }

    /**
     * @param LegPrice $LegPrice
     * @return \FilippoToso\Travelport\GDSQueue\ExpertSolution
     */
    public function setLegPrice($LegPrice)
    {
      $this->LegPrice = $LegPrice;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\GDSQueue\ExpertSolution
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\GDSQueue\ExpertSolution
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotalPrice()
    {
      return $this->ApproximateTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateTotalPrice
     * @return \FilippoToso\Travelport\GDSQueue\ExpertSolution
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

    /**
     * @return date
     */
    public function getCreatedDate()
    {
      return $this->CreatedDate;
    }

    /**
     * @param date $CreatedDate
     * @return \FilippoToso\Travelport\GDSQueue\ExpertSolution
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

}
