<?php

namespace FilippoToso\Travelport\Air;

class EMDTravelerInfo
{

    /**
     * @var NameInfo $NameInfo
     */
    public $NameInfo = null;

    /**
     * @var typePTC $TravelerType
     */
    public $TravelerType = null;

    /**
     * @var int $Age
     */
    public $Age = null;

    /**
     * @param NameInfo $NameInfo
     * @param typePTC $TravelerType
     * @param int $Age
     */
    public function __construct($NameInfo = null, $TravelerType = null, $Age = null)
    {
      $this->NameInfo = $NameInfo;
      $this->TravelerType = $TravelerType;
      $this->Age = $Age;
    }

    /**
     * @return NameInfo
     */
    public function getNameInfo()
    {
      return $this->NameInfo;
    }

    /**
     * @param NameInfo $NameInfo
     * @return \FilippoToso\Travelport\Air\EMDTravelerInfo
     */
    public function setNameInfo($NameInfo)
    {
      $this->NameInfo = $NameInfo;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getTravelerType()
    {
      return $this->TravelerType;
    }

    /**
     * @param typePTC $TravelerType
     * @return \FilippoToso\Travelport\Air\EMDTravelerInfo
     */
    public function setTravelerType($TravelerType)
    {
      $this->TravelerType = $TravelerType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \FilippoToso\Travelport\Air\EMDTravelerInfo
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
