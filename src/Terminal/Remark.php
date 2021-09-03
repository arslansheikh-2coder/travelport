<?php

namespace FilippoToso\Travelport\Terminal;

class Remark
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param string $_
     * @param typeRef $Key
     */
    public function __construct($_ = null, $Key = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Terminal\Remark
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Terminal\Remark
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
