<?php

namespace FilippoToso\Travelport\Air;

class Rules
{

    /**
     * @var string $RulesText
     */
    public $RulesText = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRulesText()
    {
      return $this->RulesText;
    }

    /**
     * @param string $RulesText
     * @return \FilippoToso\Travelport\Air\Rules
     */
    public function setRulesText($RulesText)
    {
      $this->RulesText = $RulesText;
      return $this;
    }

}
