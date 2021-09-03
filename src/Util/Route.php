<?php

namespace FilippoToso\Travelport\Util;

class Route
{

    /**
     * @var Leg $Leg
     */
    public $Leg = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param Leg $Leg
     * @param typeRef $Key
     */
    public function __construct($Leg = null, $Key = null)
    {
      $this->Leg = $Leg;
      $this->Key = $Key;
    }

    /**
     * @return Leg
     */
    public function getLeg()
    {
      return $this->Leg;
    }

    /**
     * @param Leg $Leg
     * @return \FilippoToso\Travelport\Util\Route
     */
    public function setLeg($Leg)
    {
      $this->Leg = $Leg;
      return $this;
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
     * @return \FilippoToso\Travelport\Util\Route
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
