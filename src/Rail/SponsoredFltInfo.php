<?php

namespace FilippoToso\Travelport\Rail;

class SponsoredFltInfo
{

    /**
     * @var int $SponsoredLNB
     */
    public $SponsoredLNB = null;

    /**
     * @var int $NeutralLNB
     */
    public $NeutralLNB = null;

    /**
     * @var anonymous837 $FltKey
     */
    public $FltKey = null;

    /**
     * @param int $SponsoredLNB
     * @param int $NeutralLNB
     * @param anonymous837 $FltKey
     */
    public function __construct($SponsoredLNB = null, $NeutralLNB = null, $FltKey = null)
    {
      $this->SponsoredLNB = $SponsoredLNB;
      $this->NeutralLNB = $NeutralLNB;
      $this->FltKey = $FltKey;
    }

    /**
     * @return int
     */
    public function getSponsoredLNB()
    {
      return $this->SponsoredLNB;
    }

    /**
     * @param int $SponsoredLNB
     * @return \FilippoToso\Travelport\Rail\SponsoredFltInfo
     */
    public function setSponsoredLNB($SponsoredLNB)
    {
      $this->SponsoredLNB = $SponsoredLNB;
      return $this;
    }

    /**
     * @return int
     */
    public function getNeutralLNB()
    {
      return $this->NeutralLNB;
    }

    /**
     * @param int $NeutralLNB
     * @return \FilippoToso\Travelport\Rail\SponsoredFltInfo
     */
    public function setNeutralLNB($NeutralLNB)
    {
      $this->NeutralLNB = $NeutralLNB;
      return $this;
    }

    /**
     * @return anonymous837
     */
    public function getFltKey()
    {
      return $this->FltKey;
    }

    /**
     * @param anonymous837 $FltKey
     * @return \FilippoToso\Travelport\Rail\SponsoredFltInfo
     */
    public function setFltKey($FltKey)
    {
      $this->FltKey = $FltKey;
      return $this;
    }

}
