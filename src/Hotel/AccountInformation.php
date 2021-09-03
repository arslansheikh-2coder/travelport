<?php

namespace FilippoToso\Travelport\Hotel;

class AccountInformation
{

    /**
     * @var typeStructuredAddress $Address
     */
    public $Address = null;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    public $PhoneNumber = null;

    /**
     * @var string $AccountName
     */
    public $AccountName = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param string $AccountName
     */
    public function __construct($PhoneNumber = null, $AccountName = null)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->AccountName = $AccountName;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeStructuredAddress $Address
     * @return \FilippoToso\Travelport\Hotel\AccountInformation
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\Hotel\AccountInformation
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \FilippoToso\Travelport\Hotel\AccountInformation
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

}
