<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FeeApplication
{

    /**
     * @var typeFeeApplication $_
     */
    public $_ = null;

    /**
     * @var anonymous839 $Code
     */
    public $Code = null;

    /**
     * @param typeFeeApplication $_
     * @param anonymous839 $Code
     */
    public function __construct($_ = null, $Code = null)
    {
      $this->_ = $_;
      $this->Code = $Code;
    }

    /**
     * @return typeFeeApplication
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeFeeApplication $_
     * @return \FilippoToso\Travelport\UniversalRecord\FeeApplication
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous839
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous839 $Code
     * @return \FilippoToso\Travelport\UniversalRecord\FeeApplication
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
