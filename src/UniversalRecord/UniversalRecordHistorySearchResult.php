<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordHistorySearchResult
{

    /**
     * @var string $Old
     */
    public $Old = null;

    /**
     * @var string $New
     */
    public $New = null;

    /**
     * @var string $ModifiedBy
     */
    public $ModifiedBy = null;

    /**
     * @var string $ModifiedDate
     */
    public $ModifiedDate = null;

    /**
     * @var string $ElementType
     */
    public $ElementType = null;

    /**
     * @var string $Action
     */
    public $Action = null;

    /**
     * @var string $TransactionId
     */
    public $TransactionId = null;

    /**
     * @var anonymous518 $AgentOverride
     */
    public $AgentOverride = null;

    /**
     * @param string $ModifiedBy
     * @param string $ModifiedDate
     * @param string $ElementType
     * @param string $Action
     * @param string $TransactionId
     * @param anonymous518 $AgentOverride
     */
    public function __construct($ModifiedBy = null, $ModifiedDate = null, $ElementType = null, $Action = null, $TransactionId = null, $AgentOverride = null)
    {
      $this->ModifiedBy = $ModifiedBy;
      $this->ModifiedDate = $ModifiedDate;
      $this->ElementType = $ElementType;
      $this->Action = $Action;
      $this->TransactionId = $TransactionId;
      $this->AgentOverride = $AgentOverride;
    }

    /**
     * @return string
     */
    public function getOld()
    {
      return $this->Old;
    }

    /**
     * @param string $Old
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchResult
     */
    public function setOld($Old)
    {
      $this->Old = $Old;
      return $this;
    }

    /**
     * @return string
     */
    public function getNew()
    {
      return $this->New;
    }

    /**
     * @param string $New
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchResult
     */
    public function setNew($New)
    {
      $this->New = $New;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchResult
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param string $ModifiedDate
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchResult
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getElementType()
    {
      return $this->ElementType;
    }

    /**
     * @param string $ElementType
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchResult
     */
    public function setElementType($ElementType)
    {
      $this->ElementType = $ElementType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param string $Action
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchResult
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
      return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchResult
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

    /**
     * @return anonymous518
     */
    public function getAgentOverride()
    {
      return $this->AgentOverride;
    }

    /**
     * @param anonymous518 $AgentOverride
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchResult
     */
    public function setAgentOverride($AgentOverride)
    {
      $this->AgentOverride = $AgentOverride;
      return $this;
    }

}
