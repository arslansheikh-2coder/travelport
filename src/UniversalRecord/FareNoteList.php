<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareNoteList
{

    /**
     * @var FareNote $FareNote
     */
    public $FareNote = null;

    /**
     * @param FareNote $FareNote
     */
    public function __construct($FareNote = null)
    {
      $this->FareNote = $FareNote;
    }

    /**
     * @return FareNote
     */
    public function getFareNote()
    {
      return $this->FareNote;
    }

    /**
     * @param FareNote $FareNote
     * @return \FilippoToso\Travelport\UniversalRecord\FareNoteList
     */
    public function setFareNote($FareNote)
    {
      $this->FareNote = $FareNote;
      return $this;
    }

}
