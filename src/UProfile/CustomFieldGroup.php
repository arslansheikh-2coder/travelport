<?php

namespace FilippoToso\Travelport\UProfile;

class CustomFieldGroup
{

    /**
     * @var CustomField $CustomField
     */
    public $CustomField = null;

    /**
     * @var typeID $ID
     */
    public $ID = null;

    /**
     * @var typeFieldName $Name
     */
    public $Name = null;

    /**
     * @var int $DisplayOrder
     */
    public $DisplayOrder = null;

    /**
     * @var StringLength1to255 $Description
     */
    public $Description = null;

    /**
     * @var string $Label
     */
    public $Label = null;

    /**
     * @var boolean $Inheritable
     */
    public $Inheritable = null;

    /**
     * @var boolean $Hide
     */
    public $Hide = null;

    /**
     * @var int $MinOccurs
     */
    public $MinOccurs = null;

    /**
     * @var int $MaxOccurs
     */
    public $MaxOccurs = null;

    /**
     * @var int $MinOccursOverride
     */
    public $MinOccursOverride = null;

    /**
     * @var int $MaxOccursOverride
     */
    public $MaxOccursOverride = null;

    /**
     * @var boolean $InheritableControlInd
     */
    public $InheritableControlInd = null;

    /**
     * @var boolean $ReadOnly
     */
    public $ReadOnly = null;

    /**
     * @var boolean $Overriden
     */
    public $Overriden = null;

    /**
     * @param CustomField $CustomField
     * @param typeID $ID
     * @param typeFieldName $Name
     * @param int $DisplayOrder
     * @param StringLength1to255 $Description
     * @param string $Label
     * @param boolean $Inheritable
     * @param boolean $Hide
     * @param int $MinOccurs
     * @param int $MaxOccurs
     * @param int $MinOccursOverride
     * @param int $MaxOccursOverride
     * @param boolean $InheritableControlInd
     * @param boolean $ReadOnly
     * @param boolean $Overriden
     */
    public function __construct($CustomField = null, $ID = null, $Name = null, $DisplayOrder = null, $Description = null, $Label = null, $Inheritable = null, $Hide = null, $MinOccurs = null, $MaxOccurs = null, $MinOccursOverride = null, $MaxOccursOverride = null, $InheritableControlInd = null, $ReadOnly = null, $Overriden = null)
    {
      $this->CustomField = $CustomField;
      $this->ID = $ID;
      $this->Name = $Name;
      $this->DisplayOrder = $DisplayOrder;
      $this->Description = $Description;
      $this->Label = $Label;
      $this->Inheritable = $Inheritable;
      $this->Hide = $Hide;
      $this->MinOccurs = $MinOccurs;
      $this->MaxOccurs = $MaxOccurs;
      $this->MinOccursOverride = $MinOccursOverride;
      $this->MaxOccursOverride = $MaxOccursOverride;
      $this->InheritableControlInd = $InheritableControlInd;
      $this->ReadOnly = $ReadOnly;
      $this->Overriden = $Overriden;
    }

    /**
     * @return CustomField
     */
    public function getCustomField()
    {
      return $this->CustomField;
    }

    /**
     * @param CustomField $CustomField
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setCustomField($CustomField)
    {
      $this->CustomField = $CustomField;
      return $this;
    }

    /**
     * @return typeID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeID $ID
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return typeFieldName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeFieldName $Name
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to255 $Description
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritable()
    {
      return $this->Inheritable;
    }

    /**
     * @param boolean $Inheritable
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setInheritable($Inheritable)
    {
      $this->Inheritable = $Inheritable;
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
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setHide($Hide)
    {
      $this->Hide = $Hide;
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
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setMinOccurs($MinOccurs)
    {
      $this->MinOccurs = $MinOccurs;
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
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
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
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
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
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setMaxOccursOverride($MaxOccursOverride)
    {
      $this->MaxOccursOverride = $MaxOccursOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritableControlInd()
    {
      return $this->InheritableControlInd;
    }

    /**
     * @param boolean $InheritableControlInd
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setInheritableControlInd($InheritableControlInd)
    {
      $this->InheritableControlInd = $InheritableControlInd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReadOnly()
    {
      return $this->ReadOnly;
    }

    /**
     * @param boolean $ReadOnly
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setReadOnly($ReadOnly)
    {
      $this->ReadOnly = $ReadOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverriden()
    {
      return $this->Overriden;
    }

    /**
     * @param boolean $Overriden
     * @return \FilippoToso\Travelport\UProfile\CustomFieldGroup
     */
    public function setOverriden($Overriden)
    {
      $this->Overriden = $Overriden;
      return $this;
    }

}
