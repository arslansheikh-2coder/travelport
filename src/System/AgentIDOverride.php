<?php

namespace FilippoToso\Travelport\System;

class AgentIDOverride
{

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var anonymous388 $AgentID
     */
    public $AgentID = null;

    /**
     * @param typeSupplierCode $SupplierCode
     * @param typeProviderCode $ProviderCode
     * @param anonymous388 $AgentID
     */
    public function __construct($SupplierCode = null, $ProviderCode = null, $AgentID = null)
    {
      $this->SupplierCode = $SupplierCode;
      $this->ProviderCode = $ProviderCode;
      $this->AgentID = $AgentID;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\System\AgentIDOverride
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
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
     * @return \FilippoToso\Travelport\System\AgentIDOverride
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return anonymous388
     */
    public function getAgentID()
    {
      return $this->AgentID;
    }

    /**
     * @param anonymous388 $AgentID
     * @return \FilippoToso\Travelport\System\AgentIDOverride
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
      return $this;
    }

}
