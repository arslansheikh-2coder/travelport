<?php

namespace FilippoToso\Travelport\Rail;

class UniversalUpdate
{

    /**
     * @var AccountingRemark $AccountingRemark
     */
    public $AccountingRemark = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    public $GeneralRemark = null;

    /**
     * @var OSI $OSI
     */
    public $OSI = null;

    /**
     * @var UnassociatedRemark $UnassociatedRemark
     */
    public $UnassociatedRemark = null;

    /**
     * @var XMLRemark $XMLRemark
     */
    public $XMLRemark = null;

    /**
     * @var Postscript $Postscript
     */
    public $Postscript = null;

    /**
     * @var BookingTravelerInfo $BookingTravelerInfo
     */
    public $BookingTravelerInfo = null;

    /**
     * @var ServiceFeeInfo $ServiceFeeInfo
     */
    public $ServiceFeeInfo = null;

    /**
     * @var Status $Status
     */
    public $Status = null;

    /**
     * @var AgencyContactInfo $AgencyContactInfo
     */
    public $AgencyContactInfo = null;

    /**
     * @var CustomerID $CustomerID
     */
    public $CustomerID = null;

    /**
     * @var CommissionRemark $CommissionRemark
     */
    public $CommissionRemark = null;

    /**
     * @var ConsolidatorRemark $ConsolidatorRemark
     */
    public $ConsolidatorRemark = null;

    /**
     * @var InvoiceRemark $InvoiceRemark
     */
    public $InvoiceRemark = null;

    /**
     * @var ActionStatus $ActionStatus
     */
    public $ActionStatus = null;

    /**
     * @var ReviewBooking $ReviewBooking
     */
    public $ReviewBooking = null;

