<?php

namespace FilippoToso\Travelport\GDSQueue;

class BulkTicket extends typeBulkTicketModifierType
{

    /**
     * @var boolean $NonRefundable
     */
    public $NonRefundable = null;

    /**
     * @param boolean $SuppressOnFareCalc
     * @param boolean $NonRefundable
     */
    public function __construct($SuppressOnFareCalc = null, $NonRefundable = null)
    {
      parent::__construct($SuppressOnFareCalc);
      $this->NonRefundable = $NonRefundable;
    }

    /**
     * @return boolean
     */
    public function getNonRefundable()
    {
      return $this->NonRefundable;
    }

    /**
     * @param boolean $NonRefundable
     * @return \FilippoToso\Travelport\GDSQueue\BulkTicket
     */
    public function setNonRefundable($NonRefundable)
    {
      $this->NonRefundable = $NonRefundable;
      return $this;
    }

}
