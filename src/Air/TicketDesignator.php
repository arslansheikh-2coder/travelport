<?php

namespace FilippoToso\Travelport\Air;

class TicketDesignator
{

    /**
     * @var typeTicketDesignator $Value
     */
    public $Value = null;

    /**
     * @param typeTicketDesignator $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typeTicketDesignator $Value
     * @return \FilippoToso\Travelport\Air\TicketDesignator
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
