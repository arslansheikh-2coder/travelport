<?php

namespace FilippoToso\Travelport\Air;

class WaiverCode
{

    /**
     * @var typeTourCode $TourCode
     */
    public $TourCode = null;

    /**
     * @var typeTicketDesignator $TicketDesignator
     */
    public $TicketDesignator = null;

    /**
     * @var anonymous783 $Endorsement
     */
    public $Endorsement = null;

    /**
     * @param typeTourCode $TourCode
     * @param typeTicketDesignator $TicketDesignator
     * @param anonymous783 $Endorsement
     */
    public function __construct($TourCode = null, $TicketDesignator = null, $Endorsement = null)
    {
      $this->TourCode = $TourCode;
      $this->TicketDesignator = $TicketDesignator;
      $this->Endorsement = $Endorsement;
    }

    /**
     * @return typeTourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param typeTourCode $TourCode
     * @return \FilippoToso\Travelport\Air\WaiverCode
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param typeTicketDesignator $TicketDesignator
     * @return \FilippoToso\Travelport\Air\WaiverCode
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

    /**
     * @return anonymous783
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param anonymous783 $Endorsement
     * @return \FilippoToso\Travelport\Air\WaiverCode
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

}
