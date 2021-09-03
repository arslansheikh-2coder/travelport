<?php

namespace FilippoToso\Travelport\UniversalRecord;

class MediaItem
{

    /**
     * @var string $caption
     */
    public $caption = null;

    /**
     * @var int $height
     */
    public $height = null;

    /**
     * @var int $width
     */
    public $width = null;

    /**
     * @var string $type
     */
    public $type = null;

    /**
     * @var anyURI $url
     */
    public $url = null;

    /**
     * @var anyURI $icon
     */
    public $icon = null;

    /**
     * @var typeResponseImageSize $sizeCode
     */
    public $sizeCode = null;

    /**
     * @param string $caption
     * @param int $height
     * @param int $width
     * @param string $type
     * @param anyURI $url
     * @param anyURI $icon
     * @param typeResponseImageSize $sizeCode
     */
    public function __construct($caption = null, $height = null, $width = null, $type = null, $url = null, $icon = null, $sizeCode = null)
    {
      $this->caption = $caption;
      $this->height = $height;
      $this->width = $width;
      $this->type = $type;
      $this->url = $url;
      $this->icon = $icon;
      $this->sizeCode = $sizeCode;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
      return $this->caption;
    }

    /**
     * @param string $caption
     * @return \FilippoToso\Travelport\UniversalRecord\MediaItem
     */
    public function setCaption($caption)
    {
      $this->caption = $caption;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \FilippoToso\Travelport\UniversalRecord\MediaItem
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \FilippoToso\Travelport\UniversalRecord\MediaItem
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \FilippoToso\Travelport\UniversalRecord\MediaItem
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param anyURI $url
     * @return \FilippoToso\Travelport\UniversalRecord\MediaItem
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getIcon()
    {
      return $this->icon;
    }

    /**
     * @param anyURI $icon
     * @return \FilippoToso\Travelport\UniversalRecord\MediaItem
     */
    public function setIcon($icon)
    {
      $this->icon = $icon;
      return $this;
    }

    /**
     * @return typeResponseImageSize
     */
    public function getSizeCode()
    {
      return $this->sizeCode;
    }

    /**
     * @param typeResponseImageSize $sizeCode
     * @return \FilippoToso\Travelport\UniversalRecord\MediaItem
     */
    public function setSizeCode($sizeCode)
    {
      $this->sizeCode = $sizeCode;
      return $this;
    }

}
