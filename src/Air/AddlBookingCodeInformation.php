<?php

namespace FilippoToso\Travelport\Air;

class AddlBookingCodeInformation
{

    /**
     * @var typeNonBlanks $_
     */
    public $_ = null;

    /**
     * @param typeNonBlanks $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typeNonBlanks
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeNonBlanks $_
     * @return \FilippoToso\Travelport\Air\AddlBookingCodeInformation
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
