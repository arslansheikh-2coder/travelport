<?php

namespace FilippoToso\Travelport\Hotel;

class AccountingRemark
{

    /**
     * @var string $RemarkData
     */
    public $RemarkData = null;

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var anonymous114 $Category
     */
    public $Category = null;

    /**
     * @var typeGdsAccountingRemark $TypeInGds
     */
    public $TypeInGds = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var boolean $UseProviderNativeMode
     */
    public $UseProviderNativeMode = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param string $RemarkData
     * @param typeRef $Key
     * @param anonymous114 $Category
     * @param typeGdsAccountingRemark $TypeInGds
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     * @param boolean $UseProviderNativeMode
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($RemarkData = null, $Key = null, $Category = null, $TypeInGds = null, $ProviderReservationInfoRef = null, $ProviderCode = null, $UseProviderNativeMode = null, $ElStat = null, $KeyOverride = null)
    {
      $this->RemarkData = $RemarkData;
      $this->Key = $Key;
      $this->Category = $Category;
      $this->TypeInGds = $TypeInGds;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->ProviderCode = $ProviderCode;
      $this->UseProviderNativeMode = $UseProviderNativeMode;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return string
     */
    public function getRemarkData()
    {
      return $this->RemarkData;
    }

    /**
     * @param string $RemarkData
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setRemarkData($RemarkData)
    {
      $this->RemarkData = $RemarkData;
      return $this;
    }

    /**
     * @return typeRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous114
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous114 $Category
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return typeGdsAccountingRemark
     */
    public function getTypeInGds()
    {
      return $this->TypeInGds;
    }

    /**
     * @param typeGdsAccountingRemark $TypeInGds
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setTypeInGds($TypeInGds)
    {
      $this->TypeInGds = $TypeInGds;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseProviderNativeMode()
    {
      return $this->UseProviderNativeMode;
    }

    /**
     * @param boolean $UseProviderNativeMode
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setUseProviderNativeMode($UseProviderNativeMode)
    {
      $this->UseProviderNativeMode = $UseProviderNativeMode;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Hotel\AccountingRemark
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
