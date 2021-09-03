<?php

namespace FilippoToso\Travelport\System;

class ReviewBooking
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var anonymous446 $Queue
     */
    public $Queue = null;

    /**
     * @var anonymous447 $QueueCategory
     */
    public $QueueCategory = null;

    /**
     * @var \DateTime $DateTime
     */
    public $DateTime = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    public $PseudoCityCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var anonymous448 $Remarks
     */
    public $Remarks = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param anonymous446 $Queue
     * @param anonymous447 $QueueCategory
     * @param \DateTime $DateTime
     * @param typePCC $PseudoCityCode
     * @param typeProviderCode $ProviderCode
     * @param typeRef $ProviderReservationInfoRef
     * @param anonymous448 $Remarks
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key = null, $Queue = null, $QueueCategory = null, \DateTime $DateTime = null, $PseudoCityCode = null, $ProviderCode = null, $ProviderReservationInfoRef = null, $Remarks = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Key = $Key;
      $this->Queue = $Queue;
      $this->QueueCategory = $QueueCategory;
      $this->DateTime = $DateTime ? $DateTime->format(\DateTime::ATOM) : null;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Remarks = $Remarks;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous446
     */
    public function getQueue()
    {
      return $this->Queue;
    }

    /**
     * @param anonymous446 $Queue
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return anonymous447
     */
    public function getQueueCategory()
    {
      return $this->QueueCategory;
    }

    /**
     * @param anonymous447 $QueueCategory
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setQueueCategory($QueueCategory)
    {
      $this->QueueCategory = $QueueCategory;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
      if ($this->DateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateTime
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setDateTime(\DateTime $DateTime)
    {
      $this->DateTime = $DateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return anonymous448
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param anonymous448 $Remarks
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\System\ReviewBooking
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
