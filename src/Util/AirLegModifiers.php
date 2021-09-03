<?php

namespace FilippoToso\Travelport\Util;

class AirLegModifiers
{

    /**
     * @var PermittedCabins $PermittedCabins
     */
    public $PermittedCabins = null;

    /**
     * @var PreferredCabins $PreferredCabins
     */
    public $PreferredCabins = null;

    /**
     * @var PermittedCarriers $PermittedCarriers
     */
    public $PermittedCarriers = null;

    /**
     * @var ProhibitedCarriers $ProhibitedCarriers
     */
    public $ProhibitedCarriers = null;

    /**
     * @var PreferredCarriers $PreferredCarriers
     */
    public $PreferredCarriers = null;

    /**
     * @var PermittedConnectionPoints $PermittedConnectionPoints
     */
    public $PermittedConnectionPoints = null;

    /**
     * @var ProhibitedConnectionPoints $ProhibitedConnectionPoints
     */
    public $ProhibitedConnectionPoints = null;

    /**
     * @var PreferredConnectionPoints $PreferredConnectionPoints
     */
    public $PreferredConnectionPoints = null;

    /**
     * @var PermittedBookingCodes $PermittedBookingCodes
     */
    public $PermittedBookingCodes = null;

    /**
     * @var PreferredBookingCodes $PreferredBookingCodes
     */
    public $PreferredBookingCodes = null;

    /**
     * @var PreferredAlliances $PreferredAlliances
     */
    public $PreferredAlliances = null;

    /**
     * @var ProhibitedBookingCodes $ProhibitedBookingCodes
     */
    public $ProhibitedBookingCodes = null;

    /**
     * @var DisfavoredAlliances $DisfavoredAlliances
     */
    public $DisfavoredAlliances = null;

    /**
     * @var FlightType $FlightType
     */
    public $FlightType = null;

    /**
     * @var typeAnchorFlightData $AnchorFlightData
     */
    public $AnchorFlightData = null;

    /**
     * @var boolean $ProhibitOvernightLayovers
     */
    public $ProhibitOvernightLayovers = null;

    /**
     * @var int $MaxConnectionTime
     */
    public $MaxConnectionTime = null;

    /**
     * @var boolean $ReturnFirstAvailableOnly
     */
    public $ReturnFirstAvailableOnly = null;

    /**
     * @var boolean $AllowDirectAccess
     */
    public $AllowDirectAccess = null;

    /**
     * @var boolean $ProhibitMultiAirportConnection
     */
    public $ProhibitMultiAirportConnection = null;

    /**
     * @var boolean $PreferNonStop
     */
    public $PreferNonStop = null;

    /**
     * @var anonymous658 $OrderBy
     */
    public $OrderBy = null;

    /**
     * @var typeMaxJourneyTime $MaxJourneyTime
     */
    public $MaxJourneyTime = null;

    /**
     * @param PermittedCabins $PermittedCabins
     * @param PreferredCabins $PreferredCabins
     * @param PermittedCarriers $PermittedCarriers
     * @param ProhibitedCarriers $ProhibitedCarriers
     * @param PreferredCarriers $PreferredCarriers
     * @param PreferredBookingCodes $PreferredBookingCodes
     * @param FlightType $FlightType
     * @param boolean $ProhibitOvernightLayovers
     * @param int $MaxConnectionTime
     * @param boolean $ReturnFirstAvailableOnly
     * @param boolean $AllowDirectAccess
     * @param boolean $ProhibitMultiAirportConnection
     * @param boolean $PreferNonStop
     * @param anonymous658 $OrderBy
     * @param typeMaxJourneyTime $MaxJourneyTime
     */
    public function __construct($PermittedCabins = null, $PreferredCabins = null, $PermittedCarriers = null, $ProhibitedCarriers = null, $PreferredCarriers = null, $PreferredBookingCodes = null, $FlightType = null, $ProhibitOvernightLayovers = null, $MaxConnectionTime = null, $ReturnFirstAvailableOnly = null, $AllowDirectAccess = null, $ProhibitMultiAirportConnection = null, $PreferNonStop = null, $OrderBy = null, $MaxJourneyTime = null)
    {
      $this->PermittedCabins = $PermittedCabins;
      $this->PreferredCabins = $PreferredCabins;
      $this->PermittedCarriers = $PermittedCarriers;
      $this->ProhibitedCarriers = $ProhibitedCarriers;
      $this->PreferredCarriers = $PreferredCarriers;
      $this->PreferredBookingCodes = $PreferredBookingCodes;
      $this->FlightType = $FlightType;
      $this->ProhibitOvernightLayovers = $ProhibitOvernightLayovers;
      $this->MaxConnectionTime = $MaxConnectionTime;
      $this->ReturnFirstAvailableOnly = $ReturnFirstAvailableOnly;
      $this->AllowDirectAccess = $AllowDirectAccess;
      $this->ProhibitMultiAirportConnection = $ProhibitMultiAirportConnection;
      $this->PreferNonStop = $PreferNonStop;
      $this->OrderBy = $OrderBy;
      $this->MaxJourneyTime = $MaxJourneyTime;
    }

