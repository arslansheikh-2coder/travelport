<?php

namespace FilippoToso\Travelport\Terminal;

class PseudoCityCode
{

    /**
     * @var typePCC $_
     */
    public $_ = null;

    /**
     * @param typePCC $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typePCC
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typePCC $_
     * @return \FilippoToso\Travelport\Terminal\PseudoCityCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
