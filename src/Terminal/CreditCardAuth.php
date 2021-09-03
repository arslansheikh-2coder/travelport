<?php

namespace FilippoToso\Travelport\Terminal;

class CreditCardAuth
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeRef $PaymentRef
     */
    public $PaymentRef = null;

    /**
     * @var string $TransId
     */
    public $TransId = null;

    /**
     * @var typeCreditCardNumber $Number
     */
    public $Number = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var string $AuthCode
     */
    public $AuthCode = null;

    /**
     * @var string $AuthResultCode
     */
    public $AuthResultCode = null;

    /**
     * @var string $AVSResultCode
     */
    public $AVSResultCode = null;

    /**
     * @var string $Message
     */
    public $Message = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $FormOfPaymentRef
     */
    public $FormOfPaymentRef = null;

    /**
     * @param typeRef $Key
     * @param typeRef $PaymentRef
     * @param string $TransId
     * @param typeCreditCardNumber $Number
     * @param typeMoney $Amount
     * @param string $AuthCode
     * @param string $AuthResultCode
     * @param string $AVSResultCode
     * @param string $Message
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $FormOfPaymentRef
     */
    public function __construct($Key = null, $PaymentRef = null, $TransId = null, $Number = null, $Amount = null, $AuthCode = null, $AuthResultCode = null, $AVSResultCode = null, $Message = null, $ProviderReservationInfoRef = null, $FormOfPaymentRef = null)
    {
      $this->Key = $Key;
      $this->PaymentRef = $PaymentRef;
      $this->TransId = $TransId;
      $this->Number = $Number;
      $this->Amount = $Amount;
      $this->AuthCode = $AuthCode;
      $this->AuthResultCode = $AuthResultCode;
      $this->AVSResultCode = $AVSResultCode;
      $this->Message = $Message;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->FormOfPaymentRef = $FormOfPaymentRef;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPaymentRef()
    {
      return $this->PaymentRef;
    }

    /**
     * @param typeRef $PaymentRef
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setPaymentRef($PaymentRef)
    {
      $this->PaymentRef = $PaymentRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransId()
    {
      return $this->TransId;
    }

    /**
     * @param string $TransId
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setTransId($TransId)
    {
      $this->TransId = $TransId;
      return $this;
    }

    /**
     * @return typeCreditCardNumber
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param typeCreditCardNumber $Number
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->AuthCode;
    }

    /**
     * @param string $AuthCode
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setAuthCode($AuthCode)
    {
      $this->AuthCode = $AuthCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthResultCode()
    {
      return $this->AuthResultCode;
    }

    /**
     * @param string $AuthResultCode
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setAuthResultCode($AuthResultCode)
    {
      $this->AuthResultCode = $AuthResultCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAVSResultCode()
    {
      return $this->AVSResultCode;
    }

    /**
     * @param string $AVSResultCode
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setAVSResultCode($AVSResultCode)
    {
      $this->AVSResultCode = $AVSResultCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFormOfPaymentRef()
    {
      return $this->FormOfPaymentRef;
    }

    /**
     * @param typeRef $FormOfPaymentRef
     * @return \FilippoToso\Travelport\Terminal\CreditCardAuth
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      return $this;
    }

}
