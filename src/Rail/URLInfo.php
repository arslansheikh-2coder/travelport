<?php

namespace FilippoToso\Travelport\Rail;

class URLInfo
{

    /**
     * @var typeGeneralText[] $Text
     */
    public $Text = null;

    /**
     * @var anyURI[] $URL
     */
    public $URL = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeGeneralText[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param typeGeneralText[] $Text
     * @return \FilippoToso\Travelport\Rail\URLInfo
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return anyURI[]
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param anyURI[] $URL
     * @return \FilippoToso\Travelport\Rail\URLInfo
     */
    public function setURL(array $URL = null)
    {
      $this->URL = $URL;
      return $this;
    }

}
