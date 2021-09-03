<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeRsp extends BaseRsp
{

    /**
     * @var StringLength1to13 $TicketNumber
     */
    public $TicketNumber = null;

    /**
     * @var BookingTraveler $BookingTraveler
     */
    public $BookingTraveler = null;

    /**
     * @var typeAirReservationWithFOP $AirReservation
     */
    public $AirReservation = null;

    /**
     * @var typeTicketFailureInfo[] $ExchangeFailureInfo
     */
    public $ExchangeFailureInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param StringLength1to13 $TicketNumber
     * @param BookingTraveler $BookingTraveler
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $TicketNumber = null, $BookingTraveler = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->TicketNumber = $TicketNumber;
      $this->BookingTraveler = $BookingTraveler;
    }

    /**
     * @return StringLength1to13
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param StringLength1to13 $TicketNumber
     * @return \FilippoToso\Travelport\Air\AirExchangeRsp
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return BookingTraveler
     */
    public function getBookingTraveler()
    {
      return $this->BookingTraveler;
    }

    /**
     * @param BookingTraveler $BookingTraveler
     * @return \FilippoToso\Travelport\Air\AirExchangeRsp
     */
    public function setBookingTraveler($BookingTraveler)
    {
      $this->BookingTraveler = $BookingTraveler;
      return $this;
    }

    /**
     * @return typeAirReservationWithFOP
     */
    public function getAirReservation()
    {
      return $this->AirReservation;
    }

    /**
     * @param typeAirReservationWithFOP $AirReservation
     * @return \FilippoToso\Travelport\Air\AirExchangeRsp
     */
    public function setAirReservation($AirReservation)
    {
      $this->AirReservation = $AirReservation;
      return $this;
    }

    /**
     * @return typeTicketFailureInfo[]
     */
    public function getExchangeFailureInfo()
    {
      return $this->ExchangeFailureInfo;
    }

    /**
     * @param typeTicketFailureInfo[] $ExchangeFailureInfo
     * @return \FilippoToso\Travelport\Air\AirExchangeRsp
     */
    public function setExchangeFailureInfo(array $ExchangeFailureInfo = null)
    {
      $this->ExchangeFailureInfo = $ExchangeFailureInfo;
      return $this;
    }

}
