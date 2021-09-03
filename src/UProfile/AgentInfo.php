<?php

namespace FilippoToso\Travelport\UProfile;

class AgentInfo extends typeProfileInfo
{

    /**
     * @var Address $Address
     */
    public $Address = null;

    /**
     * @var Phone $Phone
     */
    public $Phone = null;

    /**
     * @var ElectronicAddress $ElectronicAddress
     */
    public $ElectronicAddress = null;

    /**
     * @var ExternalIdentifier $ExternalIdentifier
     */
    public $ExternalIdentifier = null;

    /**
     * @var StringLength1to128 $UserName
     */
    public $UserName = null;

    /**
     * @var StringLength1to255 $OccupationalTitle
     */
    public $OccupationalTitle = null;

    /**
     * @var StringLength1to128 $Title
     */
    public $Title = null;

    /**
     * @var StringLength1to128 $Nickname
     */
    public $Nickname = null;

    /**
     * @var StringLength1to128 $GivenName
     */
    public $GivenName = null;

    /**
     * @var StringLength1to128 $OtherName
     */
    public $OtherName = null;

    /**
     * @var StringLength1to128 $Surname
     */
    public $Surname = null;

    /**
     * @var StringLength1to128 $Suffix
     */
    public $Suffix = null;

    /**
     * @var typeProfileID $DefaultBranchID
     */
    public $DefaultBranchID = null;

    /**
     * @var typeProvisioningCode $DefaultBranchCode
     */
    public $DefaultBranchCode = null;

    /**
     * @var typeAlternateAgentID $AlternateAgentID
     */
    public $AlternateAgentID = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param Address $Address
     * @param Phone $Phone
     * @param ElectronicAddress $ElectronicAddress
     * @param ExternalIdentifier $ExternalIdentifier
     * @param StringLength1to128 $UserName
     * @param StringLength1to255 $OccupationalTitle
     * @param StringLength1to128 $Title
     * @param StringLength1to128 $Nickname
     * @param StringLength1to128 $GivenName
     * @param StringLength1to128 $OtherName
     * @param StringLength1to128 $Surname
     * @param StringLength1to128 $Suffix
     * @param typeProfileID $DefaultBranchID
     * @param typeProvisioningCode $DefaultBranchCode
     * @param typeAlternateAgentID $AlternateAgentID
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $Address = null, $Phone = null, $ElectronicAddress = null, $ExternalIdentifier = null, $UserName = null, $OccupationalTitle = null, $Title = null, $Nickname = null, $GivenName = null, $OtherName = null, $Surname = null, $Suffix = null, $DefaultBranchID = null, $DefaultBranchCode = null, $AlternateAgentID = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->Address = $Address;
      $this->Phone = $Phone;
      $this->ElectronicAddress = $ElectronicAddress;
      $this->ExternalIdentifier = $ExternalIdentifier;
      $this->UserName = $UserName;
      $this->OccupationalTitle = $OccupationalTitle;
      $this->Title = $Title;
      $this->Nickname = $Nickname;
      $this->GivenName = $GivenName;
      $this->OtherName = $OtherName;
      $this->Surname = $Surname;
      $this->Suffix = $Suffix;
      $this->DefaultBranchID = $DefaultBranchID;
      $this->DefaultBranchCode = $DefaultBranchCode;
      $this->AlternateAgentID = $AlternateAgentID;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return Phone
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param Phone $Phone
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return ElectronicAddress
     */
    public function getElectronicAddress()
    {
      return $this->ElectronicAddress;
    }

    /**
     * @param ElectronicAddress $ElectronicAddress
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setElectronicAddress($ElectronicAddress)
    {
      $this->ElectronicAddress = $ElectronicAddress;
      return $this;
    }

    /**
     * @return ExternalIdentifier
     */
    public function getExternalIdentifier()
    {
      return $this->ExternalIdentifier;
    }

    /**
     * @param ExternalIdentifier $ExternalIdentifier
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setExternalIdentifier($ExternalIdentifier)
    {
      $this->ExternalIdentifier = $ExternalIdentifier;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param StringLength1to128 $UserName
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getOccupationalTitle()
    {
      return $this->OccupationalTitle;
    }

    /**
     * @param StringLength1to255 $OccupationalTitle
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setOccupationalTitle($OccupationalTitle)
    {
      $this->OccupationalTitle = $OccupationalTitle;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param StringLength1to128 $Title
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getNickname()
    {
      return $this->Nickname;
    }

    /**
     * @param StringLength1to128 $Nickname
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setNickname($Nickname)
    {
      $this->Nickname = $Nickname;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getGivenName()
    {
      return $this->GivenName;
    }

    /**
     * @param StringLength1to128 $GivenName
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getOtherName()
    {
      return $this->OtherName;
    }

    /**
     * @param StringLength1to128 $OtherName
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setOtherName($OtherName)
    {
      $this->OtherName = $OtherName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param StringLength1to128 $Surname
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSuffix()
    {
      return $this->Suffix;
    }

    /**
     * @param StringLength1to128 $Suffix
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setSuffix($Suffix)
    {
      $this->Suffix = $Suffix;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getDefaultBranchID()
    {
      return $this->DefaultBranchID;
    }

    /**
     * @param typeProfileID $DefaultBranchID
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setDefaultBranchID($DefaultBranchID)
    {
      $this->DefaultBranchID = $DefaultBranchID;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getDefaultBranchCode()
    {
      return $this->DefaultBranchCode;
    }

    /**
     * @param typeProvisioningCode $DefaultBranchCode
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setDefaultBranchCode($DefaultBranchCode)
    {
      $this->DefaultBranchCode = $DefaultBranchCode;
      return $this;
    }

    /**
     * @return typeAlternateAgentID
     */
    public function getAlternateAgentID()
    {
      return $this->AlternateAgentID;
    }

    /**
     * @param typeAlternateAgentID $AlternateAgentID
     * @return \FilippoToso\Travelport\UProfile\AgentInfo
     */
    public function setAlternateAgentID($AlternateAgentID)
    {
      $this->AlternateAgentID = $AlternateAgentID;
      return $this;
    }

}
