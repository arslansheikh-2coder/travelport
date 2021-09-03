<?php

namespace FilippoToso\Travelport\Air;

class LegPrice
{

    /**
     * @var LegDetail $LegDetail
     */
    public $LegDetail = null;

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
     * @param LegDetail $LegDetail
     * @param typeRef $Key
     * @param typeMoney $TotalPrice
     * @param typeMoney $ApproximateTotalPrice
     */
    public function __construct($LegDetail = null, $Key = null, $TotalPrice = null, $ApproximateTotalPrice = null)
    {
      $this->LegDetail = $LegDetail;
      $this->Key = $Key;
      $this->TotalPrice = $TotalPrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
    }

    /**
     * @return LegDetail
     */
    public function getLegDetail()
    {
      return $this->LegDetail;
    }

    /**
     * @param LegDetail $LegDetail
     * @return \FilippoToso\Travelport\Air\LegPrice
     */
    public function setLegDetail($LegDetail)
    {
      $this->LegDetail = $LegDetail;
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
     * @return \FilippoToso\Travelport\Air\LegPrice
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
     * @return \FilippoToso\Travelport\Air\LegPrice
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
     * @return \FilippoToso\Travelport\Air\LegPrice
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

}
