<?php

namespace FilippoToso\Travelport\Rail;

class RuleLengthOfStay
{

    /**
     * @var typeRestrictionLengthOfStay $MinimumStay
     */
    public $MinimumStay = null;

    /**
     * @var typeRestrictionLengthOfStay $MaximumStay
     */
    public $MaximumStay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeRestrictionLengthOfStay
     */
    public function getMinimumStay()
    {
      return $this->MinimumStay;
    }

    /**
     * @param typeRestrictionLengthOfStay $MinimumStay
     * @return \FilippoToso\Travelport\Rail\RuleLengthOfStay
     */
    public function setMinimumStay($MinimumStay)
    {
      $this->MinimumStay = $MinimumStay;
      return $this;
    }

    /**
     * @return typeRestrictionLengthOfStay
     */
    public function getMaximumStay()
    {
      return $this->MaximumStay;
    }

    /**
     * @param typeRestrictionLengthOfStay $MaximumStay
     * @return \FilippoToso\Travelport\Rail\RuleLengthOfStay
     */
    public function setMaximumStay($MaximumStay)
    {
      $this->MaximumStay = $MaximumStay;
      return $this;
    }

}
