<?php

namespace FilippoToso\Travelport\Rail;

class VehicleWithMediaItems
{

    /**
     * @var Vehicle $Vehicle
     */
    public $Vehicle = null;

    /**
     * @var MediaItem $MediaItem
     */
    public $MediaItem = null;

    /**
     * @var typeResultMessage[] $MediaResultMessage
     */
    public $MediaResultMessage = null;

    /**
     * @param Vehicle $Vehicle
     * @param MediaItem $MediaItem
     */
    public function __construct($Vehicle = null, $MediaItem = null)
    {
      $this->Vehicle = $Vehicle;
      $this->MediaItem = $MediaItem;
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
      return $this->Vehicle;
    }

    /**
     * @param Vehicle $Vehicle
     * @return \FilippoToso\Travelport\Rail\VehicleWithMediaItems
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
      return $this;
    }

    /**
     * @return MediaItem
     */
    public function getMediaItem()
    {
      return $this->MediaItem;
    }

    /**
     * @param MediaItem $MediaItem
     * @return \FilippoToso\Travelport\Rail\VehicleWithMediaItems
     */
    public function setMediaItem($MediaItem)
    {
      $this->MediaItem = $MediaItem;
      return $this;
    }

    /**
     * @return typeResultMessage[]
     */
    public function getMediaResultMessage()
    {
      return $this->MediaResultMessage;
    }

    /**
     * @param typeResultMessage[] $MediaResultMessage
     * @return \FilippoToso\Travelport\Rail\VehicleWithMediaItems
     */
    public function setMediaResultMessage(array $MediaResultMessage = null)
    {
      $this->MediaResultMessage = $MediaResultMessage;
      return $this;
    }

}