    /**
     * @var OwnershipChange $OwnershipChange
     */
    public $OwnershipChange = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param OSI $OSI
     * @param UnassociatedRemark $UnassociatedRemark
     * @param XMLRemark $XMLRemark
     * @param Postscript $Postscript
     * @param BookingTravelerInfo $BookingTravelerInfo
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @param AgencyContactInfo $AgencyContactInfo
     * @param CustomerID $CustomerID
     * @param CommissionRemark $CommissionRemark
     * @param ConsolidatorRemark $ConsolidatorRemark
     * @param InvoiceRemark $InvoiceRemark
     * @param ActionStatus $ActionStatus
     * @param ReviewBooking $ReviewBooking
     * @param OwnershipChange $OwnershipChange
     * @param FormOfPayment $FormOfPayment
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $OSI = null, $UnassociatedRemark = null, $XMLRemark = null, $Postscript = null, $BookingTravelerInfo = null, $ServiceFeeInfo = null, $AgencyContactInfo = null, $CustomerID = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $ActionStatus = null, $ReviewBooking = null, $OwnershipChange = null, $FormOfPayment = null)
    {
      $this->AccountingRemark = $AccountingRemark;
      $this->GeneralRemark = $GeneralRemark;
      $this->OSI = $OSI;
      $this->UnassociatedRemark = $UnassociatedRemark;
      $this->XMLRemark = $XMLRemark;
      $this->Postscript = $Postscript;
      $this->BookingTravelerInfo = $BookingTravelerInfo;
      $this->ServiceFeeInfo = $ServiceFeeInfo;
      $this->AgencyContactInfo = $AgencyContactInfo;
      $this->CustomerID = $CustomerID;
      $this->CommissionRemark = $CommissionRemark;
      $this->ConsolidatorRemark = $ConsolidatorRemark;
      $this->InvoiceRemark = $InvoiceRemark;
      $this->ActionStatus = $ActionStatus;
      $this->ReviewBooking = $ReviewBooking;
      $this->OwnershipChange = $OwnershipChange;
      $this->FormOfPayment = $FormOfPayment;
    }

    /**
     * @return AccountingRemark
     */
    public function getAccountingRemark()
    {
      return $this->AccountingRemark;
    }

    /**
     * @param AccountingRemark $AccountingRemark
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return OSI
     */
    public function getOSI()
    {
      return $this->OSI;
    }

    /**
     * @param OSI $OSI
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setOSI($OSI)
    {
      $this->OSI = $OSI;
      return $this;
    }

    /**
     * @return UnassociatedRemark
     */
    public function getUnassociatedRemark()
    {
      return $this->UnassociatedRemark;
    }

    /**
     * @param UnassociatedRemark $UnassociatedRemark
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setUnassociatedRemark($UnassociatedRemark)
    {
      $this->UnassociatedRemark = $UnassociatedRemark;
      return $this;
    }

    /**
     * @return XMLRemark
     */
    public function getXMLRemark()
    {
      return $this->XMLRemark;
    }

    /**
     * @param XMLRemark $XMLRemark
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setXMLRemark($XMLRemark)
    {
      $this->XMLRemark = $XMLRemark;
      return $this;
    }

    /**
     * @return Postscript
     */
    public function getPostscript()
    {
      return $this->Postscript;
    }

    /**
     * @param Postscript $Postscript
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setPostscript($Postscript)
    {
      $this->Postscript = $Postscript;
      return $this;
    }

    /**
     * @return BookingTravelerInfo
     */
    public function getBookingTravelerInfo()
    {
      return $this->BookingTravelerInfo;
    }

    /**
     * @param BookingTravelerInfo $BookingTravelerInfo
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setBookingTravelerInfo($BookingTravelerInfo)
    {
      $this->BookingTravelerInfo = $BookingTravelerInfo;
      return $this;
    }

    /**
     * @return ServiceFeeInfo
     */
    public function getServiceFeeInfo()
    {
      return $this->ServiceFeeInfo;
    }

    /**
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setServiceFeeInfo($ServiceFeeInfo)
    {
      $this->ServiceFeeInfo = $ServiceFeeInfo;
      return $this;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param Status $Status
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return AgencyContactInfo
     */
    public function getAgencyContactInfo()
    {
      return $this->AgencyContactInfo;
    }

    /**
     * @param AgencyContactInfo $AgencyContactInfo
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setAgencyContactInfo($AgencyContactInfo)
    {
      $this->AgencyContactInfo = $AgencyContactInfo;
      return $this;
    }

    /**
     * @return CustomerID
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param CustomerID $CustomerID
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return CommissionRemark
     */
    public function getCommissionRemark()
    {
      return $this->CommissionRemark;
    }

    /**
     * @param CommissionRemark $CommissionRemark
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setCommissionRemark($CommissionRemark)
    {
      $this->CommissionRemark = $CommissionRemark;
      return $this;
    }

    /**
     * @return ConsolidatorRemark
     */
    public function getConsolidatorRemark()
    {
      return $this->ConsolidatorRemark;
    }

    /**
     * @param ConsolidatorRemark $ConsolidatorRemark
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setConsolidatorRemark($ConsolidatorRemark)
    {
      $this->ConsolidatorRemark = $ConsolidatorRemark;
      return $this;
    }

    /**
     * @return InvoiceRemark
     */
    public function getInvoiceRemark()
    {
      return $this->InvoiceRemark;
    }

    /**
     * @param InvoiceRemark $InvoiceRemark
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setInvoiceRemark($InvoiceRemark)
    {
      $this->InvoiceRemark = $InvoiceRemark;
      return $this;
    }

    /**
     * @return ActionStatus
     */
    public function getActionStatus()
    {
      return $this->ActionStatus;
    }

    /**
     * @param ActionStatus $ActionStatus
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setActionStatus($ActionStatus)
    {
      $this->ActionStatus = $ActionStatus;
      return $this;
    }

    /**
     * @return ReviewBooking
     */
    public function getReviewBooking()
    {
      return $this->ReviewBooking;
    }

    /**
     * @param ReviewBooking $ReviewBooking
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setReviewBooking($ReviewBooking)
    {
      $this->ReviewBooking = $ReviewBooking;
      return $this;
    }

    /**
     * @return OwnershipChange
     */
    public function getOwnershipChange()
    {
      return $this->OwnershipChange;
    }

    /**
     * @param OwnershipChange $OwnershipChange
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setOwnershipChange($OwnershipChange)
    {
      $this->OwnershipChange = $OwnershipChange;
      return $this;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\Rail\UniversalUpdate
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

}
