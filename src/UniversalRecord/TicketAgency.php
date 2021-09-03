<?php

namespace FilippoToso\Travelport\UniversalRecord;

class TicketAgency
{

    /**
     * @var UNKNOWN $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var UNKNOWN $PseudoCityCode
     */
    public $PseudoCityCode = null;

    /**
     * @param UNKNOWN $ProviderCode
     * @param UNKNOWN $PseudoCityCode
     */
    public function __construct($ProviderCode = null, $PseudoCityCode = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->PseudoCityCode = $PseudoCityCode;
    }

    /**
     * @return UNKNOWN
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param UNKNOWN $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\TicketAgency
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param UNKNOWN $PseudoCityCode
     * @return \FilippoToso\Travelport\UniversalRecord\TicketAgency
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

}
