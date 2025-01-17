<?php

namespace FilippoToso\Travelport\UProfile;

class Commission extends typeKeyElement
{

    /**
     * @var typeCommissionCategory $Type
     */
    public $Type = null;

    /**
     * @var typeSupplierType $SupplierType
     */
    public $SupplierType = null;

    /**
     * @var typeSupplier $Supplier
     */
    public $Supplier = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percentage
     */
    public $Percentage = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    public $PriorityOrder = null;

    /**
     * @param typeRef $Key
     * @param typeCommissionCategory $Type
     * @param typeSupplierType $SupplierType
     * @param typeSupplier $Supplier
     * @param typeMoney $Amount
     * @param typePercentageWithDecimal $Percentage
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $Type = null, $SupplierType = null, $Supplier = null, $Amount = null, $Percentage = null, $PriorityOrder = null)
    {
      parent::__construct($Key);
      $this->Type = $Type;
      $this->SupplierType = $SupplierType;
      $this->Supplier = $Supplier;
      $this->Amount = $Amount;
      $this->Percentage = $Percentage;
      $this->PriorityOrder = $PriorityOrder;
    }

    /**
     * @return typeCommissionCategory
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeCommissionCategory $Type
     * @return \FilippoToso\Travelport\UProfile\Commission
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeSupplierType
     */
    public function getSupplierType()
    {
      return $this->SupplierType;
    }

    /**
     * @param typeSupplierType $SupplierType
     * @return \FilippoToso\Travelport\UProfile\Commission
     */
    public function setSupplierType($SupplierType)
    {
      $this->SupplierType = $SupplierType;
      return $this;
    }

    /**
     * @return typeSupplier
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param typeSupplier $Supplier
     * @return \FilippoToso\Travelport\UProfile\Commission
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\UProfile\Commission
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param typePercentageWithDecimal $Percentage
     * @return \FilippoToso\Travelport\UProfile\Commission
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\Commission
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
