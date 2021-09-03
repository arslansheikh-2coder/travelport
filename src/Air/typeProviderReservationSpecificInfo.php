<?php

namespace FilippoToso\Travelport\Air;

class typeProviderReservationSpecificInfo
{

    /**
     * @var OperatedBy $OperatedBy
     */
    public $OperatedBy = null;

    /**
     * @var ProviderReservationInfoRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var boolean $ProviderReservationLevel
     */
    public $ProviderReservationLevel = null;

    /**
     * @var boolean $ReservationLevel
     */
    public $ReservationLevel = null;

    /**
     * @param OperatedBy $OperatedBy
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param boolean $ProviderReservationLevel
     * @param boolean $ReservationLevel
     */
    public function __construct($OperatedBy = null, $ProviderReservationInfoRef = null, $ProviderReservationLevel = null, $ReservationLevel = null)
    {
      $this->OperatedBy = $OperatedBy;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->ProviderReservationLevel = $ProviderReservationLevel;
      $this->ReservationLevel = $ReservationLevel;
    }

    /**
     * @return OperatedBy
     */
    public function getOperatedBy()
    {
      return $this->OperatedBy;
    }

    /**
     * @param OperatedBy $OperatedBy
     * @return \FilippoToso\Travelport\Air\typeProviderReservationSpecificInfo
     */
    public function setOperatedBy($OperatedBy)
    {
      $this->OperatedBy = $OperatedBy;
      return $this;
    }

    /**
     * @return ProviderReservationInfoRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Air\typeProviderReservationSpecificInfo
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\Air\typeProviderReservationSpecificInfo
     */
    public function setProviderReservationLevel($ProviderReservationLevel)
    {
      $this->ProviderReservationLevel = $ProviderReservationLevel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReservationLevel()
    {
      return $this->ReservationLevel;
    }

    /**
     * @param boolean $ReservationLevel
     * @return \FilippoToso\Travelport\Air\typeProviderReservationSpecificInfo
     */
    public function setReservationLevel($ReservationLevel)
    {
      $this->ReservationLevel = $ReservationLevel;
      return $this;
    }

}
