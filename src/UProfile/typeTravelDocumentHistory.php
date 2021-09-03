<?php

namespace FilippoToso\Travelport\UProfile;

class typeTravelDocumentHistory extends typeKeyElement
{

    /**
     * @var typeTravelDocumentAddressHistory $Address
     */
    public $Address = null;

    /**
     * @var typeTravelDocumentType $Type
     */
    public $Type = null;

    /**
     * @var StringLength1to255 $DocumentNumber
     */
    public $DocumentNumber = null;

    /**
     * @var date $IssuedDate
     */
    public $IssuedDate = null;

    /**
     * @var date $ExpirationDate
     */
    public $ExpirationDate = null;

    /**
     * @var StringLength1to255 $LocationIssuedDescription
     */
    public $LocationIssuedDescription = null;

    /**
     * @var StringLength1to128 $GivenName
     */
    public $GivenName = null;

    /**
     * @var StringLength1to128 $MiddleName
     */
    public $MiddleName = null;

    /**
     * @var StringLength1to128 $Surname
     */
    public $Surname = null;

    /**
     * @var typeGender $Gender
     */
    public $Gender = null;

    /**
     * @var StringLength1to255 $NationalIdentifier
     */
    public $NationalIdentifier = null;

    /**
     * @var date $BirthDate
     */
    public $BirthDate = null;

    /**
     * @var StringLength1to128 $PlaceOfBirth
     */
    public $PlaceOfBirth = null;

    /**
     * @var typeCountry $Nationality
     */
    public $Nationality = null;

    /**
     * @var typeCountry $Citizenship
     */
    public $Citizenship = null;

    /**
     * @var typeCountry $IssuedByCountry
     */
    public $IssuedByCountry = null;

    /**
     * @var StringLength1to128 $IssuedByOtherCountryName
     */
    public $IssuedByOtherCountryName = null;

    /**
     * @var anonymous699 $Height
     */
    public $Height = null;

    /**
     * @var anonymous700 $HeightUnit
     */
    public $HeightUnit = null;

    /**
     * @var anonymous701 $Weight
     */
    public $Weight = null;

    /**
     * @var anonymous702 $WeightUnit
     */
    public $WeightUnit = null;

    /**
     * @var StringLength1to255 $Residence
     */
    public $Residence = null;

    /**
     * @var StringLength1to255 $EyeColor
     */
    public $EyeColor = null;

    /**
     * @var StringLength1to255 $MilitaryStatus
     */
    public $MilitaryStatus = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    public $PriorityOrder = null;

    /**
     * @var typeGeoPoliticalAreaType $IssuedForGeoPoliticalAreaType
     */
    public $IssuedForGeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $IssuedForGeoPoliticalAreaCode
     */
    public $IssuedForGeoPoliticalAreaCode = null;

    /**
     * @param typeRef $Key
     * @param typeTravelDocumentType $Type
     * @param StringLength1to255 $DocumentNumber
     * @param date $IssuedDate
     * @param date $ExpirationDate
     * @param StringLength1to255 $LocationIssuedDescription
     * @param StringLength1to128 $GivenName
     * @param StringLength1to128 $MiddleName
     * @param StringLength1to128 $Surname
     * @param typeGender $Gender
     * @param StringLength1to255 $NationalIdentifier
     * @param date $BirthDate
     * @param StringLength1to128 $PlaceOfBirth
     * @param typeCountry $Nationality
     * @param typeCountry $Citizenship
     * @param typeCountry $IssuedByCountry
     * @param StringLength1to128 $IssuedByOtherCountryName
     * @param anonymous699 $Height
     * @param anonymous700 $HeightUnit
     * @param anonymous701 $Weight
     * @param anonymous702 $WeightUnit
     * @param StringLength1to255 $Residence
     * @param StringLength1to255 $EyeColor
     * @param StringLength1to255 $MilitaryStatus
     * @param typePriorityOrder $PriorityOrder
     * @param typeGeoPoliticalAreaType $IssuedForGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $IssuedForGeoPoliticalAreaCode
     */
    public function __construct($Key = null, $Type = null, $DocumentNumber = null, $IssuedDate = null, $ExpirationDate = null, $LocationIssuedDescription = null, $GivenName = null, $MiddleName = null, $Surname = null, $Gender = null, $NationalIdentifier = null, $BirthDate = null, $PlaceOfBirth = null, $Nationality = null, $Citizenship = null, $IssuedByCountry = null, $IssuedByOtherCountryName = null, $Height = null, $HeightUnit = null, $Weight = null, $WeightUnit = null, $Residence = null, $EyeColor = null, $MilitaryStatus = null, $PriorityOrder = null, $IssuedForGeoPoliticalAreaType = null, $IssuedForGeoPoliticalAreaCode = null)
    {
      parent::__construct($Key);
      $this->Type = $Type;
      $this->DocumentNumber = $DocumentNumber;
      $this->IssuedDate = $IssuedDate;
      $this->ExpirationDate = $ExpirationDate;
      $this->LocationIssuedDescription = $LocationIssuedDescription;
      $this->GivenName = $GivenName;
      $this->MiddleName = $MiddleName;
      $this->Surname = $Surname;
      $this->Gender = $Gender;
      $this->NationalIdentifier = $NationalIdentifier;
      $this->BirthDate = $BirthDate;
      $this->PlaceOfBirth = $PlaceOfBirth;
      $this->Nationality = $Nationality;
      $this->Citizenship = $Citizenship;
      $this->IssuedByCountry = $IssuedByCountry;
      $this->IssuedByOtherCountryName = $IssuedByOtherCountryName;
      $this->Height = $Height;
      $this->HeightUnit = $HeightUnit;
      $this->Weight = $Weight;
      $this->WeightUnit = $WeightUnit;
      $this->Residence = $Residence;
      $this->EyeColor = $EyeColor;
      $this->MilitaryStatus = $MilitaryStatus;
      $this->PriorityOrder = $PriorityOrder;
      $this->IssuedForGeoPoliticalAreaType = $IssuedForGeoPoliticalAreaType;
      $this->IssuedForGeoPoliticalAreaCode = $IssuedForGeoPoliticalAreaCode;
    }

