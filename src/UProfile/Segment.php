<?php

namespace FilippoToso\Travelport\UProfile;

class Segment
{

    /**
     * @var SegmentRemark $SegmentRemark
     */
    public $SegmentRemark = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var string $Status
     */
    public $Status = null;

    /**
     * @var boolean $Passive
     */
    public $Passive = null;

    /**
     * @var int $TravelOrder
     */
    public $TravelOrder = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param SegmentRemark $SegmentRemark
     * @param typeRef $Key
     * @param string $Status
     * @param boolean $Passive
     * @param int $TravelOrder
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($SegmentRemark = null, $Key = null, $Status = null, $Passive = null, $TravelOrder = null, $ElStat = null, $KeyOverride = null)
    {
      $this->SegmentRemark = $SegmentRemark;
      $this->Key = $Key;
      $this->Status = $Status;
      $this->Passive = $Passive;
      $this->TravelOrder = $TravelOrder;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return SegmentRemark
     */
    public function getSegmentRemark()
    {
      return $this->SegmentRemark;
    }

    /**
     * @param SegmentRemark $SegmentRemark
     * @return \FilippoToso\Travelport\UProfile\Segment
     */
    public function setSegmentRemark($SegmentRemark)
    {
      $this->SegmentRemark = $SegmentRemark;
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
     * @return \FilippoToso\Travelport\UProfile\Segment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\UProfile\Segment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassive()
    {
      return $this->Passive;
    }

    /**
     * @param boolean $Passive
     * @return \FilippoToso\Travelport\UProfile\Segment
     */
    public function setPassive($Passive)
    {
      $this->Passive = $Passive;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelOrder()
    {
      return $this->TravelOrder;
    }

    /**
     * @param int $TravelOrder
     * @return \FilippoToso\Travelport\UProfile\Segment
     */
    public function setTravelOrder($TravelOrder)
    {
      $this->TravelOrder = $TravelOrder;
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
     * @return \FilippoToso\Travelport\UProfile\Segment
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
     * @return \FilippoToso\Travelport\UProfile\Segment
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
