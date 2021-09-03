<?php

namespace FilippoToso\Travelport\Vehicle;

class NextResultReference
{

    /**
     * @var typeNonBlanks $_
     */
    public $_ = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @param typeNonBlanks $_
     * @param typeProviderCode $ProviderCode
     */
    public function __construct($_ = null, $ProviderCode = null)
    {
      $this->_ = $_;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return typeNonBlanks
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeNonBlanks $_
     * @return \FilippoToso\Travelport\Vehicle\NextResultReference
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Vehicle\NextResultReference
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
