<?php

namespace FilippoToso\Travelport\UProfile;

class typeCustomFieldAndGroupDeleteRef
{

    /**
     * @var typeID $ID
     */
    public $ID = null;

    /**
     * @param typeID $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return typeID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeID $ID
     * @return \FilippoToso\Travelport\UProfile\typeCustomFieldAndGroupDeleteRef
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
