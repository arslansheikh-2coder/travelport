<?php

namespace FilippoToso\Travelport\Air;

class typeErrorInfo
{

    /**
     * @var string $Code
     */
    public $Code = null;

    /**
     * @var string $Service
     */
    public $Service = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @var string $TransactionId
     */
    public $TransactionId = null;

    /**
     * @var string $TraceId
     */
    public $TraceId = null;

    /**
     * @var string $CommandHistory
     */
    public $CommandHistory = null;

    /**
     * @var Auxdata $Auxdata
     */
    public $Auxdata = null;

    /**
     * @var string $StackTrace
     */
    public $StackTrace = null;

    /**
     * @param string $Code
     * @param string $Service
     * @param string $Type
     * @param string $Description
     * @param string $TransactionId
     * @param Auxdata $Auxdata
     */
    public function __construct($Code = null, $Service = null, $Type = null, $Description = null, $TransactionId = null, $Auxdata = null)
    {
      $this->Code = $Code;
      $this->Service = $Service;
      $this->Type = $Type;
      $this->Description = $Description;
      $this->TransactionId = $TransactionId;
      $this->Auxdata = $Auxdata;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\Air\typeErrorInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param string $Service
     * @return \FilippoToso\Travelport\Air\typeErrorInfo
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Air\typeErrorInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Air\typeErrorInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\Air\typeErrorInfo
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTraceId()
    {
      return $this->TraceId;
    }

    /**
     * @param string $TraceId
     * @return \FilippoToso\Travelport\Air\typeErrorInfo
     */
    public function setTraceId($TraceId)
    {
      $this->TraceId = $TraceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommandHistory()
    {
      return $this->CommandHistory;
    }

    /**
     * @param string $CommandHistory
     * @return \FilippoToso\Travelport\Air\typeErrorInfo
     */
    public function setCommandHistory($CommandHistory)
    {
      $this->CommandHistory = $CommandHistory;
      return $this;
    }

    /**
     * @return Auxdata
     */
    public function getAuxdata()
    {
      return $this->Auxdata;
    }

    /**
     * @param Auxdata $Auxdata
     * @return \FilippoToso\Travelport\Air\typeErrorInfo
     */
    public function setAuxdata($Auxdata)
    {
      $this->Auxdata = $Auxdata;
      return $this;
    }

    /**
     * @return string
     */
    public function getStackTrace()
    {
      return $this->StackTrace;
    }

    /**
     * @param string $StackTrace
     * @return \FilippoToso\Travelport\Air\typeErrorInfo
     */
    public function setStackTrace($StackTrace)
    {
      $this->StackTrace = $StackTrace;
      return $this;
    }

}
