<?php

namespace FilippoToso\Travelport\UProfile;

class TagDelete
{

    /**
     * @var typeTaggableElement $Element
     */
    public $Element = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeTagID $TagID
     */
    public $TagID = null;

    /**
     * @param typeTaggableElement $Element
     * @param typeRef $Key
     * @param typeTagID $TagID
     */
    public function __construct($Element = null, $Key = null, $TagID = null)
    {
      $this->Element = $Element;
      $this->Key = $Key;
      $this->TagID = $TagID;
    }

    /**
     * @return typeTaggableElement
     */
    public function getElement()
    {
      return $this->Element;
    }

    /**
     * @param typeTaggableElement $Element
     * @return \FilippoToso\Travelport\UProfile\TagDelete
     */
    public function setElement($Element)
    {
      $this->Element = $Element;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\UProfile\TagDelete
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeTagID
     */
    public function getTagID()
    {
      return $this->TagID;
    }

    /**
     * @param typeTagID $TagID
     * @return \FilippoToso\Travelport\UProfile\TagDelete
     */
    public function setTagID($TagID)
    {
      $this->TagID = $TagID;
      return $this;
    }

}
