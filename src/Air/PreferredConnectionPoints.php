<?php

namespace FilippoToso\Travelport\Air;

class PreferredConnectionPoints
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
     * @return \FilippoToso\Travelport\Air\PreferredConnectionPoints
     */
    public function setConnectionPoint($ConnectionPoint)
    {
      $this->ConnectionPoint = $ConnectionPoint;
      return $this;
    }

}
