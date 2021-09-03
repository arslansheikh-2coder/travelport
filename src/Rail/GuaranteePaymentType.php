<?php

namespace FilippoToso\Travelport\Rail;

class GuaranteePaymentType
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
     * @var string $Description
     */
    public $Description = null;

    /**
     * @param string $_
     * @param string $Type
     * @param string $Description
     */
    public function __construct($_ = null, $Type = null, $Description = null)
    {
      $this->_ = $_;
      $this->Type = $Type;
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\Rail\GuaranteePaymentType
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
     * @return \FilippoToso\Travelport\Rail\GuaranteePaymentType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Rail\GuaranteePaymentType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
