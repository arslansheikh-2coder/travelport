<?php

namespace FilippoToso\Travelport\GDSQueue;

class SSRInfo
{

    /**
     * @var SSR $SSR
     */
    public $SSR = null;

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param SSR $SSR
     */
    public function __construct($SSR = null)
    {
      $this->SSR = $SSR;
    }

    /**
     * @return SSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param SSR $SSR
     * @return \FilippoToso\Travelport\GDSQueue\SSRInfo
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return typeRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\SSRInfo
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
