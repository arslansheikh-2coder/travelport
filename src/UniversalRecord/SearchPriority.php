<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SearchPriority
{

    /**
     * @var Criteria[] $Criteria
     */
    public $Criteria = null;

    /**
     * @param Criteria[] $Criteria
     */
    public function __construct(array $Criteria = null)
    {
      $this->Criteria = $Criteria;
    }

    /**
     * @return Criteria[]
     */
    public function getCriteria()
    {
      return $this->Criteria;
    }

    /**
     * @param Criteria[] $Criteria
     * @return \FilippoToso\Travelport\UniversalRecord\SearchPriority
     */
    public function setCriteria(array $Criteria)
    {
      $this->Criteria = $Criteria;
      return $this;
    }

}
