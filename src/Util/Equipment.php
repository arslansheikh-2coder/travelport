<?php

namespace FilippoToso\Travelport\Util;

class Equipment
{

    /**
     * @var string $Code
     */
    public $Code = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @param string $Code
     * @param string $Description
     */
    public function __construct($Code = null, $Description = null)
    {
      $this->Code = $Code;
      $this->Description = $Description;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\Util\Equipment
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Util\Equipment
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
