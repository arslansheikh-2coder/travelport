<?php

namespace FilippoToso\Travelport\Util;

class HostTokenList
{

    /**
     * @var HostToken $HostToken
     */
    public $HostToken = null;

    /**
     * @param HostToken $HostToken
     */
    public function __construct($HostToken = null)
    {
      $this->HostToken = $HostToken;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\Util\HostTokenList
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

}
