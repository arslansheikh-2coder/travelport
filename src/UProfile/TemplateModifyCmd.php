<?php

namespace FilippoToso\Travelport\UProfile;

class TemplateModifyCmd
{

    /**
     * @var TemplateInfoUpdate $TemplateInfoUpdate
     */
    public $TemplateInfoUpdate = null;

    /**
     * @var FixedFieldUpdate $FixedFieldUpdate
     */
    public $FixedFieldUpdate = null;

    /**
     * @var FixedGroupUpdate $FixedGroupUpdate
     */
    public $FixedGroupUpdate = null;

    /**
     * @var typeEditableCustomField $CustomFieldAdd
     */
    public $CustomFieldAdd = null;

    /**
     * @var typeEditableCustomField $CustomFieldUpdate
     */
    public $CustomFieldUpdate = null;

    /**
     * @var typeCommonEditableGroup $CustomFieldGroupAdd
     */
    public $CustomFieldGroupAdd = null;

    /**
     * @var typeCommonEditableGroup $CustomFieldGroupUpdate
     */
    public $CustomFieldGroupUpdate = null;

    /**
     * @var EndpointAdd $EndpointAdd
     */
    public $EndpointAdd = null;

    /**
     * @var typeEditableEndpoint $EndpointRemove
     */
    public $EndpointRemove = null;

    /**
     * @var typeCustomFieldAndGroupDeleteRef $CustomFieldDelete
     */
    public $CustomFieldDelete = null;

    /**
     * @var typeCustomFieldAndGroupDeleteRef $CustomFieldGroupDelete
     */
    public $CustomFieldGroupDelete = null;

    /**
     * @param TemplateInfoUpdate $TemplateInfoUpdate
     * @param FixedFieldUpdate $FixedFieldUpdate
     * @param FixedGroupUpdate $FixedGroupUpdate
     * @param typeEditableCustomField $CustomFieldAdd
     * @param typeEditableCustomField $CustomFieldUpdate
     * @param typeCommonEditableGroup $CustomFieldGroupAdd
     * @param typeCommonEditableGroup $CustomFieldGroupUpdate
     * @param EndpointAdd $EndpointAdd
     * @param typeEditableEndpoint $EndpointRemove
     * @param typeCustomFieldAndGroupDeleteRef $CustomFieldDelete
     * @param typeCustomFieldAndGroupDeleteRef $CustomFieldGroupDelete
     */
    public function __construct($TemplateInfoUpdate = null, $FixedFieldUpdate = null, $FixedGroupUpdate = null, $CustomFieldAdd = null, $CustomFieldUpdate = null, $CustomFieldGroupAdd = null, $CustomFieldGroupUpdate = null, $EndpointAdd = null, $EndpointRemove = null, $CustomFieldDelete = null, $CustomFieldGroupDelete = null)
    {
      $this->TemplateInfoUpdate = $TemplateInfoUpdate;
      $this->FixedFieldUpdate = $FixedFieldUpdate;
      $this->FixedGroupUpdate = $FixedGroupUpdate;
      $this->CustomFieldAdd = $CustomFieldAdd;
      $this->CustomFieldUpdate = $CustomFieldUpdate;
      $this->CustomFieldGroupAdd = $CustomFieldGroupAdd;
      $this->CustomFieldGroupUpdate = $CustomFieldGroupUpdate;
      $this->EndpointAdd = $EndpointAdd;
      $this->EndpointRemove = $EndpointRemove;
      $this->CustomFieldDelete = $CustomFieldDelete;
      $this->CustomFieldGroupDelete = $CustomFieldGroupDelete;
    }

    /**
     * @return TemplateInfoUpdate
     */
    public function getTemplateInfoUpdate()
    {
      return $this->TemplateInfoUpdate;
    }

    /**
     * @param TemplateInfoUpdate $TemplateInfoUpdate
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setTemplateInfoUpdate($TemplateInfoUpdate)
    {
      $this->TemplateInfoUpdate = $TemplateInfoUpdate;
      return $this;
    }

    /**
     * @return FixedFieldUpdate
     */
    public function getFixedFieldUpdate()
    {
      return $this->FixedFieldUpdate;
    }

