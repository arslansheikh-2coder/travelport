<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileHistoryRetrieveCriteria
{

    /**
     * @var typeProfileID $AgentID
     */
    public $AgentID = null;

    /**
     * @var date $StartDate
     */
    public $StartDate = null;

    /**
     * @var date $EndDate
     */
    public $EndDate = null;

    /**
     * @var typeFieldID $FieldID
     */
    public $FieldID = null;

    /**
     * @var typeFieldID $FieldGroupID
     */
    public $FieldGroupID = null;

    /**
     * @var typeProfileComponentType $FieldGroupType
     */
    public $FieldGroupType = null;

    /**
     * @param typeProfileID $AgentID
     * @param date $StartDate
     * @param date $EndDate
     * @param typeFieldID $FieldID
     * @param typeFieldID $FieldGroupID
     * @param typeProfileComponentType $FieldGroupType
     */
    public function __construct($AgentID = null, $StartDate = null, $EndDate = null, $FieldID = null, $FieldGroupID = null, $FieldGroupType = null)
    {
      $this->AgentID = $AgentID;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->FieldID = $FieldID;
      $this->FieldGroupID = $FieldGroupID;
      $this->FieldGroupType = $FieldGroupType;
    }

    /**
     * @return typeProfileID
     */
    public function getAgentID()
    {
      return $this->AgentID;
    }

    /**
     * @param typeProfileID $AgentID
     * @return \FilippoToso\Travelport\UProfile\ProfileHistoryRetrieveCriteria
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return \FilippoToso\Travelport\UProfile\ProfileHistoryRetrieveCriteria
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param date $EndDate
     * @return \FilippoToso\Travelport\UProfile\ProfileHistoryRetrieveCriteria
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return typeFieldID
     */
    public function getFieldID()
    {
      return $this->FieldID;
    }

    /**
     * @param typeFieldID $FieldID
     * @return \FilippoToso\Travelport\UProfile\ProfileHistoryRetrieveCriteria
     */
    public function setFieldID($FieldID)
    {
      $this->FieldID = $FieldID;
      return $this;
    }

    /**
     * @return typeFieldID
     */
    public function getFieldGroupID()
    {
      return $this->FieldGroupID;
    }

    /**
     * @param typeFieldID $FieldGroupID
     * @return \FilippoToso\Travelport\UProfile\ProfileHistoryRetrieveCriteria
     */
    public function setFieldGroupID($FieldGroupID)
    {
      $this->FieldGroupID = $FieldGroupID;
      return $this;
    }

    /**
     * @return typeProfileComponentType
     */
    public function getFieldGroupType()
    {
      return $this->FieldGroupType;
    }

    /**
     * @param typeProfileComponentType $FieldGroupType
     * @return \FilippoToso\Travelport\UProfile\ProfileHistoryRetrieveCriteria
     */
    public function setFieldGroupType($FieldGroupType)
    {
      $this->FieldGroupType = $FieldGroupType;
      return $this;
    }

}
