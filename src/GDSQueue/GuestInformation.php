<?php

namespace FilippoToso\Travelport\GDSQueue;

class GuestInformation
{

    /**
     * @var NumberOfAdults $NumberOfAdults
     */
    public $NumberOfAdults = null;

    /**
     * @var NumberOfChildren $NumberOfChildren
     */
    public $NumberOfChildren = null;

    /**
     * @var ExtraChild $ExtraChild
     */
    public $ExtraChild = null;

    /**
     * @var int $NumberOfRooms
     */
    public $NumberOfRooms = null;

    /**
     * @param NumberOfAdults $NumberOfAdults
     * @param NumberOfChildren $NumberOfChildren
     * @param int $NumberOfRooms
     */
    public function __construct($NumberOfAdults = null, $NumberOfChildren = null, $NumberOfRooms = null)
    {
      $this->NumberOfAdults = $NumberOfAdults;
      $this->NumberOfChildren = $NumberOfChildren;
      $this->NumberOfRooms = $NumberOfRooms;
    }

    /**
     * @return NumberOfAdults
     */
    public function getNumberOfAdults()
    {
      return $this->NumberOfAdults;
    }

    /**
     * @param NumberOfAdults $NumberOfAdults
     * @return \FilippoToso\Travelport\GDSQueue\GuestInformation
     */
    public function setNumberOfAdults($NumberOfAdults)
    {
      $this->NumberOfAdults = $NumberOfAdults;
      return $this;
    }

    /**
     * @return NumberOfChildren
     */
    public function getNumberOfChildren()
    {
      return $this->NumberOfChildren;
    }

    /**
     * @param NumberOfChildren $NumberOfChildren
     * @return \FilippoToso\Travelport\GDSQueue\GuestInformation
     */
    public function setNumberOfChildren($NumberOfChildren)
    {
      $this->NumberOfChildren = $NumberOfChildren;
      return $this;
    }

    /**
     * @return ExtraChild
     */
    public function getExtraChild()
    {
      return $this->ExtraChild;
    }

    /**
     * @param ExtraChild $ExtraChild
     * @return \FilippoToso\Travelport\GDSQueue\GuestInformation
     */
    public function setExtraChild($ExtraChild)
    {
      $this->ExtraChild = $ExtraChild;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRooms()
    {
      return $this->NumberOfRooms;
    }

    /**
     * @param int $NumberOfRooms
     * @return \FilippoToso\Travelport\GDSQueue\GuestInformation
     */
    public function setNumberOfRooms($NumberOfRooms)
    {
      $this->NumberOfRooms = $NumberOfRooms;
      return $this;
    }

}
