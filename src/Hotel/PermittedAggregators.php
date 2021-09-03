<?php

namespace FilippoToso\Travelport\Hotel;

class PermittedAggregators
{

    /**
     * @var Aggregator[] $Aggregator
     */
    public $Aggregator = null;

    /**
     * @param Aggregator[] $Aggregator
     */
    public function __construct(array $Aggregator = null)
    {
      $this->Aggregator = $Aggregator;
    }

    /**
     * @return Aggregator[]
     */
    public function getAggregator()
    {
      return $this->Aggregator;
    }

    /**
     * @param Aggregator[] $Aggregator
     * @return \FilippoToso\Travelport\Hotel\PermittedAggregators
     */
    public function setAggregator(array $Aggregator)
    {
      $this->Aggregator = $Aggregator;
      return $this;
    }

}
