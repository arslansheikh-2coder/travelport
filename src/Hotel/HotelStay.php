<?php

namespace FilippoToso\Travelport\Hotel;

class HotelStay
{

    /**
     * @var typeDate $CheckinDate
     */
    public $CheckinDate = null;

    /**
     * @var typeDate $CheckoutDate
     */
    public $CheckoutDate = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param typeDate $CheckinDate
     * @param typeDate $CheckoutDate
     * @param typeRef $Key
     */
    public function __construct($CheckinDate = null, $CheckoutDate = null, $Key = null)
    {
      $this->CheckinDate = $CheckinDate;
      $this->CheckoutDate = $CheckoutDate;
      $this->Key = $Key;
    }

    /**
     * @return typeDate
     */
    public function getCheckinDate()
    {
      return $this->CheckinDate;
    }

    /**
     * @param typeDate $CheckinDate
     * @return \FilippoToso\Travelport\Hotel\HotelStay
     */
    public function setCheckinDate($CheckinDate)
    {
      $this->CheckinDate = $CheckinDate;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getCheckoutDate()
    {
      return $this->CheckoutDate;
    }

    /**
     * @param typeDate $CheckoutDate
     * @return \FilippoToso\Travelport\Hotel\HotelStay
     */
    public function setCheckoutDate($CheckoutDate)
    {
      $this->CheckoutDate = $CheckoutDate;
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
     * @return \FilippoToso\Travelport\Hotel\HotelStay
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
