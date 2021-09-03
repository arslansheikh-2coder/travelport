<?php

namespace FilippoToso\Travelport\UProfile;

class typeProfileParentHistory
{

    /**
     * @var typeProfileID $ProfileID
     */
    public $ProfileID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    public $ProfileType = null;

    /**
     * @var string $ProfileName
     */
    public $ProfileName = null;

    /**
     * @var typeProvisioningCode $ProvisioningCode
     */
    public $ProvisioningCode = null;

    /**
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     * @param string $ProfileName
     * @param typeProvisioningCode $ProvisioningCode
     */
    public function __construct($ProfileID = null, $ProfileType = null, $ProfileName = null, $ProvisioningCode = null)
    {
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
      $this->ProfileName = $ProfileName;
      $this->ProvisioningCode = $ProvisioningCode;
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
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentHistory
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileName()
    {
      return $this->ProfileName;
    }

    /**
     * @param string $ProfileName
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentHistory
     */
    public function setProfileName($ProfileName)
    {
      $this->ProfileName = $ProfileName;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getProvisioningCode()
    {
      return $this->ProvisioningCode;
    }

    /**
     * @param typeProvisioningCode $ProvisioningCode
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentHistory
     */
    public function setProvisioningCode($ProvisioningCode)
    {
      $this->ProvisioningCode = $ProvisioningCode;
      return $this;
    }

}
