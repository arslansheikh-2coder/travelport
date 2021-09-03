<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeMostRestrictivePenalties
{

    /**
     * @var typeRestrictionData[] $RestrictionType
     */
    public $RestrictionType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeRestrictionData[]
     */
    public function getRestrictionType()
    {
      return $this->RestrictionType;
    }

    /**
     * @param typeRestrictionData[] $RestrictionType
     * @return \FilippoToso\Travelport\UniversalRecord\typeMostRestrictivePenalties
     */
    public function setRestrictionType(array $RestrictionType = null)
    {
      $this->RestrictionType = $RestrictionType;
      return $this;
    }

}