    /**
     * @param FixedFieldUpdate $FixedFieldUpdate
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setFixedFieldUpdate($FixedFieldUpdate)
    {
      $this->FixedFieldUpdate = $FixedFieldUpdate;
      return $this;
    }

    /**
     * @return FixedGroupUpdate
     */
    public function getFixedGroupUpdate()
    {
      return $this->FixedGroupUpdate;
    }

    /**
     * @param FixedGroupUpdate $FixedGroupUpdate
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setFixedGroupUpdate($FixedGroupUpdate)
    {
      $this->FixedGroupUpdate = $FixedGroupUpdate;
      return $this;
    }

    /**
     * @return typeEditableCustomField
     */
    public function getCustomFieldAdd()
    {
      return $this->CustomFieldAdd;
    }

    /**
     * @param typeEditableCustomField $CustomFieldAdd
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldAdd($CustomFieldAdd)
    {
      $this->CustomFieldAdd = $CustomFieldAdd;
      return $this;
    }

    /**
     * @return typeEditableCustomField
     */
    public function getCustomFieldUpdate()
    {
      return $this->CustomFieldUpdate;
    }

    /**
     * @param typeEditableCustomField $CustomFieldUpdate
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldUpdate($CustomFieldUpdate)
    {
      $this->CustomFieldUpdate = $CustomFieldUpdate;
      return $this;
    }

    /**
     * @return typeCommonEditableGroup
     */
    public function getCustomFieldGroupAdd()
    {
      return $this->CustomFieldGroupAdd;
    }

    /**
     * @param typeCommonEditableGroup $CustomFieldGroupAdd
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldGroupAdd($CustomFieldGroupAdd)
    {
      $this->CustomFieldGroupAdd = $CustomFieldGroupAdd;
      return $this;
    }

    /**
     * @return typeCommonEditableGroup
     */
    public function getCustomFieldGroupUpdate()
    {
      return $this->CustomFieldGroupUpdate;
    }

    /**
     * @param typeCommonEditableGroup $CustomFieldGroupUpdate
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldGroupUpdate($CustomFieldGroupUpdate)
    {
      $this->CustomFieldGroupUpdate = $CustomFieldGroupUpdate;
      return $this;
    }

    /**
     * @return EndpointAdd
     */
    public function getEndpointAdd()
    {
      return $this->EndpointAdd;
    }

    /**
     * @param EndpointAdd $EndpointAdd
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setEndpointAdd($EndpointAdd)
    {
      $this->EndpointAdd = $EndpointAdd;
      return $this;
    }

    /**
     * @return typeEditableEndpoint
     */
    public function getEndpointRemove()
    {
      return $this->EndpointRemove;
    }

    /**
     * @param typeEditableEndpoint $EndpointRemove
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setEndpointRemove($EndpointRemove)
    {
      $this->EndpointRemove = $EndpointRemove;
      return $this;
    }

    /**
     * @return typeCustomFieldAndGroupDeleteRef
     */
    public function getCustomFieldDelete()
    {
      return $this->CustomFieldDelete;
    }

    /**
     * @param typeCustomFieldAndGroupDeleteRef $CustomFieldDelete
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldDelete($CustomFieldDelete)
    {
      $this->CustomFieldDelete = $CustomFieldDelete;
      return $this;
    }

    /**
     * @return typeCustomFieldAndGroupDeleteRef
     */
    public function getCustomFieldGroupDelete()
    {
      return $this->CustomFieldGroupDelete;
    }

    /**
     * @param typeCustomFieldAndGroupDeleteRef $CustomFieldGroupDelete
     * @return \FilippoToso\Travelport\UProfile\TemplateModifyCmd
     */
    public function setCustomFieldGroupDelete($CustomFieldGroupDelete)
    {
      $this->CustomFieldGroupDelete = $CustomFieldGroupDelete;
      return $this;
    }

}
