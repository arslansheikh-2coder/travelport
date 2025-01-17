<?php

namespace FilippoToso\Travelport\Util;

class PermittedConnectionPoints
{

    /**
     * @var typeLocation $ConnectionPoint
     */
    public $ConnectionPoint = null;

    /**
     * @param typeLocation $ConnectionPoint
     */
    public function __construct($ConnectionPoint = null)
    {
      $this->ConnectionPoint = $ConnectionPoint;
    }

    /**
     * @return typeLocation
     */
    public function getConnectionPoint()
    {
      return $this->ConnectionPoint;
    }

    /**
     * @param typeLocation $ConnectionPoint
     * @return \FilippoToso\Travelport\Util\PermittedConnectionPoints
     */
    public function setConnectionPoint($ConnectionPoint)
    {
      $this->ConnectionPoint = $ConnectionPoint;
      return $this;
    }

}
