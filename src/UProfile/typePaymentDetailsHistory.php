<?php

namespace FilippoToso\Travelport\UProfile;

class typePaymentDetailsHistory extends typeKeyElement
{

    /**
     * @var PaymentPhone $PaymentPhone
     */
    public $PaymentPhone = null;

    /**
     * @var PaymentAddress $PaymentAddress
     */
    public $PaymentAddress = null;

    /**
     * @var typeDateOptions $StartDate
     */
    public $StartDate = null;

    /**
     * @var typeDateOptions $ExpirationDate
     */
    public $ExpirationDate = null;

    /**
     * @var typePaymentType $Type
     */
    public $Type = null;

    /**
     * @var string $IssuedToName
     */
    public $IssuedToName = null;

    /**
     * @var boolean $ExtendedPayment
     */
    public $ExtendedPayment = null;

    /**
     * @var typePaymentSupplier $PaymentSupplier
     */
    public $PaymentSupplier = null;

    /**
     * @var StringLength1to255 $AccountNumber
     */
    public $AccountNumber = null;

    /**
     * @var StringLength1to255 $Description
     */
    public $Description = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    public $PriorityOrder = null;

    /**
     * @var typeProfileID $OwnerID
     */
    public $OwnerID = null;

    /**
     * @param typeRef $Key
     * @param PaymentPhone $PaymentPhone
     * @param PaymentAddress $PaymentAddress
     * @param typePaymentType $Type
     * @param string $IssuedToName
     * @param boolean $ExtendedPayment
     * @param typePaymentSupplier $PaymentSupplier
     * @param StringLength1to255 $AccountNumber
     * @param StringLength1to255 $Description
     * @param typePriorityOrder $PriorityOrder
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $PaymentPhone = null, $PaymentAddress = null, $Type = null, $IssuedToName = null, $ExtendedPayment = null, $PaymentSupplier = null, $AccountNumber = null, $Description = null, $PriorityOrder = null, $OwnerID = null)
    {
      parent::__construct($Key);
      $this->PaymentPhone = $PaymentPhone;
      $this->PaymentAddress = $PaymentAddress;
      $this->Type = $Type;
      $this->IssuedToName = $IssuedToName;
      $this->ExtendedPayment = $ExtendedPayment;
      $this->PaymentSupplier = $PaymentSupplier;
      $this->AccountNumber = $AccountNumber;
      $this->Description = $Description;
      $this->PriorityOrder = $PriorityOrder;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return PaymentPhone
     */
    public function getPaymentPhone()
    {
      return $this->PaymentPhone;
    }

    /**
     * @param PaymentPhone $PaymentPhone
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setPaymentPhone($PaymentPhone)
    {
      $this->PaymentPhone = $PaymentPhone;
      return $this;
    }

    /**
     * @return PaymentAddress
     */
    public function getPaymentAddress()
    {
      return $this->PaymentAddress;
    }

    /**
     * @param PaymentAddress $PaymentAddress
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setPaymentAddress($PaymentAddress)
    {
      $this->PaymentAddress = $PaymentAddress;
      return $this;
    }

    /**
     * @return typeDateOptions
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param typeDateOptions $StartDate
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return typeDateOptions
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param typeDateOptions $ExpirationDate
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return typePaymentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typePaymentType $Type
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuedToName()
    {
      return $this->IssuedToName;
    }

    /**
     * @param string $IssuedToName
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setIssuedToName($IssuedToName)
    {
      $this->IssuedToName = $IssuedToName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtendedPayment()
    {
      return $this->ExtendedPayment;
    }

    /**
     * @param boolean $ExtendedPayment
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setExtendedPayment($ExtendedPayment)
    {
      $this->ExtendedPayment = $ExtendedPayment;
      return $this;
    }

    /**
     * @return typePaymentSupplier
     */
    public function getPaymentSupplier()
    {
      return $this->PaymentSupplier;
    }

    /**
     * @param typePaymentSupplier $PaymentSupplier
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setPaymentSupplier($PaymentSupplier)
    {
      $this->PaymentSupplier = $PaymentSupplier;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param StringLength1to255 $AccountNumber
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
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
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getOwnerID()
    {
      return $this->OwnerID;
    }

    /**
     * @param typeProfileID $OwnerID
     * @return \FilippoToso\Travelport\UProfile\typePaymentDetailsHistory
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
