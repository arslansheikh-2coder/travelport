<?php

namespace FilippoToso\Travelport\UProfile;

class FixedFieldUpdate
{

    /**
     * @var typeFieldID $ID
     */
    public $ID = null;

    /**
     * @var string $Label
     */
    public $Label = null;

    /**
     * @var int $DisplayOrder
     */
    public $DisplayOrder = null;

    /**
     * @var boolean $Hide
     */
    public $Hide = null;

    /**
     * @var boolean $SearchOption
     */
    public $SearchOption = null;

    /**
     * @var int $SearchOptionDisplayOrder
     */
    public $SearchOptionDisplayOrder = null;

    /**
     * @var int $MinOccursOverride
     */
    public $MinOccursOverride = null;

    /**
     * @var int $MaxOccursOverride
     */
    public $MaxOccursOverride = null;

    /**
     * @var int $MaxOccurs
     */
    public $MaxOccurs = null;

    /**
     * @var int $MinOccurs
     */
    public $MinOccurs = null;

    /**
     * @param typeFieldID $ID
     * @param string $Label
     * @param int $DisplayOrder
     * @param boolean $Hide
     * @param boolean $SearchOption
     * @param int $SearchOptionDisplayOrder
     * @param int $MinOccursOverride
     * @param int $MaxOccursOverride
     * @param int $MaxOccurs
     * @param int $MinOccurs
     */
    public function __construct($ID = null, $Label = null, $DisplayOrder = null, $Hide = null, $SearchOption = null, $SearchOptionDisplayOrder = null, $MinOccursOverride = null, $MaxOccursOverride = null, $MaxOccurs = null, $MinOccurs = null)
    {
      $this->ID = $ID;
      $this->Label = $Label;
      $this->DisplayOrder = $DisplayOrder;
      $this->Hide = $Hide;
      $this->SearchOption = $SearchOption;
      $this->SearchOptionDisplayOrder = $SearchOptionDisplayOrder;
      $this->MinOccursOverride = $MinOccursOverride;
      $this->MaxOccursOverride = $MaxOccursOverride;
      $this->MaxOccurs = $MaxOccurs;
      $this->MinOccurs = $MinOccurs;
    }

    /**
     * @return typeFieldID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeFieldID $ID
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
      return $this->DisplayOrder;
    }

    /**
     * @param int $DisplayOrder
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHide()
    {
      return $this->Hide;
    }

    /**
     * @param boolean $Hide
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setHide($Hide)
    {
      $this->Hide = $Hide;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchOption()
    {
      return $this->SearchOption;
    }

    /**
     * @param boolean $SearchOption
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setSearchOption($SearchOption)
    {
      $this->SearchOption = $SearchOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchOptionDisplayOrder()
    {
      return $this->SearchOptionDisplayOrder;
    }

    /**
     * @param int $SearchOptionDisplayOrder
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setSearchOptionDisplayOrder($SearchOptionDisplayOrder)
    {
      $this->SearchOptionDisplayOrder = $SearchOptionDisplayOrder;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinOccursOverride()
    {
      return $this->MinOccursOverride;
    }

    /**
     * @param int $MinOccursOverride
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setMinOccursOverride($MinOccursOverride)
    {
      $this->MinOccursOverride = $MinOccursOverride;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOccursOverride()
    {
      return $this->MaxOccursOverride;
    }

    /**
     * @param int $MaxOccursOverride
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setMaxOccursOverride($MaxOccursOverride)
    {
      $this->MaxOccursOverride = $MaxOccursOverride;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOccurs()
    {
      return $this->MaxOccurs;
    }

    /**
     * @param int $MaxOccurs
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinOccurs()
    {
      return $this->MinOccurs;
    }

    /**
     * @param int $MinOccurs
     * @return \FilippoToso\Travelport\UProfile\FixedFieldUpdate
     */
    public function setMinOccurs($MinOccurs)
    {
      $this->MinOccurs = $MinOccurs;
      return $this;
    }

}
