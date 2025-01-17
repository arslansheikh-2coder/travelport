<?php

namespace FilippoToso\Travelport\Air;

class BaggageRestriction
{

    /**
     * @var Dimension $Dimension
     */
    public $Dimension = null;

    /**
     * @var typeUnitOfMeasure[] $MaxWeight
     */
    public $MaxWeight = null;

    /**
     * @var TextInfo $TextInfo
     */
    public $TextInfo = null;

    /**
     * @param Dimension $Dimension
     * @param TextInfo $TextInfo
     */
    public function __construct($Dimension = null, $TextInfo = null)
    {
      $this->Dimension = $Dimension;
      $this->TextInfo = $TextInfo;
    }

    /**
     * @return Dimension
     */
    public function getDimension()
    {
      return $this->Dimension;
    }

    /**
     * @param Dimension $Dimension
     * @return \FilippoToso\Travelport\Air\BaggageRestriction
     */
    public function setDimension($Dimension)
    {
      $this->Dimension = $Dimension;
      return $this;
    }

    /**
     * @return typeUnitOfMeasure[]
     */
    public function getMaxWeight()
    {
      return $this->MaxWeight;
    }

    /**
     * @param typeUnitOfMeasure[] $MaxWeight
     * @return \FilippoToso\Travelport\Air\BaggageRestriction
     */
    public function setMaxWeight(array $MaxWeight = null)
    {
      $this->MaxWeight = $MaxWeight;
      return $this;
    }

    /**
     * @return TextInfo
     */
    public function getTextInfo()
    {
      return $this->TextInfo;
    }

    /**
     * @param TextInfo $TextInfo
     * @return \FilippoToso\Travelport\Air\BaggageRestriction
     */
    public function setTextInfo($TextInfo)
    {
      $this->TextInfo = $TextInfo;
      return $this;
    }

}
