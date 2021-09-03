<?php

namespace FilippoToso\Travelport\Rail;

class Airport extends Location
{

    /**
     * @var typeIATACode $Code
     */
    public $Code = null;

    /**
     * @param typeIATACode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeIATACode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeIATACode $Code
     * @return \FilippoToso\Travelport\Rail\Airport
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
