<?php

namespace FilippoToso\Travelport\Air;

class InitialAsynchResult
{

    /**
     * @var int $MaxWait
     */
    public $MaxWait = null;

    /**
     * @param int $MaxWait
     */
    public function __construct($MaxWait = null)
    {
      $this->MaxWait = $MaxWait;
    }

    /**
     * @return int
     */
    public function getMaxWait()
    {
      return $this->MaxWait;
    }

    /**
     * @param int $MaxWait
     * @return \FilippoToso\Travelport\Air\InitialAsynchResult
     */
    public function setMaxWait($MaxWait)
    {
      $this->MaxWait = $MaxWait;
      return $this;
    }

}
