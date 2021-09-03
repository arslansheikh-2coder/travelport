<?php

namespace FilippoToso\Travelport\UProfile;

class PolicyReference extends typeKeyElement
{

    /**
     * @var StringLength1to128 $Type
     */
    public $Type = null;

    /**
     * @var StringLength1to255 $Value
     */
    public $Value = null;

    /**
     * @var StringLength1to255 $Desc
     */
    public $Desc = null;

    /**
     * @var typeProfileID $ControllingPolicyID
     */
    public $ControllingPolicyID = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    public $PriorityOrder = null;

    /**
     * @param typeRef $Key
     * @param StringLength1to128 $Type
     * @param StringLength1to255 $Value
     * @param StringLength1to255 $Desc
     * @param typeProfileID $ControllingPolicyID
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $Type = null, $Value = null, $Desc = null, $ControllingPolicyID = null, $PriorityOrder = null)
    {
      parent::__construct($Key);
      $this->Type = $Type;
      $this->Value = $Value;
      $this->Desc = $Desc;
      $this->ControllingPolicyID = $ControllingPolicyID;
      $this->PriorityOrder = $PriorityOrder;
    }

    /**
     * @return StringLength1to128
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param StringLength1to128 $Type
     * @return \FilippoToso\Travelport\UProfile\PolicyReference
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param StringLength1to255 $Value
     * @return \FilippoToso\Travelport\UProfile\PolicyReference
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDesc()
    {
      return $this->Desc;
    }

    /**
     * @param StringLength1to255 $Desc
     * @return \FilippoToso\Travelport\UProfile\PolicyReference
     */
    public function setDesc($Desc)
    {
      $this->Desc = $Desc;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getControllingPolicyID()
    {
      return $this->ControllingPolicyID;
    }

    /**
     * @param typeProfileID $ControllingPolicyID
     * @return \FilippoToso\Travelport\UProfile\PolicyReference
     */
    public function setControllingPolicyID($ControllingPolicyID)
    {
      $this->ControllingPolicyID = $ControllingPolicyID;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\PolicyReference
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
