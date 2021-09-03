<?php

namespace FilippoToso\Travelport\UProfile;

class CreateFieldGroup
{

    /**
     * @var CreateField $CreateField
     */
    public $CreateField = null;

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
     * @param CreateField $CreateField
     * @param typeFieldName $Name
     * @param StringLength1to255 $Description
     * @param boolean $public
     * @param boolean $Inheritable
     * @param int $MinOccurs
     * @param int $MaxOccurs
     */
    public function __construct($CreateField = null, $Name = null, $Description = null, $public = null, $Inheritable = null, $MinOccurs = null, $MaxOccurs = null)
    {
      $this->CreateField = $CreateField;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->public = $public;
      $this->Inheritable = $Inheritable;
      $this->MinOccurs = $MinOccurs;
      $this->MaxOccurs = $MaxOccurs;
    }

    /**
     * @return CreateField
     */
    public function getCreateField()
    {
      return $this->CreateField;
    }

    /**
     * @param CreateField $CreateField
     * @return \FilippoToso\Travelport\UProfile\CreateFieldGroup
     */
    public function setCreateField($CreateField)
    {
      $this->CreateField = $CreateField;
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
     * @return \FilippoToso\Travelport\UProfile\CreateFieldGroup
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
     * @return \FilippoToso\Travelport\UProfile\CreateFieldGroup
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
     * @return \FilippoToso\Travelport\UProfile\CreateFieldGroup
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
     * @return \FilippoToso\Travelport\UProfile\CreateFieldGroup
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
     * @return \FilippoToso\Travelport\UProfile\CreateFieldGroup
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
     * @return \FilippoToso\Travelport\UProfile\CreateFieldGroup
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
      return $this;
    }

}
