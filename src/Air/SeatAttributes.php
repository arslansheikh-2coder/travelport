<?php

namespace FilippoToso\Travelport\Air;

class SeatAttributes
{

    /**
     * @var SeatAttribute $SeatAttribute
     */
    public $SeatAttribute = null;

    /**
     * @param SeatAttribute $SeatAttribute
     */
    public function __construct($SeatAttribute = null)
    {
      $this->SeatAttribute = $SeatAttribute;
    }

    /**
     * @return SeatAttribute
     */
    public function getSeatAttribute()
    {
      return $this->SeatAttribute;
    }

    /**
     * @param SeatAttribute $SeatAttribute
     * @return \FilippoToso\Travelport\Air\SeatAttributes
     */
    public function setSeatAttribute($SeatAttribute)
    {
      $this->SeatAttribute = $SeatAttribute;
      return $this;
    }

}
