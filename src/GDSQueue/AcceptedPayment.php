<?php

namespace FilippoToso\Travelport\GDSQueue;

class AcceptedPayment
{

    /**
     * @var typeCardMerchantType $PaymentCode
     */
    public $PaymentCode = null;

    /**
     * @param typeCardMerchantType $PaymentCode
     */
    public function __construct($PaymentCode = null)
    {
      $this->PaymentCode = $PaymentCode;
    }

    /**
     * @return typeCardMerchantType
     */
    public function getPaymentCode()
    {
      return $this->PaymentCode;
    }

    /**
     * @param typeCardMerchantType $PaymentCode
     * @return \FilippoToso\Travelport\GDSQueue\AcceptedPayment
     */
    public function setPaymentCode($PaymentCode)
    {
      $this->PaymentCode = $PaymentCode;
      return $this;
    }

}
