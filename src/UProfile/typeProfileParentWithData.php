<?php

namespace FilippoToso\Travelport\UProfile;

class typeProfileParentWithData
{

    /**
     * @var BaseInfo $BaseInfo
     */
    public $BaseInfo = null;

    /**
     * @var typeProfileParentWithData $ProfileParent
     */
    public $ProfileParent = null;

    /**
     * @var ProfileData $ProfileData
     */
    public $ProfileData = null;

    /**
     * @var typeProfileID $ProfileID
     */
    public $ProfileID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    public $ProfileType = null;

    /**
     * @var typeEntityName $Name
     */
    public $Name = null;

    /**
     * @var typeProfileEntityStatusWithDelete $Status
     */
    public $Status = null;

    /**
     * @var typeID $HierarchyLevelID
     */
    public $HierarchyLevelID = null;

    /**
     * @var typeVersion $Version
     */
    public $Version = null;

    /**
     * @var typeTemplateID $TemplateID
     */
    public $TemplateID = null;

    /**
     * @var typeVersion $TemplateVersion
     */
    public $TemplateVersion = null;

    /**
     * @param BaseInfo $BaseInfo
     * @param typeProfileParentWithData $ProfileParent
     * @param ProfileData $ProfileData
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     * @param typeEntityName $Name
     * @param typeProfileEntityStatusWithDelete $Status
     * @param typeID $HierarchyLevelID
     * @param typeVersion $Version
     * @param typeTemplateID $TemplateID
     * @param typeVersion $TemplateVersion
     */
    public function __construct($BaseInfo = null, $ProfileParent = null, $ProfileData = null, $ProfileID = null, $ProfileType = null, $Name = null, $Status = null, $HierarchyLevelID = null, $Version = null, $TemplateID = null, $TemplateVersion = null)
    {
      $this->BaseInfo = $BaseInfo;
      $this->ProfileParent = $ProfileParent;
      $this->ProfileData = $ProfileData;
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
      $this->Name = $Name;
      $this->Status = $Status;
      $this->HierarchyLevelID = $HierarchyLevelID;
      $this->Version = $Version;
      $this->TemplateID = $TemplateID;
      $this->TemplateVersion = $TemplateVersion;
    }

    /**
     * @return BaseInfo
     */
    public function getBaseInfo()
    {
      return $this->BaseInfo;
    }

    /**
     * @param BaseInfo $BaseInfo
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setBaseInfo($BaseInfo)
    {
      $this->BaseInfo = $BaseInfo;
      return $this;
    }

    /**
     * @return typeProfileParentWithData
     */
    public function getProfileParent()
    {
      return $this->ProfileParent;
    }

    /**
     * @param typeProfileParentWithData $ProfileParent
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setProfileParent($ProfileParent)
    {
      $this->ProfileParent = $ProfileParent;
      return $this;
    }

    /**
     * @return ProfileData
     */
    public function getProfileData()
    {
      return $this->ProfileData;
    }

    /**
     * @param ProfileData $ProfileData
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setProfileData($ProfileData)
    {
      $this->ProfileData = $ProfileData;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeProfileType $ProfileType
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

    /**
     * @return typeEntityName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeEntityName $Name
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeProfileEntityStatusWithDelete
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeProfileEntityStatusWithDelete $Status
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typeID
     */
    public function getHierarchyLevelID()
    {
      return $this->HierarchyLevelID;
    }

    /**
     * @param typeID $HierarchyLevelID
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setHierarchyLevelID($HierarchyLevelID)
    {
      $this->HierarchyLevelID = $HierarchyLevelID;
      return $this;
    }

    /**
     * @return typeVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeVersion $Version
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return typeTemplateID
     */
    public function getTemplateID()
    {
      return $this->TemplateID;
    }

    /**
     * @param typeTemplateID $TemplateID
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setTemplateID($TemplateID)
    {
      $this->TemplateID = $TemplateID;
      return $this;
    }

    /**
     * @return typeVersion
     */
    public function getTemplateVersion()
    {
      return $this->TemplateVersion;
    }

    /**
     * @param typeVersion $TemplateVersion
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentWithData
     */
    public function setTemplateVersion($TemplateVersion)
    {
      $this->TemplateVersion = $TemplateVersion;
      return $this;
    }

}
