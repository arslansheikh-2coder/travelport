<?php

namespace FilippoToso\Travelport\GDSQueue;

class RouteList
{

    /**
     * @var Route $Route
     */
    public $Route = null;

    /**
     * @param Route $Route
     */
    public function __construct($Route = null)
    {
      $this->Route = $Route;
    }

    /**
     * @return Route
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param Route $Route
     * @return \FilippoToso\Travelport\GDSQueue\RouteList
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
      return $this;
    }

}
