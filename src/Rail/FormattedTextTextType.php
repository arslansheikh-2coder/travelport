<?php

namespace FilippoToso\Travelport\Rail;

class FormattedTextTextType
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var boolean $Formatted
     */
    public $Formatted = null;

    /**
     * @var anonymous331 $TextFormat
     */
    public $TextFormat = null;

    /**
     * @var language $Language
     */
    public $Language = null;

    /**
     * @param string $_
     * @param boolean $Formatted
     * @param anonymous331 $TextFormat
     * @param language $Language
     */
    public function __construct($_ = null, $Formatted = null, $TextFormat = null, $Language = null)
    {
      $this->_ = $_;
      $this->Formatted = $Formatted;
      $this->TextFormat = $TextFormat;
      $this->Language = $Language;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Rail\FormattedTextTextType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFormatted()
    {
      return $this->Formatted;
    }

    /**
     * @param boolean $Formatted
     * @return \FilippoToso\Travelport\Rail\FormattedTextTextType
     */
    public function setFormatted($Formatted)
    {
      $this->Formatted = $Formatted;
      return $this;
    }

    /**
     * @return anonymous331
     */
    public function getTextFormat()
    {
      return $this->TextFormat;
    }

    /**
     * @param anonymous331 $TextFormat
     * @return \FilippoToso\Travelport\Rail\FormattedTextTextType
     */
    public function setTextFormat($TextFormat)
    {
      $this->TextFormat = $TextFormat;
      return $this;
    }

    /**
     * @return language
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param language $Language
     * @return \FilippoToso\Travelport\Rail\FormattedTextTextType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