    /**
     * @return PermittedCabins
     */
    public function getPermittedCabins()
    {
      return $this->PermittedCabins;
    }

    /**
     * @param PermittedCabins $PermittedCabins
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPermittedCabins($PermittedCabins)
    {
      $this->PermittedCabins = $PermittedCabins;
      return $this;
    }

    /**
     * @return PreferredCabins
     */
    public function getPreferredCabins()
    {
      return $this->PreferredCabins;
    }

    /**
     * @param PreferredCabins $PreferredCabins
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPreferredCabins($PreferredCabins)
    {
      $this->PreferredCabins = $PreferredCabins;
      return $this;
    }

    /**
     * @return PermittedCarriers
     */
    public function getPermittedCarriers()
    {
      return $this->PermittedCarriers;
    }

    /**
     * @param PermittedCarriers $PermittedCarriers
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPermittedCarriers($PermittedCarriers)
    {
      $this->PermittedCarriers = $PermittedCarriers;
      return $this;
    }

    /**
     * @return ProhibitedCarriers
     */
    public function getProhibitedCarriers()
    {
      return $this->ProhibitedCarriers;
    }

    /**
     * @param ProhibitedCarriers $ProhibitedCarriers
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setProhibitedCarriers($ProhibitedCarriers)
    {
      $this->ProhibitedCarriers = $ProhibitedCarriers;
      return $this;
    }

    /**
     * @return PreferredCarriers
     */
    public function getPreferredCarriers()
    {
      return $this->PreferredCarriers;
    }

    /**
     * @param PreferredCarriers $PreferredCarriers
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPreferredCarriers($PreferredCarriers)
    {
      $this->PreferredCarriers = $PreferredCarriers;
      return $this;
    }

    /**
     * @return PermittedConnectionPoints
     */
    public function getPermittedConnectionPoints()
    {
      return $this->PermittedConnectionPoints;
    }

    /**
     * @param PermittedConnectionPoints $PermittedConnectionPoints
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPermittedConnectionPoints($PermittedConnectionPoints)
    {
      $this->PermittedConnectionPoints = $PermittedConnectionPoints;
      return $this;
    }

    /**
     * @return ProhibitedConnectionPoints
     */
    public function getProhibitedConnectionPoints()
    {
      return $this->ProhibitedConnectionPoints;
    }

    /**
     * @param ProhibitedConnectionPoints $ProhibitedConnectionPoints
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setProhibitedConnectionPoints($ProhibitedConnectionPoints)
    {
      $this->ProhibitedConnectionPoints = $ProhibitedConnectionPoints;
      return $this;
    }

    /**
     * @return PreferredConnectionPoints
     */
    public function getPreferredConnectionPoints()
    {
      return $this->PreferredConnectionPoints;
    }

    /**
     * @param PreferredConnectionPoints $PreferredConnectionPoints
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPreferredConnectionPoints($PreferredConnectionPoints)
    {
      $this->PreferredConnectionPoints = $PreferredConnectionPoints;
      return $this;
    }

    /**
     * @return PermittedBookingCodes
     */
    public function getPermittedBookingCodes()
    {
      return $this->PermittedBookingCodes;
    }

    /**
     * @param PermittedBookingCodes $PermittedBookingCodes
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPermittedBookingCodes($PermittedBookingCodes)
    {
      $this->PermittedBookingCodes = $PermittedBookingCodes;
      return $this;
    }

    /**
     * @return PreferredBookingCodes
     */
    public function getPreferredBookingCodes()
    {
      return $this->PreferredBookingCodes;
    }

