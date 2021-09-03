<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirExchangeMulitQuoteList
{

    /**
     * @var AirExchangeMultiQuoteOption $AirExchangeMultiQuoteOption
     */
    public $AirExchangeMultiQuoteOption = null;

    /**
     * @param AirExchangeMultiQuoteOption $AirExchangeMultiQuoteOption
     */
    public function __construct($AirExchangeMultiQuoteOption = null)
    {
      $this->AirExchangeMultiQuoteOption = $AirExchangeMultiQuoteOption;
    }

    /**
     * @return AirExchangeMultiQuoteOption
     */
    public function getAirExchangeMultiQuoteOption()
    {
      return $this->AirExchangeMultiQuoteOption;
    }

    /**
     * @param AirExchangeMultiQuoteOption $AirExchangeMultiQuoteOption
     * @return \FilippoToso\Travelport\UniversalRecord\AirExchangeMulitQuoteList
     */
    public function setAirExchangeMultiQuoteOption($AirExchangeMultiQuoteOption)
    {
      $this->AirExchangeMultiQuoteOption = $AirExchangeMultiQuoteOption;
      return $this;
    }

}
