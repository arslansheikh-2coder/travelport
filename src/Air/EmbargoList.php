<?php

namespace FilippoToso\Travelport\Air;

class EmbargoList
{

    /**
     * @var Embargo $Embargo
     */
    public $Embargo = null;

    /**
     * @param Embargo $Embargo
     */
    public function __construct($Embargo = null)
    {
      $this->Embargo = $Embargo;
    }

    /**
     * @return Embargo
     */
    public function getEmbargo()
    {
      return $this->Embargo;
    }

    /**
     * @param Embargo $Embargo
     * @return \FilippoToso\Travelport\Air\EmbargoList
     */
    public function setEmbargo($Embargo)
    {
      $this->Embargo = $Embargo;
      return $this;
    }

}
