<?php

namespace FilippoToso\Travelport\GDSQueue;

class ProviderReservationSearchResult
{

    /**
     * @var Name $Name
     */
    public $Name = null;

    /**
     * @var typeProductInfo[] $ProductInfo
     */
    public $ProductInfo = null;

    /**
     * @var AgencyInfo $AgencyInfo
     */
    public $AgencyInfo = null;

    /**
     * @var string $UniversalRecordLocatorCode
     */
    public $UniversalRecordLocatorCode = null;

    /**
     * @var string $CreatedDate
     */
    public $CreatedDate = null;

    /**
     * @var string $EarliestTravelDate
     */
    public $EarliestTravelDate = null;

    /**
     * @var typeReservationTicketed $Ticketed
     */
    public $Ticketed = null;

    /**
     * @var string $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var string $ProviderLocatorCode
     */
    public $ProviderLocatorCode = null;

    /**
     * @var typeExternalSearchIndex $ExternalSearchIndex
     */
    public $ExternalSearchIndex = null;

    /**
     * @param Name $Name
     * @param AgencyInfo $AgencyInfo
     * @param string $UniversalRecordLocatorCode
     * @param string $CreatedDate
     * @param string $EarliestTravelDate
     * @param typeReservationTicketed $Ticketed
     * @param string $ProviderCode
     * @param string $ProviderLocatorCode
     * @param typeExternalSearchIndex $ExternalSearchIndex
     */
    public function __construct($Name = null, $AgencyInfo = null, $UniversalRecordLocatorCode = null, $CreatedDate = null, $EarliestTravelDate = null, $Ticketed = null, $ProviderCode = null, $ProviderLocatorCode = null, $ExternalSearchIndex = null)
    {
      $this->Name = $Name;
      $this->AgencyInfo = $AgencyInfo;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->CreatedDate = $CreatedDate;
      $this->EarliestTravelDate = $EarliestTravelDate;
      $this->Ticketed = $Ticketed;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->ExternalSearchIndex = $ExternalSearchIndex;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeProductInfo[]
     */
    public function getProductInfo()
    {
      return $this->ProductInfo;
    }

    /**
     * @param typeProductInfo[] $ProductInfo
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setProductInfo(array $ProductInfo = null)
    {
      $this->ProductInfo = $ProductInfo;
      return $this;
    }

    /**
     * @return AgencyInfo
     */
    public function getAgencyInfo()
    {
      return $this->AgencyInfo;
    }

    /**
     * @param AgencyInfo $AgencyInfo
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setAgencyInfo($AgencyInfo)
    {
      $this->AgencyInfo = $AgencyInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getUniversalRecordLocatorCode()
    {
      return $this->UniversalRecordLocatorCode;
    }

    /**
     * @param string $UniversalRecordLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate()
    {
      return $this->CreatedDate;
    }

    /**
     * @param string $CreatedDate
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEarliestTravelDate()
    {
      return $this->EarliestTravelDate;
    }

    /**
     * @param string $EarliestTravelDate
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setEarliestTravelDate($EarliestTravelDate)
    {
      $this->EarliestTravelDate = $EarliestTravelDate;
      return $this;
    }

    /**
     * @return typeReservationTicketed
     */
    public function getTicketed()
    {
      return $this->Ticketed;
    }

    /**
     * @param typeReservationTicketed $Ticketed
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setTicketed($Ticketed)
    {
      $this->Ticketed = $Ticketed;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param string $ProviderCode
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param string $ProviderLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return typeExternalSearchIndex
     */
    public function getExternalSearchIndex()
    {
      return $this->ExternalSearchIndex;
    }

    /**
     * @param typeExternalSearchIndex $ExternalSearchIndex
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationSearchResult
     */
    public function setExternalSearchIndex($ExternalSearchIndex)
    {
      $this->ExternalSearchIndex = $ExternalSearchIndex;
      return $this;
    }

}
