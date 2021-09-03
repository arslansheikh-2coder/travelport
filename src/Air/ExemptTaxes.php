<?php

namespace FilippoToso\Travelport\Air;

class ExemptTaxes
{

    /**
     * @var typeCountry[] $CountryCode
     */
    public $CountryCode = null;

    /**
     * @var string[] $TaxCategory
     */
    public $TaxCategory = null;

    /**
     * @var boolean $AllTaxes
     */
    public $AllTaxes = null;

    /**
     * @var anonymous803 $TaxTerritory
     */
    public $TaxTerritory = null;

    /**
     * @var anonymous804 $CompanyName
     */
    public $CompanyName = null;

    /**
     * @param boolean $AllTaxes
     * @param anonymous803 $TaxTerritory
     * @param anonymous804 $CompanyName
     */
    public function __construct($AllTaxes = null, $TaxTerritory = null, $CompanyName = null)
    {
      $this->AllTaxes = $AllTaxes;
      $this->TaxTerritory = $TaxTerritory;
      $this->CompanyName = $CompanyName;
    }

    /**
     * @return typeCountry[]
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param typeCountry[] $CountryCode
     * @return \FilippoToso\Travelport\Air\ExemptTaxes
     */
    public function setCountryCode(array $CountryCode = null)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getTaxCategory()
    {
      return $this->TaxCategory;
    }

    /**
     * @param string[] $TaxCategory
     * @return \FilippoToso\Travelport\Air\ExemptTaxes
     */
    public function setTaxCategory(array $TaxCategory = null)
    {
      $this->TaxCategory = $TaxCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllTaxes()
    {
      return $this->AllTaxes;
    }

    /**
     * @param boolean $AllTaxes
     * @return \FilippoToso\Travelport\Air\ExemptTaxes
     */
    public function setAllTaxes($AllTaxes)
    {
      $this->AllTaxes = $AllTaxes;
      return $this;
    }

    /**
     * @return anonymous803
     */
    public function getTaxTerritory()
    {
      return $this->TaxTerritory;
    }

    /**
     * @param anonymous803 $TaxTerritory
     * @return \FilippoToso\Travelport\Air\ExemptTaxes
     */
    public function setTaxTerritory($TaxTerritory)
    {
      $this->TaxTerritory = $TaxTerritory;
      return $this;
    }

    /**
     * @return anonymous804
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param anonymous804 $CompanyName
     * @return \FilippoToso\Travelport\Air\ExemptTaxes
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

}
