<?php

namespace FilippoToso\Travelport\System;

class RequestKeyMappings
{

    /**
     * @var KeyMapping $KeyMapping
     */
    public $KeyMapping = null;

    /**
     * @param KeyMapping $KeyMapping
     */
    public function __construct($KeyMapping = null)
    {
      $this->KeyMapping = $KeyMapping;
    }

    /**
     * @return KeyMapping
     */
    public function getKeyMapping()
    {
      return $this->KeyMapping;
    }

    /**
     * @param KeyMapping $KeyMapping
     * @return \FilippoToso\Travelport\System\RequestKeyMappings
     */
    public function setKeyMapping($KeyMapping)
    {
      $this->KeyMapping = $KeyMapping;
      return $this;
    }

}