    /**
     * @return typeTravelDocumentAddressHistory
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeTravelDocumentAddressHistory $Address
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return typeTravelDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeTravelDocumentType $Type
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param StringLength1to255 $DocumentNumber
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getIssuedDate()
    {
      return $this->IssuedDate;
    }

    /**
     * @param date $IssuedDate
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setIssuedDate($IssuedDate)
    {
      $this->IssuedDate = $IssuedDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param date $ExpirationDate
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getLocationIssuedDescription()
    {
      return $this->LocationIssuedDescription;
    }

    /**
     * @param StringLength1to255 $LocationIssuedDescription
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setLocationIssuedDescription($LocationIssuedDescription)
    {
      $this->LocationIssuedDescription = $LocationIssuedDescription;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getGivenName()
    {
      return $this->GivenName;
    }

    /**
     * @param StringLength1to128 $GivenName
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param StringLength1to128 $MiddleName
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param StringLength1to128 $Surname
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return typeGender
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param typeGender $Gender
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getNationalIdentifier()
    {
      return $this->NationalIdentifier;
    }

    /**
     * @param StringLength1to255 $NationalIdentifier
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setNationalIdentifier($NationalIdentifier)
    {
      $this->NationalIdentifier = $NationalIdentifier;
      return $this;
    }

    /**
     * @return date
     */
    public function getBirthDate()
    {
      return $this->BirthDate;
    }

    /**
     * @param date $BirthDate
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setBirthDate($BirthDate)
    {
      $this->BirthDate = $BirthDate;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getPlaceOfBirth()
    {
      return $this->PlaceOfBirth;
    }

    /**
     * @param StringLength1to128 $PlaceOfBirth
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setPlaceOfBirth($PlaceOfBirth)
    {
      $this->PlaceOfBirth = $PlaceOfBirth;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getNationality()
    {
      return $this->Nationality;
    }

    /**
     * @param typeCountry $Nationality
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setNationality($Nationality)
    {
      $this->Nationality = $Nationality;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCitizenship()
    {
      return $this->Citizenship;
    }

    /**
     * @param typeCountry $Citizenship
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setCitizenship($Citizenship)
    {
      $this->Citizenship = $Citizenship;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getIssuedByCountry()
    {
      return $this->IssuedByCountry;
    }

    /**
     * @param typeCountry $IssuedByCountry
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setIssuedByCountry($IssuedByCountry)
    {
      $this->IssuedByCountry = $IssuedByCountry;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getIssuedByOtherCountryName()
    {
      return $this->IssuedByOtherCountryName;
    }

    /**
     * @param StringLength1to128 $IssuedByOtherCountryName
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setIssuedByOtherCountryName($IssuedByOtherCountryName)
    {
      $this->IssuedByOtherCountryName = $IssuedByOtherCountryName;
      return $this;
    }

    /**
     * @return anonymous699
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param anonymous699 $Height
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return anonymous700
     */
    public function getHeightUnit()
    {
      return $this->HeightUnit;
    }

    /**
     * @param anonymous700 $HeightUnit
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setHeightUnit($HeightUnit)
    {
      $this->HeightUnit = $HeightUnit;
      return $this;
    }

    /**
     * @return anonymous701
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param anonymous701 $Weight
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return anonymous702
     */
    public function getWeightUnit()
    {
      return $this->WeightUnit;
    }

    /**
     * @param anonymous702 $WeightUnit
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setWeightUnit($WeightUnit)
    {
      $this->WeightUnit = $WeightUnit;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getResidence()
    {
      return $this->Residence;
    }

    /**
     * @param StringLength1to255 $Residence
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setResidence($Residence)
    {
      $this->Residence = $Residence;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getEyeColor()
    {
      return $this->EyeColor;
    }

    /**
     * @param StringLength1to255 $EyeColor
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setEyeColor($EyeColor)
    {
      $this->EyeColor = $EyeColor;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getMilitaryStatus()
    {
      return $this->MilitaryStatus;
    }

    /**
     * @param StringLength1to255 $MilitaryStatus
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setMilitaryStatus($MilitaryStatus)
    {
      $this->MilitaryStatus = $MilitaryStatus;
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getIssuedForGeoPoliticalAreaType()
    {
      return $this->IssuedForGeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $IssuedForGeoPoliticalAreaType
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setIssuedForGeoPoliticalAreaType($IssuedForGeoPoliticalAreaType)
    {
      $this->IssuedForGeoPoliticalAreaType = $IssuedForGeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getIssuedForGeoPoliticalAreaCode()
    {
      return $this->IssuedForGeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $IssuedForGeoPoliticalAreaCode
     * @return \FilippoToso\Travelport\UProfile\typeTravelDocumentHistory
     */
    public function setIssuedForGeoPoliticalAreaCode($IssuedForGeoPoliticalAreaCode)
    {
      $this->IssuedForGeoPoliticalAreaCode = $IssuedForGeoPoliticalAreaCode;
      return $this;
    }

}
