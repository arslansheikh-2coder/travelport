<?php

namespace FilippoToso\Travelport\GDSQueue;

class RoomView
{

    /**
     * @var typeOTACode $Code
     */
    public $Code = null;

    /**
     * @param typeOTACode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeOTACode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeOTACode $Code
     * @return \FilippoToso\Travelport\GDSQueue\RoomView
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
