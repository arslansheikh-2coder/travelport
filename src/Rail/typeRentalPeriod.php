<?php

namespace FilippoToso\Travelport\Rail;

class typeRentalPeriod
{

    /**
     * @var anonymous586 $RentalUnit
     */
    public $RentalUnit = null;

    /**
     * @var int $Length
     */
    public $Length = null;

    /**
     * @var boolean $RequirementPassed
     */
    public $RequirementPassed = null;

    /**
     * @param anonymous586 $RentalUnit
     * @param int $Length
     * @param boolean $RequirementPassed
     */
    public function __construct($RentalUnit = null, $Length = null, $RequirementPassed = null)
    {
      $this->RentalUnit = $RentalUnit;
      $this->Length = $Length;
      $this->RequirementPassed = $RequirementPassed;
    }

    /**
     * @return anonymous586
     */
    public function getRentalUnit()
    {
      return $this->RentalUnit;
    }

    /**
     * @param anonymous586 $RentalUnit
     * @return \FilippoToso\Travelport\Rail\typeRentalPeriod
     */
    public function setRentalUnit($RentalUnit)
    {
      $this->RentalUnit = $RentalUnit;
      return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param int $Length
     * @return \FilippoToso\Travelport\Rail\typeRentalPeriod
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequirementPassed()
    {
      return $this->RequirementPassed;
    }

    /**
     * @param boolean $RequirementPassed
     * @return \FilippoToso\Travelport\Rail\typeRentalPeriod
     */
    public function setRequirementPassed($RequirementPassed)
    {
      $this->RequirementPassed = $RequirementPassed;
      return $this;
    }

}
