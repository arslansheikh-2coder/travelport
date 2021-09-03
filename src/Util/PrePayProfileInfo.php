<?php

namespace FilippoToso\Travelport\Util;

class PrePayProfileInfo
{

    /**
     * @var PrePayId $PrePayId
     */
    public $PrePayId = null;

    /**
     * @var PrePayCustomer $PrePayCustomer
     */
    public $PrePayCustomer = null;

    /**
     * @var PrePayAccount $PrePayAccount
     */
    public $PrePayAccount = null;

    /**
     * @var Affiliations $Affiliations
     */
    public $Affiliations = null;

    /**
     * @var AccountRelatedRules $AccountRelatedRules
     */
    public $AccountRelatedRules = null;

    /**
     * @var string $StatusCode
     */
    public $StatusCode = null;

    /**
     * @var typeCardNumber $CreatorID
     */
    public $CreatorID = null;

    /**
     * @param PrePayId $PrePayId
     * @param PrePayCustomer $PrePayCustomer
     * @param PrePayAccount $PrePayAccount
     * @param Affiliations $Affiliations
     * @param AccountRelatedRules $AccountRelatedRules
     * @param string $StatusCode
     * @param typeCardNumber $CreatorID
     */
    public function __construct($PrePayId = null, $PrePayCustomer = null, $PrePayAccount = null, $Affiliations = null, $AccountRelatedRules = null, $StatusCode = null, $CreatorID = null)
    {
      $this->PrePayId = $PrePayId;
      $this->PrePayCustomer = $PrePayCustomer;
      $this->PrePayAccount = $PrePayAccount;
      $this->Affiliations = $Affiliations;
      $this->AccountRelatedRules = $AccountRelatedRules;
      $this->StatusCode = $StatusCode;
      $this->CreatorID = $CreatorID;
    }

    /**
     * @return PrePayId
     */
    public function getPrePayId()
    {
      return $this->PrePayId;
    }

    /**
     * @param PrePayId $PrePayId
     * @return \FilippoToso\Travelport\Util\PrePayProfileInfo
     */
    public function setPrePayId($PrePayId)
    {
      $this->PrePayId = $PrePayId;
      return $this;
    }

    /**
     * @return PrePayCustomer
     */
    public function getPrePayCustomer()
    {
      return $this->PrePayCustomer;
    }

    /**
     * @param PrePayCustomer $PrePayCustomer
     * @return \FilippoToso\Travelport\Util\PrePayProfileInfo
     */
    public function setPrePayCustomer($PrePayCustomer)
    {
      $this->PrePayCustomer = $PrePayCustomer;
      return $this;
    }

    /**
     * @return PrePayAccount
     */
    public function getPrePayAccount()
    {
      return $this->PrePayAccount;
    }

    /**
     * @param PrePayAccount $PrePayAccount
     * @return \FilippoToso\Travelport\Util\PrePayProfileInfo
     */
    public function setPrePayAccount($PrePayAccount)
    {
      $this->PrePayAccount = $PrePayAccount;
      return $this;
    }

    /**
     * @return Affiliations
     */
    public function getAffiliations()
    {
      return $this->Affiliations;
    }

    /**
     * @param Affiliations $Affiliations
     * @return \FilippoToso\Travelport\Util\PrePayProfileInfo
     */
    public function setAffiliations($Affiliations)
    {
      $this->Affiliations = $Affiliations;
      return $this;
    }

    /**
     * @return AccountRelatedRules
     */
    public function getAccountRelatedRules()
    {
      return $this->AccountRelatedRules;
    }

    /**
     * @param AccountRelatedRules $AccountRelatedRules
     * @return \FilippoToso\Travelport\Util\PrePayProfileInfo
     */
    public function setAccountRelatedRules($AccountRelatedRules)
    {
      $this->AccountRelatedRules = $AccountRelatedRules;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param string $StatusCode
     * @return \FilippoToso\Travelport\Util\PrePayProfileInfo
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return typeCardNumber
     */
    public function getCreatorID()
    {
      return $this->CreatorID;
    }

    /**
     * @param typeCardNumber $CreatorID
     * @return \FilippoToso\Travelport\Util\PrePayProfileInfo
     */
    public function setCreatorID($CreatorID)
    {
      $this->CreatorID = $CreatorID;
      return $this;
    }

}
