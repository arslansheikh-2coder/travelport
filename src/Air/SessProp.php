<?php

namespace FilippoToso\Travelport\Air;

class SessProp
{

    /**
     * @var string $nm
     */
    public $nm = null;

    /**
     * @var string $val
     */
    public $val = null;

    /**
     * @param string $nm
     * @param string $val
     */
    public function __construct($nm = null, $val = null)
    {
      $this->nm = $nm;
      $this->val = $val;
    }

    /**
     * @return string
     */
    public function getNm()
    {
      return $this->nm;
    }

    /**
     * @param string $nm
     * @return \FilippoToso\Travelport\Air\SessProp
     */
    public function setNm($nm)
    {
      $this->nm = $nm;
      return $this;
    }

    /**
     * @return string
     */
    public function getVal()
    {
      return $this->val;
    }

    /**
     * @param string $val
     * @return \FilippoToso\Travelport\Air\SessProp
     */
    public function setVal($val)
    {
      $this->val = $val;
      return $this;
    }

}
