<?php

namespace FilippoToso\Travelport\Util;

class ExpertSolutionList
{

    /**
     * @var ExpertSolution $ExpertSolution
     */
    public $ExpertSolution = null;

    /**
     * @param ExpertSolution $ExpertSolution
     */
    public function __construct($ExpertSolution = null)
    {
      $this->ExpertSolution = $ExpertSolution;
    }

    /**
     * @return ExpertSolution
     */
    public function getExpertSolution()
    {
      return $this->ExpertSolution;
    }

    /**
     * @param ExpertSolution $ExpertSolution
     * @return \FilippoToso\Travelport\Util\ExpertSolutionList
     */
    public function setExpertSolution($ExpertSolution)
    {
      $this->ExpertSolution = $ExpertSolution;
      return $this;
    }

}
