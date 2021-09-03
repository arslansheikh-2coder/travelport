<?php

namespace FilippoToso\Travelport\UProfile;

class BranchCriteria extends typeProfileSearchCriteria
{

    /**
     * @var typeWildcard $Name
     */
    public $Name = null;

    /**
     * @var typeWildcard $IataNumber
     */
    public $IataNumber = null;

    /**
     * @var typeFilterControlAndWorkspace $BranchType
     */
    public $BranchType = null;

    /**
     * @var typeWildcard $PseudoCityCode
     */
    public $PseudoCityCode = null;

    /**
     * @var typeWildcard $BranchCode
     */
    public $BranchCode = null;

    /**
     * @param typeWildcard $AdditionalIdentifier
     * @param typeWildcard $Name
     * @param typeWildcard $IataNumber
     * @param typeFilterControlAndWorkspace $BranchType
     * @param typeWildcard $PseudoCityCode
     * @param typeWildcard $BranchCode
     */
    public function __construct($AdditionalIdentifier = null, $Name = null, $IataNumber = null, $BranchType = null, $PseudoCityCode = null, $BranchCode = null)
    {
      parent::__construct($AdditionalIdentifier);
      $this->Name = $Name;
      $this->IataNumber = $IataNumber;
      $this->BranchType = $BranchType;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->BranchCode = $BranchCode;
    }

    /**
     * @return typeWildcard
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeWildcard $Name
     * @return \FilippoToso\Travelport\UProfile\BranchCriteria
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getIataNumber()
    {
      return $this->IataNumber;
    }

    /**
     * @param typeWildcard $IataNumber
     * @return \FilippoToso\Travelport\UProfile\BranchCriteria
     */
    public function setIataNumber($IataNumber)
    {
      $this->IataNumber = $IataNumber;
      return $this;
    }

    /**
     * @return typeFilterControlAndWorkspace
     */
    public function getBranchType()
    {
      return $this->BranchType;
    }

    /**
     * @param typeFilterControlAndWorkspace $BranchType
     * @return \FilippoToso\Travelport\UProfile\BranchCriteria
     */
    public function setBranchType($BranchType)
    {
      $this->BranchType = $BranchType;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typeWildcard $PseudoCityCode
     * @return \FilippoToso\Travelport\UProfile\BranchCriteria
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getBranchCode()
    {
      return $this->BranchCode;
    }

    /**
     * @param typeWildcard $BranchCode
     * @return \FilippoToso\Travelport\UProfile\BranchCriteria
     */
    public function setBranchCode($BranchCode)
    {
      $this->BranchCode = $BranchCode;
      return $this;
    }

}
