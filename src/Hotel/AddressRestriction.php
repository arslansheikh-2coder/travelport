<?php

namespace FilippoToso\Travelport\Hotel;

class AddressRestriction
{

    /**
     * @var RequiredField $RequiredField
     */
    public $RequiredField = null;

    /**
     * @param RequiredField $RequiredField
     */
    public function __construct($RequiredField = null)
    {
      $this->RequiredField = $RequiredField;
    }

    /**
     * @return RequiredField
     */
    public function getRequiredField()
    {
      return $this->RequiredField;
    }

    /**
     * @param RequiredField $RequiredField
     * @return \FilippoToso\Travelport\Hotel\AddressRestriction
     */
    public function setRequiredField($RequiredField)
    {
      $this->RequiredField = $RequiredField;
      return $this;
    }

}
