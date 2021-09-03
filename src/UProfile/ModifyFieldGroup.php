<?php

namespace FilippoToso\Travelport\UProfile;

class ModifyFieldGroup
{

    /**
     * @var ModifyField $ModifyField
     */
    public $ModifyField = null;

    /**
     * @var typeID $ID
     */
    public $ID = null;

    /**
     * @var typeUpdateAction $Action
     */
    public $Action = null;

    /**
     * @var boolean $Force
     */
    public $Force = null;

    /**
     * @var typeFieldName $Name
     */
    public $Name = null;

    /**
     * @var StringLength1to255 $Description
     */
    public $Description = null;

    /**
     * @var boolean $public
     */
    public $public = null;

    /**
     * @var boolean $Inheritable
     */
    public $Inheritable = null;

    /**
     * @var int $MinOccurs
     */
    public $MinOccurs = null;

    /**
     * @var int $MaxOccurs
     */
    public $MaxOccurs = null;

    /**
     * @param ModifyField $ModifyField
     * @param typeID $ID
     * @param typeUpdateAction $Action
     * @param boolean $Force
     * @param typeFieldName $Name
     * @param StringLength1to255 $Description
     * @param boolean $public
     * @param boolean $Inheritable
     * @param int $MinOccurs
     * @param int $MaxOccurs
     */
    public function __construct($ModifyField = null, $ID = null, $Action = null, $Force = null, $Name = null, $Description = null, $public = null, $Inheritable = null, $MinOccurs = null, $MaxOccurs = null)
    {
      $this->ModifyField = $ModifyField;
      $this->ID = $ID;
      $this->Action = $Action;
      $this->Force = $Force;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->public = $public;
      $this->Inheritable = $Inheritable;
      $this->MinOccurs = $MinOccurs;
      $this->MaxOccurs = $MaxOccurs;
    }

    /**
     * @return ModifyField
     */
    public function getModifyField()
    {
      return $this->ModifyField;
    }

    /**
     * @param ModifyField $ModifyField
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
     */
    public function setModifyField($ModifyField)
    {
      $this->ModifyField = $ModifyField;
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
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return typeUpdateAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param typeUpdateAction $Action
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForce()
    {
      return $this->Force;
    }

    /**
     * @param boolean $Force
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
     */
    public function setForce($Force)
    {
      $this->Force = $Force;
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
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getpublic()
    {
      return $this->public;
    }

    /**
     * @param boolean $public
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
     */
    public function setpublic($public)
    {
      $this->public = $public;
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
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
     */
    public function setInheritable($Inheritable)
    {
      $this->Inheritable = $Inheritable;
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
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
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
     * @return \FilippoToso\Travelport\UProfile\ModifyFieldGroup
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
      return $this;
    }

}
