<?php

namespace FilippoToso\Travelport\UniversalRecord;

class URL
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @param string $_
     * @param string $Type
     */
    public function __construct($_ = null, $Type = null)
    {
      $this->_ = $_;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\UniversalRecord\URL
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\UniversalRecord\URL
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
