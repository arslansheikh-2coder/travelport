<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeSegmentPolicy
{

    /**
     * @var Preference $Preference
     */
    public $Preference = null;

    /**
     * @var typeRef $SegmentRef
     */
    public $SegmentRef = null;

    /**
     * @var boolean $InPolicy
     */
    public $InPolicy = null;

    /**
     * @var boolean $InContract
     */
    public $InContract = null;

    /**
     * @param Preference $Preference
     * @param typeRef $SegmentRef
     * @param boolean $InPolicy
     * @param boolean $InContract
     */
    public function __construct($Preference = null, $SegmentRef = null, $InPolicy = null, $InContract = null)
    {
      $this->Preference = $Preference;
      $this->SegmentRef = $SegmentRef;
      $this->InPolicy = $InPolicy;
      $this->InContract = $InContract;
    }

    /**
     * @return Preference
     */
    public function getPreference()
    {
      return $this->Preference;
    }

    /**
     * @param Preference $Preference
     * @return \FilippoToso\Travelport\UniversalRecord\typeSegmentPolicy
     */
    public function setPreference($Preference)
    {
      $this->Preference = $Preference;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\UniversalRecord\typeSegmentPolicy
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInPolicy()
    {
      return $this->InPolicy;
    }

    /**
     * @param boolean $InPolicy
     * @return \FilippoToso\Travelport\UniversalRecord\typeSegmentPolicy
     */
    public function setInPolicy($InPolicy)
    {
      $this->InPolicy = $InPolicy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInContract()
    {
      return $this->InContract;
    }

    /**
     * @param boolean $InContract
     * @return \FilippoToso\Travelport\UniversalRecord\typeSegmentPolicy
     */
    public function setInContract($InContract)
    {
      $this->InContract = $InContract;
      return $this;
    }

}
