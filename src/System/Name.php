<?php

namespace FilippoToso\Travelport\System;

class Name
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
     * @return \FilippoToso\Travelport\System\Name
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
