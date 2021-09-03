<?php

namespace FilippoToso\Travelport\Air;

class typeFormOfPaymentPNRReference
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var boolean $ProviderReservationLevel
     */
    public $ProviderReservationLevel = null;

    /**
     * @param typeRef $Key
     * @param boolean $ProviderReservationLevel
     */
    public function __construct($Key = null, $ProviderReservationLevel = null)
    {
      $this->Key = $Key;
      $this->ProviderReservationLevel = $ProviderReservationLevel;
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
     * @return \FilippoToso\Travelport\Air\typeFormOfPaymentPNRReference
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProviderReservationLevel()
    {
      return $this->ProviderReservationLevel;
    }

    /**
     * @param boolean $ProviderReservationLevel
     * @return \FilippoToso\Travelport\Air\typeFormOfPaymentPNRReference
     */
    public function setProviderReservationLevel($ProviderReservationLevel)
    {
      $this->ProviderReservationLevel = $ProviderReservationLevel;
      return $this;
    }

}
