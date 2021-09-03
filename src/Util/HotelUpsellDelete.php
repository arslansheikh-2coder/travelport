<?php

namespace FilippoToso\Travelport\Util;

class HotelUpsellDelete
{

    /**
     * @var typeRef $QualifyRef
     */
    public $QualifyRef = null;

    /**
     * @var typeRef $OfferRef
     */
    public $OfferRef = null;

    /**
     * @param typeRef $QualifyRef
     * @param typeRef $OfferRef
     */
    public function __construct($QualifyRef = null, $OfferRef = null)
    {
      $this->QualifyRef = $QualifyRef;
      $this->OfferRef = $OfferRef;
    }

    /**
     * @return typeRef
     */
    public function getQualifyRef()
    {
      return $this->QualifyRef;
    }

    /**
     * @param typeRef $QualifyRef
     * @return \FilippoToso\Travelport\Util\HotelUpsellDelete
     */
    public function setQualifyRef($QualifyRef)
    {
      $this->QualifyRef = $QualifyRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getOfferRef()
    {
      return $this->OfferRef;
    }

    /**
     * @param typeRef $OfferRef
     * @return \FilippoToso\Travelport\Util\HotelUpsellDelete
     */
    public function setOfferRef($OfferRef)
    {
      $this->OfferRef = $OfferRef;
      return $this;
    }

}