    /**
     * @param PreferredBookingCodes $PreferredBookingCodes
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPreferredBookingCodes($PreferredBookingCodes)
    {
      $this->PreferredBookingCodes = $PreferredBookingCodes;
      return $this;
    }

    /**
     * @return PreferredAlliances
     */
    public function getPreferredAlliances()
    {
      return $this->PreferredAlliances;
    }

    /**
     * @param PreferredAlliances $PreferredAlliances
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPreferredAlliances($PreferredAlliances)
    {
      $this->PreferredAlliances = $PreferredAlliances;
      return $this;
    }

    /**
     * @return ProhibitedBookingCodes
     */
    public function getProhibitedBookingCodes()
    {
      return $this->ProhibitedBookingCodes;
    }

    /**
     * @param ProhibitedBookingCodes $ProhibitedBookingCodes
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setProhibitedBookingCodes($ProhibitedBookingCodes)
    {
      $this->ProhibitedBookingCodes = $ProhibitedBookingCodes;
      return $this;
    }

    /**
     * @return DisfavoredAlliances
     */
    public function getDisfavoredAlliances()
    {
      return $this->DisfavoredAlliances;
    }

    /**
     * @param DisfavoredAlliances $DisfavoredAlliances
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setDisfavoredAlliances($DisfavoredAlliances)
    {
      $this->DisfavoredAlliances = $DisfavoredAlliances;
      return $this;
    }

    /**
     * @return FlightType
     */
    public function getFlightType()
    {
      return $this->FlightType;
    }

    /**
     * @param FlightType $FlightType
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setFlightType($FlightType)
    {
      $this->FlightType = $FlightType;
      return $this;
    }

    /**
     * @return typeAnchorFlightData
     */
    public function getAnchorFlightData()
    {
      return $this->AnchorFlightData;
    }

    /**
     * @param typeAnchorFlightData $AnchorFlightData
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setAnchorFlightData($AnchorFlightData)
    {
      $this->AnchorFlightData = $AnchorFlightData;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitOvernightLayovers()
    {
      return $this->ProhibitOvernightLayovers;
    }

    /**
     * @param boolean $ProhibitOvernightLayovers
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setProhibitOvernightLayovers($ProhibitOvernightLayovers)
    {
      $this->ProhibitOvernightLayovers = $ProhibitOvernightLayovers;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxConnectionTime()
    {
      return $this->MaxConnectionTime;
    }

    /**
     * @param int $MaxConnectionTime
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setMaxConnectionTime($MaxConnectionTime)
    {
      $this->MaxConnectionTime = $MaxConnectionTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnFirstAvailableOnly()
    {
      return $this->ReturnFirstAvailableOnly;
    }

    /**
     * @param boolean $ReturnFirstAvailableOnly
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setReturnFirstAvailableOnly($ReturnFirstAvailableOnly)
    {
      $this->ReturnFirstAvailableOnly = $ReturnFirstAvailableOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDirectAccess()
    {
      return $this->AllowDirectAccess;
    }

    /**
     * @param boolean $AllowDirectAccess
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setAllowDirectAccess($AllowDirectAccess)
    {
      $this->AllowDirectAccess = $AllowDirectAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitMultiAirportConnection()
    {
      return $this->ProhibitMultiAirportConnection;
    }

    /**
     * @param boolean $ProhibitMultiAirportConnection
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setProhibitMultiAirportConnection($ProhibitMultiAirportConnection)
    {
      $this->ProhibitMultiAirportConnection = $ProhibitMultiAirportConnection;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferNonStop()
    {
      return $this->PreferNonStop;
    }

    /**
     * @param boolean $PreferNonStop
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setPreferNonStop($PreferNonStop)
    {
      $this->PreferNonStop = $PreferNonStop;
      return $this;
    }

    /**
     * @return anonymous658
     */
    public function getOrderBy()
    {
      return $this->OrderBy;
    }

    /**
     * @param anonymous658 $OrderBy
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setOrderBy($OrderBy)
    {
      $this->OrderBy = $OrderBy;
      return $this;
    }

    /**
     * @return typeMaxJourneyTime
     */
    public function getMaxJourneyTime()
    {
      return $this->MaxJourneyTime;
    }

    /**
     * @param typeMaxJourneyTime $MaxJourneyTime
     * @return \FilippoToso\Travelport\Util\AirLegModifiers
     */
    public function setMaxJourneyTime($MaxJourneyTime)
    {
      $this->MaxJourneyTime = $MaxJourneyTime;
      return $this;
    }

}
