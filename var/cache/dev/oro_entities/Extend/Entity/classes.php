<?php

namespace Extend\Entity;

/** Start: EX_OroScopeBundle_Scope */
abstract class EX_OroScopeBundle_Scope implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $organization = null;
    protected $user = null;
    protected $localization = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getOrganization()
    {
        return $this->organization;
    }

    public function setOrganization($value)
    {
        $this->organization = $value; return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($value)
    {
        $this->user = $value; return $this;
    }

    public function getLocalization()
    {
        return $this->localization;
    }

    public function setLocalization($value)
    {
        $this->localization = $value; return $this;
    }
}
/** End: EX_OroScopeBundle_Scope */

/** Start: EX_OroOrganizationBundle_Organization */
abstract class EX_OroOrganizationBundle_Organization implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroOrganizationBundle_Organization */

/** Start: EX_OroOrganizationBundle_BusinessUnit */
abstract class EX_OroOrganizationBundle_BusinessUnit implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $extend_description = null;
    protected $serialized_data = null;

    public function __construct()
    {
    }

    public function getExtendDescription()
    {
        return $this->extend_description;
    }

    public function setExtendDescription($value)
    {
        $this->extend_description = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroOrganizationBundle_BusinessUnit */

/** Start: EX_OroAttachmentBundle_FileItem */
abstract class EX_OroAttachmentBundle_FileItem implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroAttachmentBundle_FileItem */

/** Start: EX_OroAttachmentBundle_Attachment */
abstract class EX_OroAttachmentBundle_Attachment implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $account_8d93c122 = null;
    protected $opportunity_f89bd07c = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getAccount8d93c122()
    {
        return $this->account_8d93c122;
    }

    public function setAccount8d93c122($value)
    {
        $this->account_8d93c122 = $value; return $this;
    }

    public function getOpportunityF89bd07c()
    {
        return $this->opportunity_f89bd07c;
    }

    public function setOpportunityF89bd07c($value)
    {
        $this->opportunity_f89bd07c = $value; return $this;
    }

    private function resetTargets()
    {
        $this->account_8d93c122 = null;
        $this->opportunity_f89bd07c = null;
    }

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        return false;
    }

    /**
     * Gets the entity this entity is associated with
     *
     * @return object|null Any configurable entity
     */
    public function getTarget()
    {
        if (null !== $this->account_8d93c122) { return $this->account_8d93c122; }
        if (null !== $this->opportunity_f89bd07c) { return $this->opportunity_f89bd07c; }
        return null;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function setTarget($target)
    {
        if (null === $target) { $this->resetTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        // This entity can be associated with only one another entity
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { $this->resetTargets(); $this->account_8d93c122 = $target; return $this; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { $this->resetTargets(); $this->opportunity_f89bd07c = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroAttachmentBundle_Attachment */

/** Start: EX_OroAttachmentBundle_File */
abstract class EX_OroAttachmentBundle_File implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $digitalAsset = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getDigitalAsset()
    {
        return $this->digitalAsset;
    }

    public function setDigitalAsset($value)
    {
        $this->digitalAsset = $value; return $this;
    }
}
/** End: EX_OroAttachmentBundle_File */

/** Start: EX_OroEmailBundle_EmailTemplateTranslation */
abstract class EX_OroEmailBundle_EmailTemplateTranslation implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroEmailBundle_EmailTemplateTranslation */

/** Start: EX_OroEmailBundle_Email */
abstract class EX_OroEmailBundle_Email implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $user_d41b1c4b = null;
    protected $contact_a6d273bd = null;
    protected $account_638472a8 = null;
    protected $task_1a1af651 = null;
    protected $lead_23c40e3e = null;
    protected $opportunity_6b9fac9c = null;
    protected $b2b_customer_88d7394f = null;
    protected $contact_request_4e3a1184 = null;
    protected $case_entity_eafc92f2 = null;

    public function __construct()
    {
        $this->user_d41b1c4b = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_a6d273bd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_638472a8 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->task_1a1af651 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_23c40e3e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_6b9fac9c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_88d7394f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_request_4e3a1184 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_eafc92f2 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getUserD41b1c4b()
    {
        return $this->user_d41b1c4b;
    }

    public function setUserD41b1c4b($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->user_d41b1c4b instanceof \Doctrine\Common\Collections\Collection) {
            $this->user_d41b1c4b = $value;
            return $this;
        }
        foreach ($this->user_d41b1c4b as $item) {
            $this->removeUserD41b1c4b($item);
        }
        foreach ($value as $item) {
            $this->addUserD41b1c4b($item);
        }
        return $this;
    }

    public function getContactA6d273bd()
    {
        return $this->contact_a6d273bd;
    }

    public function setContactA6d273bd($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_a6d273bd instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_a6d273bd = $value;
            return $this;
        }
        foreach ($this->contact_a6d273bd as $item) {
            $this->removeContactA6d273bd($item);
        }
        foreach ($value as $item) {
            $this->addContactA6d273bd($item);
        }
        return $this;
    }

    public function getAccount638472a8()
    {
        return $this->account_638472a8;
    }

    public function setAccount638472a8($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_638472a8 instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_638472a8 = $value;
            return $this;
        }
        foreach ($this->account_638472a8 as $item) {
            $this->removeAccount638472a8($item);
        }
        foreach ($value as $item) {
            $this->addAccount638472a8($item);
        }
        return $this;
    }

    public function getTask1a1af651()
    {
        return $this->task_1a1af651;
    }

    public function setTask1a1af651($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->task_1a1af651 instanceof \Doctrine\Common\Collections\Collection) {
            $this->task_1a1af651 = $value;
            return $this;
        }
        foreach ($this->task_1a1af651 as $item) {
            $this->removeTask1a1af651($item);
        }
        foreach ($value as $item) {
            $this->addTask1a1af651($item);
        }
        return $this;
    }

    public function getLead23c40e3e()
    {
        return $this->lead_23c40e3e;
    }

    public function setLead23c40e3e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_23c40e3e instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_23c40e3e = $value;
            return $this;
        }
        foreach ($this->lead_23c40e3e as $item) {
            $this->removeLead23c40e3e($item);
        }
        foreach ($value as $item) {
            $this->addLead23c40e3e($item);
        }
        return $this;
    }

    public function getOpportunity6b9fac9c()
    {
        return $this->opportunity_6b9fac9c;
    }

    public function setOpportunity6b9fac9c($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_6b9fac9c instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_6b9fac9c = $value;
            return $this;
        }
        foreach ($this->opportunity_6b9fac9c as $item) {
            $this->removeOpportunity6b9fac9c($item);
        }
        foreach ($value as $item) {
            $this->addOpportunity6b9fac9c($item);
        }
        return $this;
    }

    public function getB2bCustomer88d7394f()
    {
        return $this->b2b_customer_88d7394f;
    }

    public function setB2bCustomer88d7394f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->b2b_customer_88d7394f instanceof \Doctrine\Common\Collections\Collection) {
            $this->b2b_customer_88d7394f = $value;
            return $this;
        }
        foreach ($this->b2b_customer_88d7394f as $item) {
            $this->removeB2bCustomer88d7394f($item);
        }
        foreach ($value as $item) {
            $this->addB2bCustomer88d7394f($item);
        }
        return $this;
    }

    public function getContactRequest4e3a1184()
    {
        return $this->contact_request_4e3a1184;
    }

    public function setContactRequest4e3a1184($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_request_4e3a1184 instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_request_4e3a1184 = $value;
            return $this;
        }
        foreach ($this->contact_request_4e3a1184 as $item) {
            $this->removeContactRequest4e3a1184($item);
        }
        foreach ($value as $item) {
            $this->addContactRequest4e3a1184($item);
        }
        return $this;
    }

    public function getCaseEntityEafc92f2()
    {
        return $this->case_entity_eafc92f2;
    }

    public function setCaseEntityEafc92f2($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_eafc92f2 instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_eafc92f2 = $value;
            return $this;
        }
        foreach ($this->case_entity_eafc92f2 as $item) {
            $this->removeCaseEntityEafc92f2($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntityEafc92f2($item);
        }
        return $this;
    }

    public function addUserD41b1c4b($value)
    {
        if (!$this->user_d41b1c4b->contains($value)) {
            $this->user_d41b1c4b->add($value);
        }
    }

    public function removeUserD41b1c4b($value)
    {
        if ($this->user_d41b1c4b && $this->user_d41b1c4b->contains($value)) {
            $this->user_d41b1c4b->removeElement($value);
        }
    }

    public function addContactA6d273bd($value)
    {
        if (!$this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->add($value);
        }
    }

    public function removeContactA6d273bd($value)
    {
        if ($this->contact_a6d273bd && $this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->removeElement($value);
        }
    }

    public function addAccount638472a8($value)
    {
        if (!$this->account_638472a8->contains($value)) {
            $this->account_638472a8->add($value);
        }
    }

    public function removeAccount638472a8($value)
    {
        if ($this->account_638472a8 && $this->account_638472a8->contains($value)) {
            $this->account_638472a8->removeElement($value);
        }
    }

    public function addTask1a1af651($value)
    {
        if (!$this->task_1a1af651->contains($value)) {
            $this->task_1a1af651->add($value);
        }
    }

    public function removeTask1a1af651($value)
    {
        if ($this->task_1a1af651 && $this->task_1a1af651->contains($value)) {
            $this->task_1a1af651->removeElement($value);
        }
    }

    public function addLead23c40e3e($value)
    {
        if (!$this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->add($value);
        }
    }

    public function removeLead23c40e3e($value)
    {
        if ($this->lead_23c40e3e && $this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->removeElement($value);
        }
    }

    public function addOpportunity6b9fac9c($value)
    {
        if (!$this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->add($value);
        }
    }

    public function removeOpportunity6b9fac9c($value)
    {
        if ($this->opportunity_6b9fac9c && $this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->removeElement($value);
        }
    }

    public function addB2bCustomer88d7394f($value)
    {
        if (!$this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->add($value);
        }
    }

    public function removeB2bCustomer88d7394f($value)
    {
        if ($this->b2b_customer_88d7394f && $this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->removeElement($value);
        }
    }

    public function addContactRequest4e3a1184($value)
    {
        if (!$this->contact_request_4e3a1184->contains($value)) {
            $this->contact_request_4e3a1184->add($value);
        }
    }

    public function removeContactRequest4e3a1184($value)
    {
        if ($this->contact_request_4e3a1184 && $this->contact_request_4e3a1184->contains($value)) {
            $this->contact_request_4e3a1184->removeElement($value);
        }
    }

    public function addCaseEntityEafc92f2($value)
    {
        if (!$this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->add($value);
        }
    }

    public function removeCaseEntityEafc92f2($value)
    {
        if ($this->case_entity_eafc92f2 && $this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->removeElement($value);
        }
    }

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return true; }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        return false;
    }

    /**
     * Gets entities associated with this entity
     *
     * @param string|null $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityTargets($targetClass = null)
    {
        if (null === $targetClass) {
            $targets = [];
            $entities = $this->user_d41b1c4b->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_a6d273bd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_638472a8->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->task_1a1af651->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->lead_23c40e3e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->opportunity_6b9fac9c->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->b2b_customer_88d7394f->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_request_4e3a1184->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->case_entity_eafc92f2->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_d41b1c4b; }
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8; }
            if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return $this->task_1a1af651; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f; }
            if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return $this->contact_request_4e3a1184; }
            if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2; }
            throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_d41b1c4b->contains($target); }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8->contains($target); }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return $this->task_1a1af651->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f->contains($target); }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return $this->contact_request_4e3a1184->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2->contains($target); }
        return false;
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if (!$this->user_d41b1c4b->contains($target)) { $this->user_d41b1c4b->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_638472a8->contains($target)) { $this->account_638472a8->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') {
            if (!$this->task_1a1af651->contains($target)) { $this->task_1a1af651->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if (!$this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') {
            if (!$this->contact_request_4e3a1184->contains($target)) { $this->contact_request_4e3a1184->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if ($this->user_d41b1c4b->contains($target)) { $this->user_d41b1c4b->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_638472a8->contains($target)) { $this->account_638472a8->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') {
            if ($this->task_1a1af651->contains($target)) { $this->task_1a1af651->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if ($this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') {
            if ($this->contact_request_4e3a1184->contains($target)) { $this->contact_request_4e3a1184->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroEmailBundle_Email */

/** Start: EX_OroEmailBundle_EmailTemplate */
abstract class EX_OroEmailBundle_EmailTemplate implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroEmailBundle_EmailTemplate */

/** Start: EX_OroUserBundle_Group */
abstract class EX_OroUserBundle_Group implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroUserBundle_Group */

/** Start: EX_OroUserBundle_User */
abstract class EX_OroUserBundle_User extends \Oro\Bundle\UserBundle\Entity\AbstractUser implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $phone = null;
    protected $title = null;
    protected $googleId = null;
    protected $serialized_data = null;
    protected $avatar = null;
    protected $auth_status = null;

    public function __construct()
    {
        parent::__construct();
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($value)
    {
        $this->phone = $value; return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($value)
    {
        $this->title = $value; return $this;
    }

    public function getGoogleId()
    {
        return $this->googleId;
    }

    public function setGoogleId($value)
    {
        $this->googleId = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($value)
    {
        $this->avatar = $value; return $this;
    }

    public function getAuthStatus()
    {
        return $this->auth_status;
    }

    public function setAuthStatus($value)
    {
        $this->auth_status = $value; return $this;
    }
}
/** End: EX_OroUserBundle_User */

/** Start: EX_OroUserBundle_Role */
abstract class EX_OroUserBundle_Role extends \Oro\Bundle\UserBundle\Entity\AbstractRole implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $extend_description = null;
    protected $serialized_data = null;

    public function __construct(string $role)
    {
        parent::__construct($role);
    }

    public function getExtendDescription()
    {
        return $this->extend_description;
    }

    public function setExtendDescription($value)
    {
        $this->extend_description = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroUserBundle_Role */

/** Start: EX_OroDraftBundle_DraftProject */
abstract class EX_OroDraftBundle_DraftProject implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroDraftBundle_DraftProject */

/** Start: EX_OroLocaleBundle_Localization */
abstract class EX_OroLocaleBundle_Localization extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    /**
     * @param \Oro\Bundle\LocaleBundle\Entity\Localization|null $localization
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getTitle(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = null)
    {
        return $this->getFallbackValue($this->titles, $localization);
    }

    /**
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getDefaultTitle()
    {
        return $this->getDefaultFallbackValue($this->titles);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultTitle($value)
    {
        return $this->setDefaultFallbackValue($this->titles, $value);
    }

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroLocaleBundle_Localization */

/** Start: EX_OroLocaleBundle_LocalizedFallbackValue */
abstract class EX_OroLocaleBundle_LocalizedFallbackValue extends \Oro\Bundle\LocaleBundle\Entity\AbstractLocalizedFallbackValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroLocaleBundle_LocalizedFallbackValue */

/** Start: EX_OroDigitalAssetBundle_DigitalAsset */
abstract class EX_OroDigitalAssetBundle_DigitalAsset extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $childFiles = null;

    /**
     * @param \Oro\Bundle\LocaleBundle\Entity\Localization|null $localization
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getTitle(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = null)
    {
        return $this->getFallbackValue($this->titles, $localization);
    }

    /**
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getDefaultTitle()
    {
        return $this->getDefaultFallbackValue($this->titles);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultTitle($value)
    {
        return $this->setDefaultFallbackValue($this->titles, $value);
    }

    public function __construct()
    {
        $this->childFiles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getChildFiles()
    {
        return $this->childFiles;
    }

    public function setChildFiles($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->childFiles instanceof \Doctrine\Common\Collections\Collection) {
            $this->childFiles = $value;
            return $this;
        }
        foreach ($this->childFiles as $item) {
            $this->removeChildFil($item);
        }
        foreach ($value as $item) {
            $this->addChildFil($item);
        }
        return $this;
    }

    public function addChildFil($value)
    {
        if (!$this->childFiles->contains($value)) {
            $this->childFiles->add($value);
            $value->setDigitalAsset($this);
        }
    }

    public function removeChildFil($value)
    {
        if ($this->childFiles && $this->childFiles->contains($value)) {
            $this->childFiles->removeElement($value);
            $value->setDigitalAsset(null);
        }
    }
}
/** End: EX_OroDigitalAssetBundle_DigitalAsset */

/** Start: EX_OroNotificationBundle_EmailNotification */
abstract class EX_OroNotificationBundle_EmailNotification implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $workflow_transition_name = null;
    protected $serialized_data = null;
    protected $workflow_definition = null;

    public function __construct()
    {
    }

    public function getWorkflowTransitionName()
    {
        return $this->workflow_transition_name;
    }

    public function setWorkflowTransitionName($value)
    {
        $this->workflow_transition_name = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getWorkflowDefinition()
    {
        return $this->workflow_definition;
    }

    public function setWorkflowDefinition($value)
    {
        $this->workflow_definition = $value; return $this;
    }
}
/** End: EX_OroNotificationBundle_EmailNotification */

/** Start: EX_OroNotificationBundle_NotificationAlert */
abstract class EX_OroNotificationBundle_NotificationAlert implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroNotificationBundle_NotificationAlert */

/** Start: EX_OroActivityListBundle_ActivityList */
abstract class EX_OroActivityListBundle_ActivityList implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $email_876d0578 = null;
    protected $user_10c9f691 = null;
    protected $contact_6de8dc04 = null;
    protected $account_a8bedd11 = null;
    protected $task_dec81c8b = null;
    protected $lead_4506e71e = null;
    protected $opportunity_18f1cc2e = null;
    protected $b2b_customer_fbb959fd = null;
    protected $contact_request_aeac8609 = null;
    protected $case_entity_21c63d4b = null;

    public function __construct()
    {
        $this->email_876d0578 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user_10c9f691 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_6de8dc04 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_a8bedd11 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->task_dec81c8b = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_4506e71e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_18f1cc2e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_fbb959fd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_request_aeac8609 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_21c63d4b = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getEmail876d0578()
    {
        return $this->email_876d0578;
    }

    public function setEmail876d0578($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->email_876d0578 instanceof \Doctrine\Common\Collections\Collection) {
            $this->email_876d0578 = $value;
            return $this;
        }
        foreach ($this->email_876d0578 as $item) {
            $this->removeEmail876d0578($item);
        }
        foreach ($value as $item) {
            $this->addEmail876d0578($item);
        }
        return $this;
    }

    public function getUser10c9f691()
    {
        return $this->user_10c9f691;
    }

    public function setUser10c9f691($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->user_10c9f691 instanceof \Doctrine\Common\Collections\Collection) {
            $this->user_10c9f691 = $value;
            return $this;
        }
        foreach ($this->user_10c9f691 as $item) {
            $this->removeUser10c9f691($item);
        }
        foreach ($value as $item) {
            $this->addUser10c9f691($item);
        }
        return $this;
    }

    public function getContact6de8dc04()
    {
        return $this->contact_6de8dc04;
    }

    public function setContact6de8dc04($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_6de8dc04 instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_6de8dc04 = $value;
            return $this;
        }
        foreach ($this->contact_6de8dc04 as $item) {
            $this->removeContact6de8dc04($item);
        }
        foreach ($value as $item) {
            $this->addContact6de8dc04($item);
        }
        return $this;
    }

    public function getAccountA8bedd11()
    {
        return $this->account_a8bedd11;
    }

    public function setAccountA8bedd11($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_a8bedd11 instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_a8bedd11 = $value;
            return $this;
        }
        foreach ($this->account_a8bedd11 as $item) {
            $this->removeAccountA8bedd11($item);
        }
        foreach ($value as $item) {
            $this->addAccountA8bedd11($item);
        }
        return $this;
    }

    public function getTaskDec81c8b()
    {
        return $this->task_dec81c8b;
    }

    public function setTaskDec81c8b($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->task_dec81c8b instanceof \Doctrine\Common\Collections\Collection) {
            $this->task_dec81c8b = $value;
            return $this;
        }
        foreach ($this->task_dec81c8b as $item) {
            $this->removeTaskDec81c8b($item);
        }
        foreach ($value as $item) {
            $this->addTaskDec81c8b($item);
        }
        return $this;
    }

    public function getLead4506e71e()
    {
        return $this->lead_4506e71e;
    }

    public function setLead4506e71e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_4506e71e instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_4506e71e = $value;
            return $this;
        }
        foreach ($this->lead_4506e71e as $item) {
            $this->removeLead4506e71e($item);
        }
        foreach ($value as $item) {
            $this->addLead4506e71e($item);
        }
        return $this;
    }

    public function getOpportunity18f1cc2e()
    {
        return $this->opportunity_18f1cc2e;
    }

    public function setOpportunity18f1cc2e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_18f1cc2e instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_18f1cc2e = $value;
            return $this;
        }
        foreach ($this->opportunity_18f1cc2e as $item) {
            $this->removeOpportunity18f1cc2e($item);
        }
        foreach ($value as $item) {
            $this->addOpportunity18f1cc2e($item);
        }
        return $this;
    }

    public function getB2bCustomerFbb959fd()
    {
        return $this->b2b_customer_fbb959fd;
    }

    public function setB2bCustomerFbb959fd($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->b2b_customer_fbb959fd instanceof \Doctrine\Common\Collections\Collection) {
            $this->b2b_customer_fbb959fd = $value;
            return $this;
        }
        foreach ($this->b2b_customer_fbb959fd as $item) {
            $this->removeB2bCustomerFbb959fd($item);
        }
        foreach ($value as $item) {
            $this->addB2bCustomerFbb959fd($item);
        }
        return $this;
    }

    public function getContactRequestAeac8609()
    {
        return $this->contact_request_aeac8609;
    }

    public function setContactRequestAeac8609($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_request_aeac8609 instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_request_aeac8609 = $value;
            return $this;
        }
        foreach ($this->contact_request_aeac8609 as $item) {
            $this->removeContactRequestAeac8609($item);
        }
        foreach ($value as $item) {
            $this->addContactRequestAeac8609($item);
        }
        return $this;
    }

    public function getCaseEntity21c63d4b()
    {
        return $this->case_entity_21c63d4b;
    }

    public function setCaseEntity21c63d4b($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_21c63d4b instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_21c63d4b = $value;
            return $this;
        }
        foreach ($this->case_entity_21c63d4b as $item) {
            $this->removeCaseEntity21c63d4b($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntity21c63d4b($item);
        }
        return $this;
    }

    public function addEmail876d0578($value)
    {
        if (!$this->email_876d0578->contains($value)) {
            $this->email_876d0578->add($value);
        }
    }

    public function removeEmail876d0578($value)
    {
        if ($this->email_876d0578 && $this->email_876d0578->contains($value)) {
            $this->email_876d0578->removeElement($value);
        }
    }

    public function addUser10c9f691($value)
    {
        if (!$this->user_10c9f691->contains($value)) {
            $this->user_10c9f691->add($value);
        }
    }

    public function removeUser10c9f691($value)
    {
        if ($this->user_10c9f691 && $this->user_10c9f691->contains($value)) {
            $this->user_10c9f691->removeElement($value);
        }
    }

    public function addContact6de8dc04($value)
    {
        if (!$this->contact_6de8dc04->contains($value)) {
            $this->contact_6de8dc04->add($value);
        }
    }

    public function removeContact6de8dc04($value)
    {
        if ($this->contact_6de8dc04 && $this->contact_6de8dc04->contains($value)) {
            $this->contact_6de8dc04->removeElement($value);
        }
    }

    public function addAccountA8bedd11($value)
    {
        if (!$this->account_a8bedd11->contains($value)) {
            $this->account_a8bedd11->add($value);
        }
    }

    public function removeAccountA8bedd11($value)
    {
        if ($this->account_a8bedd11 && $this->account_a8bedd11->contains($value)) {
            $this->account_a8bedd11->removeElement($value);
        }
    }

    public function addTaskDec81c8b($value)
    {
        if (!$this->task_dec81c8b->contains($value)) {
            $this->task_dec81c8b->add($value);
        }
    }

    public function removeTaskDec81c8b($value)
    {
        if ($this->task_dec81c8b && $this->task_dec81c8b->contains($value)) {
            $this->task_dec81c8b->removeElement($value);
        }
    }

    public function addLead4506e71e($value)
    {
        if (!$this->lead_4506e71e->contains($value)) {
            $this->lead_4506e71e->add($value);
        }
    }

    public function removeLead4506e71e($value)
    {
        if ($this->lead_4506e71e && $this->lead_4506e71e->contains($value)) {
            $this->lead_4506e71e->removeElement($value);
        }
    }

    public function addOpportunity18f1cc2e($value)
    {
        if (!$this->opportunity_18f1cc2e->contains($value)) {
            $this->opportunity_18f1cc2e->add($value);
        }
    }

    public function removeOpportunity18f1cc2e($value)
    {
        if ($this->opportunity_18f1cc2e && $this->opportunity_18f1cc2e->contains($value)) {
            $this->opportunity_18f1cc2e->removeElement($value);
        }
    }

    public function addB2bCustomerFbb959fd($value)
    {
        if (!$this->b2b_customer_fbb959fd->contains($value)) {
            $this->b2b_customer_fbb959fd->add($value);
        }
    }

    public function removeB2bCustomerFbb959fd($value)
    {
        if ($this->b2b_customer_fbb959fd && $this->b2b_customer_fbb959fd->contains($value)) {
            $this->b2b_customer_fbb959fd->removeElement($value);
        }
    }

    public function addContactRequestAeac8609($value)
    {
        if (!$this->contact_request_aeac8609->contains($value)) {
            $this->contact_request_aeac8609->add($value);
        }
    }

    public function removeContactRequestAeac8609($value)
    {
        if ($this->contact_request_aeac8609 && $this->contact_request_aeac8609->contains($value)) {
            $this->contact_request_aeac8609->removeElement($value);
        }
    }

    public function addCaseEntity21c63d4b($value)
    {
        if (!$this->case_entity_21c63d4b->contains($value)) {
            $this->case_entity_21c63d4b->add($value);
        }
    }

    public function removeCaseEntity21c63d4b($value)
    {
        if ($this->case_entity_21c63d4b && $this->case_entity_21c63d4b->contains($value)) {
            $this->case_entity_21c63d4b->removeElement($value);
        }
    }

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityListTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return true; }
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return true; }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        return false;
    }

    /**
     * Gets entities associated with this entity
     *
     * @param string|null $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityListTargets($targetClass = null)
    {
        if (null === $targetClass) {
            $targets = [];
            $entities = $this->email_876d0578->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->user_10c9f691->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_6de8dc04->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_a8bedd11->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->task_dec81c8b->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->lead_4506e71e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->opportunity_18f1cc2e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->b2b_customer_fbb959fd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_request_aeac8609->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->case_entity_21c63d4b->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return $this->email_876d0578; }
            if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_10c9f691; }
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_6de8dc04; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_a8bedd11; }
            if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return $this->task_dec81c8b; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_4506e71e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_18f1cc2e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_fbb959fd; }
            if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return $this->contact_request_aeac8609; }
            if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_21c63d4b; }
            throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return $this->email_876d0578->contains($target); }
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_10c9f691->contains($target); }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_6de8dc04->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_a8bedd11->contains($target); }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return $this->task_dec81c8b->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_4506e71e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_18f1cc2e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_fbb959fd->contains($target); }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return $this->contact_request_aeac8609->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_21c63d4b->contains($target); }
        return false;
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') {
            if (!$this->email_876d0578->contains($target)) { $this->email_876d0578->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if (!$this->user_10c9f691->contains($target)) { $this->user_10c9f691->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_6de8dc04->contains($target)) { $this->contact_6de8dc04->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_a8bedd11->contains($target)) { $this->account_a8bedd11->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') {
            if (!$this->task_dec81c8b->contains($target)) { $this->task_dec81c8b->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_4506e71e->contains($target)) { $this->lead_4506e71e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_18f1cc2e->contains($target)) { $this->opportunity_18f1cc2e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if (!$this->b2b_customer_fbb959fd->contains($target)) { $this->b2b_customer_fbb959fd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') {
            if (!$this->contact_request_aeac8609->contains($target)) { $this->contact_request_aeac8609->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_21c63d4b->contains($target)) { $this->case_entity_21c63d4b->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') {
            if ($this->email_876d0578->contains($target)) { $this->email_876d0578->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if ($this->user_10c9f691->contains($target)) { $this->user_10c9f691->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_6de8dc04->contains($target)) { $this->contact_6de8dc04->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_a8bedd11->contains($target)) { $this->account_a8bedd11->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') {
            if ($this->task_dec81c8b->contains($target)) { $this->task_dec81c8b->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_4506e71e->contains($target)) { $this->lead_4506e71e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_18f1cc2e->contains($target)) { $this->opportunity_18f1cc2e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if ($this->b2b_customer_fbb959fd->contains($target)) { $this->b2b_customer_fbb959fd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') {
            if ($this->contact_request_aeac8609->contains($target)) { $this->contact_request_aeac8609->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_21c63d4b->contains($target)) { $this->case_entity_21c63d4b->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroActivityListBundle_ActivityList */

/** Start: EX_OroAddressBundle_Country */
abstract class EX_OroAddressBundle_Country implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroAddressBundle_Country */

/** Start: EX_OroAddressBundle_Address */
abstract class EX_OroAddressBundle_Address extends \Oro\Bundle\AddressBundle\Entity\AbstractAddress implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroAddressBundle_Address */

/** Start: EX_OroDataAuditBundle_AuditField */
abstract class EX_OroDataAuditBundle_AuditField extends \Oro\Bundle\DataAuditBundle\Entity\AbstractAuditField implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($field, $dataType, $newValue, $oldValue)
    {
        parent::__construct($field, $dataType, $newValue, $oldValue);
    }
}
/** End: EX_OroDataAuditBundle_AuditField */

/** Start: EX_OroEmbeddedFormBundle_EmbeddedForm */
abstract class EX_OroEmbeddedFormBundle_EmbeddedForm implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $dataChannel = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getDataChannel()
    {
        return $this->dataChannel;
    }

    public function setDataChannel($value)
    {
        $this->dataChannel = $value; return $this;
    }
}
/** End: EX_OroEmbeddedFormBundle_EmbeddedForm */

/** Start: EX_OroNoteBundle_Note */
abstract class EX_OroNoteBundle_Note implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $attachment = null;
    protected $contact_a6d273bd = null;
    protected $account_638472a8 = null;
    protected $lead_23c40e3e = null;
    protected $opportunity_6b9fac9c = null;
    protected $case_entity_eafc92f2 = null;

    public function __construct()
    {
        $this->contact_a6d273bd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_638472a8 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_23c40e3e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_6b9fac9c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_eafc92f2 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function setAttachment($value)
    {
        $this->attachment = $value; return $this;
    }

    public function getContactA6d273bd()
    {
        return $this->contact_a6d273bd;
    }

    public function setContactA6d273bd($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_a6d273bd instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_a6d273bd = $value;
            return $this;
        }
        foreach ($this->contact_a6d273bd as $item) {
            $this->removeContactA6d273bd($item);
        }
        foreach ($value as $item) {
            $this->addContactA6d273bd($item);
        }
        return $this;
    }

    public function getAccount638472a8()
    {
        return $this->account_638472a8;
    }

    public function setAccount638472a8($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_638472a8 instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_638472a8 = $value;
            return $this;
        }
        foreach ($this->account_638472a8 as $item) {
            $this->removeAccount638472a8($item);
        }
        foreach ($value as $item) {
            $this->addAccount638472a8($item);
        }
        return $this;
    }

    public function getLead23c40e3e()
    {
        return $this->lead_23c40e3e;
    }

    public function setLead23c40e3e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_23c40e3e instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_23c40e3e = $value;
            return $this;
        }
        foreach ($this->lead_23c40e3e as $item) {
            $this->removeLead23c40e3e($item);
        }
        foreach ($value as $item) {
            $this->addLead23c40e3e($item);
        }
        return $this;
    }

    public function getOpportunity6b9fac9c()
    {
        return $this->opportunity_6b9fac9c;
    }

    public function setOpportunity6b9fac9c($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_6b9fac9c instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_6b9fac9c = $value;
            return $this;
        }
        foreach ($this->opportunity_6b9fac9c as $item) {
            $this->removeOpportunity6b9fac9c($item);
        }
        foreach ($value as $item) {
            $this->addOpportunity6b9fac9c($item);
        }
        return $this;
    }

    public function getCaseEntityEafc92f2()
    {
        return $this->case_entity_eafc92f2;
    }

    public function setCaseEntityEafc92f2($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_eafc92f2 instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_eafc92f2 = $value;
            return $this;
        }
        foreach ($this->case_entity_eafc92f2 as $item) {
            $this->removeCaseEntityEafc92f2($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntityEafc92f2($item);
        }
        return $this;
    }

    public function addContactA6d273bd($value)
    {
        if (!$this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->add($value);
        }
    }

    public function removeContactA6d273bd($value)
    {
        if ($this->contact_a6d273bd && $this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->removeElement($value);
        }
    }

    public function addAccount638472a8($value)
    {
        if (!$this->account_638472a8->contains($value)) {
            $this->account_638472a8->add($value);
        }
    }

    public function removeAccount638472a8($value)
    {
        if ($this->account_638472a8 && $this->account_638472a8->contains($value)) {
            $this->account_638472a8->removeElement($value);
        }
    }

    public function addLead23c40e3e($value)
    {
        if (!$this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->add($value);
        }
    }

    public function removeLead23c40e3e($value)
    {
        if ($this->lead_23c40e3e && $this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->removeElement($value);
        }
    }

    public function addOpportunity6b9fac9c($value)
    {
        if (!$this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->add($value);
        }
    }

    public function removeOpportunity6b9fac9c($value)
    {
        if ($this->opportunity_6b9fac9c && $this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->removeElement($value);
        }
    }

    public function addCaseEntityEafc92f2($value)
    {
        if (!$this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->add($value);
        }
    }

    public function removeCaseEntityEafc92f2($value)
    {
        if ($this->case_entity_eafc92f2 && $this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->removeElement($value);
        }
    }

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        return false;
    }

    /**
     * Gets entities associated with this entity
     *
     * @param string|null $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityTargets($targetClass = null)
    {
        if (null === $targetClass) {
            $targets = [];
            $entities = $this->contact_a6d273bd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_638472a8->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->lead_23c40e3e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->opportunity_6b9fac9c->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->case_entity_eafc92f2->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c; }
            if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2; }
            throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2->contains($target); }
        return false;
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_638472a8->contains($target)) { $this->account_638472a8->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_638472a8->contains($target)) { $this->account_638472a8->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroNoteBundle_Note */

/** Start: EX_OroReportBundle_Report */
abstract class EX_OroReportBundle_Report extends \Oro\Bundle\QueryDesignerBundle\Model\AbstractQueryDesigner implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroReportBundle_Report */

/** Start: EX_OroSegmentBundle_Segment */
abstract class EX_OroSegmentBundle_Segment extends \Oro\Bundle\QueryDesignerBundle\Model\AbstractQueryDesigner implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroSegmentBundle_Segment */

/** Start: EX_OroTagBundle_Taxonomy */
abstract class EX_OroTagBundle_Taxonomy implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroTagBundle_Taxonomy */

/** Start: EX_OroTagBundle_Tagging */
abstract class EX_OroTagBundle_Tagging implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct()
    {
    }
}
/** End: EX_OroTagBundle_Tagging */

/** Start: EX_OroTagBundle_Tag */
abstract class EX_OroTagBundle_Tag implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroTagBundle_Tag */

/** Start: EX_OroWorkflowBundle_WorkflowItem */
abstract class EX_OroWorkflowBundle_WorkflowItem implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroWorkflowBundle_WorkflowItem */

/** Start: EX_OroCommentBundle_Comment */
abstract class EX_OroCommentBundle_Comment extends \Oro\Bundle\CommentBundle\Entity\BaseComment implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $email_bb212599 = null;
    protected $note_c0db526d = null;
    protected $attachment = null;
    protected $calendar_event_78fb52b8 = null;
    protected $call_41b3ba7d = null;
    protected $task_c50a6a28 = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getEmailBb212599()
    {
        return $this->email_bb212599;
    }

    public function setEmailBb212599($value)
    {
        $this->email_bb212599 = $value; return $this;
    }

    public function getNoteC0db526d()
    {
        return $this->note_c0db526d;
    }

    public function setNoteC0db526d($value)
    {
        $this->note_c0db526d = $value; return $this;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function setAttachment($value)
    {
        $this->attachment = $value; return $this;
    }

    public function getCalendarEvent78fb52b8()
    {
        return $this->calendar_event_78fb52b8;
    }

    public function setCalendarEvent78fb52b8($value)
    {
        $this->calendar_event_78fb52b8 = $value; return $this;
    }

    public function getCall41b3ba7d()
    {
        return $this->call_41b3ba7d;
    }

    public function setCall41b3ba7d($value)
    {
        $this->call_41b3ba7d = $value; return $this;
    }

    public function getTaskC50a6a28()
    {
        return $this->task_c50a6a28;
    }

    public function setTaskC50a6a28($value)
    {
        $this->task_c50a6a28 = $value; return $this;
    }

    private function resetTargets()
    {
        $this->email_bb212599 = null;
        $this->note_c0db526d = null;
        $this->calendar_event_78fb52b8 = null;
        $this->call_41b3ba7d = null;
        $this->task_c50a6a28 = null;
    }

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return true; }
        if ($className === 'Oro\Bundle\NoteBundle\Entity\Note') { return true; }
        if ($className === 'Oro\Bundle\CalendarBundle\Entity\CalendarEvent') { return true; }
        if ($className === 'Oro\Bundle\CallBundle\Entity\Call') { return true; }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { return true; }
        return false;
    }

    /**
     * Gets the entity this entity is associated with
     *
     * @return object|null Any configurable entity
     */
    public function getTarget()
    {
        if (null !== $this->email_bb212599) { return $this->email_bb212599; }
        if (null !== $this->note_c0db526d) { return $this->note_c0db526d; }
        if (null !== $this->calendar_event_78fb52b8) { return $this->calendar_event_78fb52b8; }
        if (null !== $this->call_41b3ba7d) { return $this->call_41b3ba7d; }
        if (null !== $this->task_c50a6a28) { return $this->task_c50a6a28; }
        return null;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function setTarget($target)
    {
        if (null === $target) { $this->resetTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        // This entity can be associated with only one another entity
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { $this->resetTargets(); $this->email_bb212599 = $target; return $this; }
        if ($className === 'Oro\Bundle\NoteBundle\Entity\Note') { $this->resetTargets(); $this->note_c0db526d = $target; return $this; }
        if ($className === 'Oro\Bundle\CalendarBundle\Entity\CalendarEvent') { $this->resetTargets(); $this->calendar_event_78fb52b8 = $target; return $this; }
        if ($className === 'Oro\Bundle\CallBundle\Entity\Call') { $this->resetTargets(); $this->call_41b3ba7d = $target; return $this; }
        if ($className === 'Oro\Bundle\TaskBundle\Entity\Task') { $this->resetTargets(); $this->task_c50a6a28 = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroCommentBundle_Comment */

/** Start: EX_OroDashboardBundle_Dashboard */
abstract class EX_OroDashboardBundle_Dashboard implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroDashboardBundle_Dashboard */

/** Start: EX_OroCalendarBundle_CalendarEvent */
abstract class EX_OroCalendarBundle_CalendarEvent implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $use_hangout = null;
    protected $serialized_data = null;
    protected $contact_a6d273bd = null;
    protected $case_entity_eafc92f2 = null;
    protected $account_638472a8 = null;
    protected $lead_23c40e3e = null;
    protected $opportunity_6b9fac9c = null;
    protected $b2b_customer_88d7394f = null;

    public function __construct()
    {
        $this->contact_a6d273bd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_638472a8 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_23c40e3e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_6b9fac9c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_88d7394f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_eafc92f2 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getUseHangout()
    {
        return $this->use_hangout;
    }

    public function setUseHangout($value)
    {
        $this->use_hangout = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getContactA6d273bd()
    {
        return $this->contact_a6d273bd;
    }

    public function setContactA6d273bd($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_a6d273bd instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_a6d273bd = $value;
            return $this;
        }
        foreach ($this->contact_a6d273bd as $item) {
            $this->removeContactA6d273bd($item);
        }
        foreach ($value as $item) {
            $this->addContactA6d273bd($item);
        }
        return $this;
    }

    public function getCaseEntityEafc92f2()
    {
        return $this->case_entity_eafc92f2;
    }

    public function setCaseEntityEafc92f2($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_eafc92f2 instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_eafc92f2 = $value;
            return $this;
        }
        foreach ($this->case_entity_eafc92f2 as $item) {
            $this->removeCaseEntityEafc92f2($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntityEafc92f2($item);
        }
        return $this;
    }

    public function getAccount638472a8()
    {
        return $this->account_638472a8;
    }

    public function setAccount638472a8($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_638472a8 instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_638472a8 = $value;
            return $this;
        }
        foreach ($this->account_638472a8 as $item) {
            $this->removeAccount638472a8($item);
        }
        foreach ($value as $item) {
            $this->addAccount638472a8($item);
        }
        return $this;
    }

    public function getLead23c40e3e()
    {
        return $this->lead_23c40e3e;
    }

    public function setLead23c40e3e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_23c40e3e instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_23c40e3e = $value;
            return $this;
        }
        foreach ($this->lead_23c40e3e as $item) {
            $this->removeLead23c40e3e($item);
        }
        foreach ($value as $item) {
            $this->addLead23c40e3e($item);
        }
        return $this;
    }

    public function getOpportunity6b9fac9c()
    {
        return $this->opportunity_6b9fac9c;
    }

    public function setOpportunity6b9fac9c($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_6b9fac9c instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_6b9fac9c = $value;
            return $this;
        }
        foreach ($this->opportunity_6b9fac9c as $item) {
            $this->removeOpportunity6b9fac9c($item);
        }
        foreach ($value as $item) {
            $this->addOpportunity6b9fac9c($item);
        }
        return $this;
    }

    public function getB2bCustomer88d7394f()
    {
        return $this->b2b_customer_88d7394f;
    }

    public function setB2bCustomer88d7394f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->b2b_customer_88d7394f instanceof \Doctrine\Common\Collections\Collection) {
            $this->b2b_customer_88d7394f = $value;
            return $this;
        }
        foreach ($this->b2b_customer_88d7394f as $item) {
            $this->removeB2bCustomer88d7394f($item);
        }
        foreach ($value as $item) {
            $this->addB2bCustomer88d7394f($item);
        }
        return $this;
    }

    public function addContactA6d273bd($value)
    {
        if (!$this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->add($value);
        }
    }

    public function removeContactA6d273bd($value)
    {
        if ($this->contact_a6d273bd && $this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->removeElement($value);
        }
    }

    public function addAccount638472a8($value)
    {
        if (!$this->account_638472a8->contains($value)) {
            $this->account_638472a8->add($value);
        }
    }

    public function removeAccount638472a8($value)
    {
        if ($this->account_638472a8 && $this->account_638472a8->contains($value)) {
            $this->account_638472a8->removeElement($value);
        }
    }

    public function addLead23c40e3e($value)
    {
        if (!$this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->add($value);
        }
    }

    public function removeLead23c40e3e($value)
    {
        if ($this->lead_23c40e3e && $this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->removeElement($value);
        }
    }

    public function addOpportunity6b9fac9c($value)
    {
        if (!$this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->add($value);
        }
    }

    public function removeOpportunity6b9fac9c($value)
    {
        if ($this->opportunity_6b9fac9c && $this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->removeElement($value);
        }
    }

    public function addB2bCustomer88d7394f($value)
    {
        if (!$this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->add($value);
        }
    }

    public function removeB2bCustomer88d7394f($value)
    {
        if ($this->b2b_customer_88d7394f && $this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->removeElement($value);
        }
    }

    public function addCaseEntityEafc92f2($value)
    {
        if (!$this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->add($value);
        }
    }

    public function removeCaseEntityEafc92f2($value)
    {
        if ($this->case_entity_eafc92f2 && $this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->removeElement($value);
        }
    }

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        return false;
    }

    /**
     * Gets entities associated with this entity
     *
     * @param string|null $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityTargets($targetClass = null)
    {
        if (null === $targetClass) {
            $targets = [];
            $entities = $this->contact_a6d273bd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_638472a8->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->lead_23c40e3e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->opportunity_6b9fac9c->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->b2b_customer_88d7394f->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->case_entity_eafc92f2->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f; }
            if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2; }
            throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2->contains($target); }
        return false;
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_638472a8->contains($target)) { $this->account_638472a8->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if (!$this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_638472a8->contains($target)) { $this->account_638472a8->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if ($this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroCalendarBundle_CalendarEvent */

/** Start: EX_OroCalendarBundle_Attendee */
abstract class EX_OroCalendarBundle_Attendee implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $status = null;
    protected $type = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value; return $this;
    }
}
/** End: EX_OroCalendarBundle_Attendee */

/** Start: EX_OroCalendarBundle_SystemCalendar */
abstract class EX_OroCalendarBundle_SystemCalendar implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $extend_description = null;
    protected $serialized_data = null;

    public function __construct()
    {
    }

    public function getExtendDescription()
    {
        return $this->extend_description;
    }

    public function setExtendDescription($value)
    {
        $this->extend_description = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroCalendarBundle_SystemCalendar */

/** Start: EX_OroCalendarBundle_Calendar */
abstract class EX_OroCalendarBundle_Calendar implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroCalendarBundle_Calendar */

/** Start: EX_OroCalendarBundle_CalendarProperty */
abstract class EX_OroCalendarBundle_CalendarProperty implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroCalendarBundle_CalendarProperty */

/** Start: EX_OroContactBundle_Group */
abstract class EX_OroContactBundle_Group implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroContactBundle_Group */

/** Start: EX_OroContactBundle_ContactPhone */
abstract class EX_OroContactBundle_ContactPhone extends \Oro\Bundle\AddressBundle\Entity\AbstractPhone implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct($phone = null)
    {
        parent::__construct($phone);
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroContactBundle_ContactPhone */

/** Start: EX_OroContactBundle_ContactAddress */
abstract class EX_OroContactBundle_ContactAddress extends \Oro\Bundle\AddressBundle\Entity\AbstractTypedAddress implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroContactBundle_ContactAddress */

/** Start: EX_OroContactBundle_Contact */
abstract class EX_OroContactBundle_Contact extends \Oro\Bundle\BusinessEntitiesBundle\Entity\BasePerson implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $ac_last_contact_date = null;
    protected $ac_last_contact_date_in = null;
    protected $ac_last_contact_date_out = null;
    protected $ac_contact_count = null;
    protected $ac_contact_count_in = null;
    protected $ac_contact_count_out = null;
    protected $serialized_data = null;
    protected $picture = null;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAcLastContactDate()
    {
        return $this->ac_last_contact_date;
    }

    public function setAcLastContactDate($value)
    {
        $this->ac_last_contact_date = $value; return $this;
    }

    public function getAcLastContactDateIn()
    {
        return $this->ac_last_contact_date_in;
    }

    public function setAcLastContactDateIn($value)
    {
        $this->ac_last_contact_date_in = $value; return $this;
    }

    public function getAcLastContactDateOut()
    {
        return $this->ac_last_contact_date_out;
    }

    public function setAcLastContactDateOut($value)
    {
        $this->ac_last_contact_date_out = $value; return $this;
    }

    public function getAcContactCount()
    {
        return $this->ac_contact_count;
    }

    public function setAcContactCount($value)
    {
        $this->ac_contact_count = $value; return $this;
    }

    public function getAcContactCountIn()
    {
        return $this->ac_contact_count_in;
    }

    public function setAcContactCountIn($value)
    {
        $this->ac_contact_count_in = $value; return $this;
    }

    public function getAcContactCountOut()
    {
        return $this->ac_contact_count_out;
    }

    public function setAcContactCountOut($value)
    {
        $this->ac_contact_count_out = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($value)
    {
        $this->picture = $value; return $this;
    }
}
/** End: EX_OroContactBundle_Contact */

/** Start: EX_OroContactBundle_ContactEmail */
abstract class EX_OroContactBundle_ContactEmail extends \Oro\Bundle\AddressBundle\Entity\AbstractEmail implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct($email = null)
    {
        parent::__construct($email);
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroContactBundle_ContactEmail */

/** Start: EX_OroNavigationBundle_MenuUpdate */
abstract class EX_OroNavigationBundle_MenuUpdate extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    /**
     * @param \Oro\Bundle\LocaleBundle\Entity\Localization|null $localization
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getTitle(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = null)
    {
        return $this->getFallbackValue($this->titles, $localization);
    }

    /**
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getDefaultTitle()
    {
        return $this->getDefaultFallbackValue($this->titles);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultTitle($value)
    {
        return $this->setDefaultFallbackValue($this->titles, $value);
    }

    /**
     * @param \Oro\Bundle\LocaleBundle\Entity\Localization|null $localization
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getDescription(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = null)
    {
        return $this->getFallbackValue($this->descriptions, $localization);
    }

    /**
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getDefaultDescription()
    {
        return $this->getDefaultFallbackValue($this->descriptions);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultDescription($value)
    {
        return $this->setDefaultFallbackValue($this->descriptions, $value);
    }

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroNavigationBundle_MenuUpdate */

/** Start: EX_OroMarketingListBundle_MarketingList */
abstract class EX_OroMarketingListBundle_MarketingList implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroMarketingListBundle_MarketingList */

/** Start: EX_OroTrackingBundle_TrackingVisitEvent */
abstract class EX_OroTrackingBundle_TrackingVisitEvent implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $campaign_a14160a8 = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getCampaignA14160a8()
    {
        return $this->campaign_a14160a8;
    }

    public function setCampaignA14160a8($value)
    {
        $this->campaign_a14160a8 = $value; return $this;
    }

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportAssociationTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\CampaignBundle\Entity\Campaign') { return true; }
        return false;
    }

    /**
     * Gets the entities this entity is associated with
     *
     * @return object[]
     */
    public function getAssociationTargets()
    {
        $targets = [];
        $entity = $this->campaign_a14160a8;
        if ($entity) {
            $targets[] = $entity;
        }
        return $targets;
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasAssociationTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\CampaignBundle\Entity\Campaign') { return $this->campaign_a14160a8 === $target; }
        return false;
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addAssociationTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\CampaignBundle\Entity\Campaign') { $this->campaign_a14160a8 = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeAssociationTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\CampaignBundle\Entity\Campaign') {
            if ($this->campaign_a14160a8 === $target) { $this->campaign_a14160a8 = null; }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroTrackingBundle_TrackingVisitEvent */

/** Start: EX_OroTrackingBundle_TrackingWebsite */
abstract class EX_OroTrackingBundle_TrackingWebsite implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $extend_description = null;
    protected $serialized_data = null;

    public function __construct()
    {
    }

    public function getExtendDescription()
    {
        return $this->extend_description;
    }

    public function setExtendDescription($value)
    {
        $this->extend_description = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroTrackingBundle_TrackingWebsite */

/** Start: EX_OroTrackingBundle_TrackingEvent */
abstract class EX_OroTrackingBundle_TrackingEvent implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroTrackingBundle_TrackingEvent */

/** Start: EX_OroTrackingBundle_TrackingVisit */
abstract class EX_OroTrackingBundle_TrackingVisit implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroTrackingBundle_TrackingVisit */

/** Start: EX_OroAccountBundle_Account */
abstract class EX_OroAccountBundle_Account implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $extend_description = null;
    protected $ac_last_contact_date = null;
    protected $ac_last_contact_date_in = null;
    protected $ac_last_contact_date_out = null;
    protected $ac_contact_count = null;
    protected $ac_contact_count_in = null;
    protected $ac_contact_count_out = null;
    protected $serialized_data = null;

    public function __construct()
    {
    }

    public function getExtendDescription()
    {
        return $this->extend_description;
    }

    public function setExtendDescription($value)
    {
        $this->extend_description = $value; return $this;
    }

    public function getAcLastContactDate()
    {
        return $this->ac_last_contact_date;
    }

    public function setAcLastContactDate($value)
    {
        $this->ac_last_contact_date = $value; return $this;
    }

    public function getAcLastContactDateIn()
    {
        return $this->ac_last_contact_date_in;
    }

    public function setAcLastContactDateIn($value)
    {
        $this->ac_last_contact_date_in = $value; return $this;
    }

    public function getAcLastContactDateOut()
    {
        return $this->ac_last_contact_date_out;
    }

    public function setAcLastContactDateOut($value)
    {
        $this->ac_last_contact_date_out = $value; return $this;
    }

    public function getAcContactCount()
    {
        return $this->ac_contact_count;
    }

    public function setAcContactCount($value)
    {
        $this->ac_contact_count = $value; return $this;
    }

    public function getAcContactCountIn()
    {
        return $this->ac_contact_count_in;
    }

    public function setAcContactCountIn($value)
    {
        $this->ac_contact_count_in = $value; return $this;
    }

    public function getAcContactCountOut()
    {
        return $this->ac_contact_count_out;
    }

    public function setAcContactCountOut($value)
    {
        $this->ac_contact_count_out = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroAccountBundle_Account */

/** Start: EX_OroCallBundle_Call */
abstract class EX_OroCallBundle_Call implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $user_d41b1c4b = null;
    protected $account_638472a8 = null;
    protected $contact_a6d273bd = null;
    protected $case_entity_eafc92f2 = null;
    protected $contact_request_4e3a1184 = null;
    protected $lead_23c40e3e = null;
    protected $opportunity_6b9fac9c = null;
    protected $b2b_customer_88d7394f = null;

    public function __construct()
    {
        $this->user_d41b1c4b = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_a6d273bd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_638472a8 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_23c40e3e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_6b9fac9c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_88d7394f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_request_4e3a1184 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_eafc92f2 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getUserD41b1c4b()
    {
        return $this->user_d41b1c4b;
    }

    public function setUserD41b1c4b($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->user_d41b1c4b instanceof \Doctrine\Common\Collections\Collection) {
            $this->user_d41b1c4b = $value;
            return $this;
        }
        foreach ($this->user_d41b1c4b as $item) {
            $this->removeUserD41b1c4b($item);
        }
        foreach ($value as $item) {
            $this->addUserD41b1c4b($item);
        }
        return $this;
    }

    public function getAccount638472a8()
    {
        return $this->account_638472a8;
    }

    public function setAccount638472a8($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_638472a8 instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_638472a8 = $value;
            return $this;
        }
        foreach ($this->account_638472a8 as $item) {
            $this->removeAccount638472a8($item);
        }
        foreach ($value as $item) {
            $this->addAccount638472a8($item);
        }
        return $this;
    }

    public function getContactA6d273bd()
    {
        return $this->contact_a6d273bd;
    }

    public function setContactA6d273bd($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_a6d273bd instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_a6d273bd = $value;
            return $this;
        }
        foreach ($this->contact_a6d273bd as $item) {
            $this->removeContactA6d273bd($item);
        }
        foreach ($value as $item) {
            $this->addContactA6d273bd($item);
        }
        return $this;
    }

    public function getCaseEntityEafc92f2()
    {
        return $this->case_entity_eafc92f2;
    }

    public function setCaseEntityEafc92f2($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_eafc92f2 instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_eafc92f2 = $value;
            return $this;
        }
        foreach ($this->case_entity_eafc92f2 as $item) {
            $this->removeCaseEntityEafc92f2($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntityEafc92f2($item);
        }
        return $this;
    }

    public function getContactRequest4e3a1184()
    {
        return $this->contact_request_4e3a1184;
    }

    public function setContactRequest4e3a1184($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_request_4e3a1184 instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_request_4e3a1184 = $value;
            return $this;
        }
        foreach ($this->contact_request_4e3a1184 as $item) {
            $this->removeContactRequest4e3a1184($item);
        }
        foreach ($value as $item) {
            $this->addContactRequest4e3a1184($item);
        }
        return $this;
    }

    public function getLead23c40e3e()
    {
        return $this->lead_23c40e3e;
    }

    public function setLead23c40e3e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_23c40e3e instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_23c40e3e = $value;
            return $this;
        }
        foreach ($this->lead_23c40e3e as $item) {
            $this->removeLead23c40e3e($item);
        }
        foreach ($value as $item) {
            $this->addLead23c40e3e($item);
        }
        return $this;
    }

    public function getOpportunity6b9fac9c()
    {
        return $this->opportunity_6b9fac9c;
    }

    public function setOpportunity6b9fac9c($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_6b9fac9c instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_6b9fac9c = $value;
            return $this;
        }
        foreach ($this->opportunity_6b9fac9c as $item) {
            $this->removeOpportunity6b9fac9c($item);
        }
        foreach ($value as $item) {
            $this->addOpportunity6b9fac9c($item);
        }
        return $this;
    }

    public function getB2bCustomer88d7394f()
    {
        return $this->b2b_customer_88d7394f;
    }

    public function setB2bCustomer88d7394f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->b2b_customer_88d7394f instanceof \Doctrine\Common\Collections\Collection) {
            $this->b2b_customer_88d7394f = $value;
            return $this;
        }
        foreach ($this->b2b_customer_88d7394f as $item) {
            $this->removeB2bCustomer88d7394f($item);
        }
        foreach ($value as $item) {
            $this->addB2bCustomer88d7394f($item);
        }
        return $this;
    }

    public function addUserD41b1c4b($value)
    {
        if (!$this->user_d41b1c4b->contains($value)) {
            $this->user_d41b1c4b->add($value);
        }
    }

    public function removeUserD41b1c4b($value)
    {
        if ($this->user_d41b1c4b && $this->user_d41b1c4b->contains($value)) {
            $this->user_d41b1c4b->removeElement($value);
        }
    }

    public function addContactA6d273bd($value)
    {
        if (!$this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->add($value);
        }
    }

    public function removeContactA6d273bd($value)
    {
        if ($this->contact_a6d273bd && $this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->removeElement($value);
        }
    }

    public function addAccount638472a8($value)
    {
        if (!$this->account_638472a8->contains($value)) {
            $this->account_638472a8->add($value);
        }
    }

    public function removeAccount638472a8($value)
    {
        if ($this->account_638472a8 && $this->account_638472a8->contains($value)) {
            $this->account_638472a8->removeElement($value);
        }
    }

    public function addLead23c40e3e($value)
    {
        if (!$this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->add($value);
        }
    }

    public function removeLead23c40e3e($value)
    {
        if ($this->lead_23c40e3e && $this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->removeElement($value);
        }
    }

    public function addOpportunity6b9fac9c($value)
    {
        if (!$this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->add($value);
        }
    }

    public function removeOpportunity6b9fac9c($value)
    {
        if ($this->opportunity_6b9fac9c && $this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->removeElement($value);
        }
    }

    public function addB2bCustomer88d7394f($value)
    {
        if (!$this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->add($value);
        }
    }

    public function removeB2bCustomer88d7394f($value)
    {
        if ($this->b2b_customer_88d7394f && $this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->removeElement($value);
        }
    }

    public function addContactRequest4e3a1184($value)
    {
        if (!$this->contact_request_4e3a1184->contains($value)) {
            $this->contact_request_4e3a1184->add($value);
        }
    }

    public function removeContactRequest4e3a1184($value)
    {
        if ($this->contact_request_4e3a1184 && $this->contact_request_4e3a1184->contains($value)) {
            $this->contact_request_4e3a1184->removeElement($value);
        }
    }

    public function addCaseEntityEafc92f2($value)
    {
        if (!$this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->add($value);
        }
    }

    public function removeCaseEntityEafc92f2($value)
    {
        if ($this->case_entity_eafc92f2 && $this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->removeElement($value);
        }
    }

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return true; }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        return false;
    }

    /**
     * Gets entities associated with this entity
     *
     * @param string|null $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityTargets($targetClass = null)
    {
        if (null === $targetClass) {
            $targets = [];
            $entities = $this->user_d41b1c4b->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_a6d273bd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_638472a8->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->lead_23c40e3e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->opportunity_6b9fac9c->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->b2b_customer_88d7394f->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_request_4e3a1184->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->case_entity_eafc92f2->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_d41b1c4b; }
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f; }
            if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return $this->contact_request_4e3a1184; }
            if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2; }
            throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_d41b1c4b->contains($target); }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f->contains($target); }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') { return $this->contact_request_4e3a1184->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2->contains($target); }
        return false;
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if (!$this->user_d41b1c4b->contains($target)) { $this->user_d41b1c4b->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_638472a8->contains($target)) { $this->account_638472a8->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if (!$this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') {
            if (!$this->contact_request_4e3a1184->contains($target)) { $this->contact_request_4e3a1184->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if ($this->user_d41b1c4b->contains($target)) { $this->user_d41b1c4b->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_638472a8->contains($target)) { $this->account_638472a8->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if ($this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactUsBundle\Entity\ContactRequest') {
            if ($this->contact_request_4e3a1184->contains($target)) { $this->contact_request_4e3a1184->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroCallBundle_Call */

/** Start: EX_OroCampaignBundle_Campaign */
abstract class EX_OroCampaignBundle_Campaign implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroCampaignBundle_Campaign */

/** Start: EX_OroCampaignBundle_EmailCampaignStatistics */
abstract class EX_OroCampaignBundle_EmailCampaignStatistics implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroCampaignBundle_EmailCampaignStatistics */

/** Start: EX_OroCampaignBundle_EmailCampaign */
abstract class EX_OroCampaignBundle_EmailCampaign implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroCampaignBundle_EmailCampaign */

/** Start: EX_OroChannelBundle_CustomerIdentity */
abstract class EX_OroChannelBundle_CustomerIdentity implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroChannelBundle_CustomerIdentity */

/** Start: EX_OroReminderBundle_Reminder */
abstract class EX_OroReminderBundle_Reminder implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroReminderBundle_Reminder */

/** Start: EX_OroTaskBundle_Task */
abstract class EX_OroTaskBundle_Task implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $email_bc65e759 = null;
    protected $status = null;
    protected $account_638472a8 = null;
    protected $contact_a6d273bd = null;
    protected $lead_23c40e3e = null;
    protected $opportunity_6b9fac9c = null;
    protected $b2b_customer_88d7394f = null;
    protected $case_entity_eafc92f2 = null;

    public function __construct()
    {
        $this->email_bc65e759 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contact_a6d273bd = new \Doctrine\Common\Collections\ArrayCollection();
        $this->account_638472a8 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lead_23c40e3e = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opportunity_6b9fac9c = new \Doctrine\Common\Collections\ArrayCollection();
        $this->b2b_customer_88d7394f = new \Doctrine\Common\Collections\ArrayCollection();
        $this->case_entity_eafc92f2 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getEmailBc65e759()
    {
        return $this->email_bc65e759;
    }

    public function setEmailBc65e759($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->email_bc65e759 instanceof \Doctrine\Common\Collections\Collection) {
            $this->email_bc65e759 = $value;
            return $this;
        }
        foreach ($this->email_bc65e759 as $item) {
            $this->removeEmailBc65e759($item);
        }
        foreach ($value as $item) {
            $this->addEmailBc65e759($item);
        }
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function getAccount638472a8()
    {
        return $this->account_638472a8;
    }

    public function setAccount638472a8($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->account_638472a8 instanceof \Doctrine\Common\Collections\Collection) {
            $this->account_638472a8 = $value;
            return $this;
        }
        foreach ($this->account_638472a8 as $item) {
            $this->removeAccount638472a8($item);
        }
        foreach ($value as $item) {
            $this->addAccount638472a8($item);
        }
        return $this;
    }

    public function getContactA6d273bd()
    {
        return $this->contact_a6d273bd;
    }

    public function setContactA6d273bd($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->contact_a6d273bd instanceof \Doctrine\Common\Collections\Collection) {
            $this->contact_a6d273bd = $value;
            return $this;
        }
        foreach ($this->contact_a6d273bd as $item) {
            $this->removeContactA6d273bd($item);
        }
        foreach ($value as $item) {
            $this->addContactA6d273bd($item);
        }
        return $this;
    }

    public function getLead23c40e3e()
    {
        return $this->lead_23c40e3e;
    }

    public function setLead23c40e3e($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->lead_23c40e3e instanceof \Doctrine\Common\Collections\Collection) {
            $this->lead_23c40e3e = $value;
            return $this;
        }
        foreach ($this->lead_23c40e3e as $item) {
            $this->removeLead23c40e3e($item);
        }
        foreach ($value as $item) {
            $this->addLead23c40e3e($item);
        }
        return $this;
    }

    public function getOpportunity6b9fac9c()
    {
        return $this->opportunity_6b9fac9c;
    }

    public function setOpportunity6b9fac9c($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->opportunity_6b9fac9c instanceof \Doctrine\Common\Collections\Collection) {
            $this->opportunity_6b9fac9c = $value;
            return $this;
        }
        foreach ($this->opportunity_6b9fac9c as $item) {
            $this->removeOpportunity6b9fac9c($item);
        }
        foreach ($value as $item) {
            $this->addOpportunity6b9fac9c($item);
        }
        return $this;
    }

    public function getB2bCustomer88d7394f()
    {
        return $this->b2b_customer_88d7394f;
    }

    public function setB2bCustomer88d7394f($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->b2b_customer_88d7394f instanceof \Doctrine\Common\Collections\Collection) {
            $this->b2b_customer_88d7394f = $value;
            return $this;
        }
        foreach ($this->b2b_customer_88d7394f as $item) {
            $this->removeB2bCustomer88d7394f($item);
        }
        foreach ($value as $item) {
            $this->addB2bCustomer88d7394f($item);
        }
        return $this;
    }

    public function getCaseEntityEafc92f2()
    {
        return $this->case_entity_eafc92f2;
    }

    public function setCaseEntityEafc92f2($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->case_entity_eafc92f2 instanceof \Doctrine\Common\Collections\Collection) {
            $this->case_entity_eafc92f2 = $value;
            return $this;
        }
        foreach ($this->case_entity_eafc92f2 as $item) {
            $this->removeCaseEntityEafc92f2($item);
        }
        foreach ($value as $item) {
            $this->addCaseEntityEafc92f2($item);
        }
        return $this;
    }

    public function addEmailBc65e759($value)
    {
        if (!$this->email_bc65e759->contains($value)) {
            $this->email_bc65e759->add($value);
        }
    }

    public function removeEmailBc65e759($value)
    {
        if ($this->email_bc65e759 && $this->email_bc65e759->contains($value)) {
            $this->email_bc65e759->removeElement($value);
        }
    }

    public function addContactA6d273bd($value)
    {
        if (!$this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->add($value);
        }
    }

    public function removeContactA6d273bd($value)
    {
        if ($this->contact_a6d273bd && $this->contact_a6d273bd->contains($value)) {
            $this->contact_a6d273bd->removeElement($value);
        }
    }

    public function addAccount638472a8($value)
    {
        if (!$this->account_638472a8->contains($value)) {
            $this->account_638472a8->add($value);
        }
    }

    public function removeAccount638472a8($value)
    {
        if ($this->account_638472a8 && $this->account_638472a8->contains($value)) {
            $this->account_638472a8->removeElement($value);
        }
    }

    public function addLead23c40e3e($value)
    {
        if (!$this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->add($value);
        }
    }

    public function removeLead23c40e3e($value)
    {
        if ($this->lead_23c40e3e && $this->lead_23c40e3e->contains($value)) {
            $this->lead_23c40e3e->removeElement($value);
        }
    }

    public function addOpportunity6b9fac9c($value)
    {
        if (!$this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->add($value);
        }
    }

    public function removeOpportunity6b9fac9c($value)
    {
        if ($this->opportunity_6b9fac9c && $this->opportunity_6b9fac9c->contains($value)) {
            $this->opportunity_6b9fac9c->removeElement($value);
        }
    }

    public function addB2bCustomer88d7394f($value)
    {
        if (!$this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->add($value);
        }
    }

    public function removeB2bCustomer88d7394f($value)
    {
        if ($this->b2b_customer_88d7394f && $this->b2b_customer_88d7394f->contains($value)) {
            $this->b2b_customer_88d7394f->removeElement($value);
        }
    }

    public function addCaseEntityEafc92f2($value)
    {
        if (!$this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->add($value);
        }
    }

    public function removeCaseEntityEafc92f2($value)
    {
        if ($this->case_entity_eafc92f2 && $this->case_entity_eafc92f2->contains($value)) {
            $this->case_entity_eafc92f2->removeElement($value);
        }
    }

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return true; }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return true; }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return true; }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return true; }
        return false;
    }

    /**
     * Gets entities associated with this entity
     *
     * @param string|null $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityTargets($targetClass = null)
    {
        if (null === $targetClass) {
            $targets = [];
            $entities = $this->email_bc65e759->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->contact_a6d273bd->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->account_638472a8->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->lead_23c40e3e->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->opportunity_6b9fac9c->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->b2b_customer_88d7394f->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            $entities = $this->case_entity_eafc92f2->toArray();
            if (!empty($entities)) { $targets = array_merge($targets, $entities); }
            return $targets;
        } else {
            $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
            if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return $this->email_bc65e759; }
            if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd; }
            if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c; }
            if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f; }
            if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2; }
            throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
        }
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return $this->email_bc65e759->contains($target); }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') { return $this->contact_a6d273bd->contains($target); }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') { return $this->account_638472a8->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') { return $this->lead_23c40e3e->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') { return $this->opportunity_6b9fac9c->contains($target); }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return $this->b2b_customer_88d7394f->contains($target); }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') { return $this->case_entity_eafc92f2->contains($target); }
        return false;
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') {
            if (!$this->email_bc65e759->contains($target)) { $this->email_bc65e759->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if (!$this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if (!$this->account_638472a8->contains($target)) { $this->account_638472a8->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if (!$this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if (!$this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if (!$this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->add($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if (!$this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') {
            if ($this->email_bc65e759->contains($target)) { $this->email_bc65e759->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\ContactBundle\Entity\Contact') {
            if ($this->contact_a6d273bd->contains($target)) { $this->contact_a6d273bd->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\AccountBundle\Entity\Account') {
            if ($this->account_638472a8->contains($target)) { $this->account_638472a8->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Lead') {
            if ($this->lead_23c40e3e->contains($target)) { $this->lead_23c40e3e->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\Opportunity') {
            if ($this->opportunity_6b9fac9c->contains($target)) { $this->opportunity_6b9fac9c->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') {
            if ($this->b2b_customer_88d7394f->contains($target)) { $this->b2b_customer_88d7394f->removeElement($target); }
            return $this;
        }
        if ($className === 'Oro\Bundle\CaseBundle\Entity\CaseEntity') {
            if ($this->case_entity_eafc92f2->contains($target)) { $this->case_entity_eafc92f2->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroTaskBundle_Task */

/** Start: EX_OroMarketingActivityBundle_MarketingActivity */
abstract class EX_OroMarketingActivityBundle_MarketingActivity implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $type = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value; return $this;
    }
}
/** End: EX_OroMarketingActivityBundle_MarketingActivity */

/** Start: EX_OroSalesBundle_Customer */
abstract class EX_OroSalesBundle_Customer implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $b2b_customer_188b774c = null;

    public function __construct()
    {
    }

    public function getB2bCustomer188b774c()
    {
        return $this->b2b_customer_188b774c;
    }

    public function setB2bCustomer188b774c($value)
    {
        $this->b2b_customer_188b774c = $value; return $this;
    }

    private function resetCustomerTargets()
    {
        $this->b2b_customer_188b774c = null;
    }

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportCustomerTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { return true; }
        return false;
    }

    /**
     * Gets the entity this entity is associated with
     *
     * @return object|null Any configurable entity
     */
    public function getCustomerTarget()
    {
        if (null !== $this->b2b_customer_188b774c) { return $this->b2b_customer_188b774c; }
        return null;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function setCustomerTarget($target)
    {
        if (null === $target) { $this->resetCustomerTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        // This entity can be associated with only one another entity
        if ($className === 'Oro\Bundle\SalesBundle\Entity\B2bCustomer') { $this->resetCustomerTargets(); $this->b2b_customer_188b774c = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }
}
/** End: EX_OroSalesBundle_Customer */

/** Start: EX_OroSalesBundle_Lead */
abstract class EX_OroSalesBundle_Lead implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $ac_last_contact_date = null;
    protected $ac_last_contact_date_in = null;
    protected $ac_last_contact_date_out = null;
    protected $ac_contact_count = null;
    protected $ac_contact_count_in = null;
    protected $ac_contact_count_out = null;
    protected $serialized_data = null;
    protected $source = null;
    protected $campaign = null;
    protected $status = null;

    public function __construct()
    {
    }

    public function getAcLastContactDate()
    {
        return $this->ac_last_contact_date;
    }

    public function setAcLastContactDate($value)
    {
        $this->ac_last_contact_date = $value; return $this;
    }

    public function getAcLastContactDateIn()
    {
        return $this->ac_last_contact_date_in;
    }

    public function setAcLastContactDateIn($value)
    {
        $this->ac_last_contact_date_in = $value; return $this;
    }

    public function getAcLastContactDateOut()
    {
        return $this->ac_last_contact_date_out;
    }

    public function setAcLastContactDateOut($value)
    {
        $this->ac_last_contact_date_out = $value; return $this;
    }

    public function getAcContactCount()
    {
        return $this->ac_contact_count;
    }

    public function setAcContactCount($value)
    {
        $this->ac_contact_count = $value; return $this;
    }

    public function getAcContactCountIn()
    {
        return $this->ac_contact_count_in;
    }

    public function setAcContactCountIn($value)
    {
        $this->ac_contact_count_in = $value; return $this;
    }

    public function getAcContactCountOut()
    {
        return $this->ac_contact_count_out;
    }

    public function setAcContactCountOut($value)
    {
        $this->ac_contact_count_out = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($value)
    {
        $this->source = $value; return $this;
    }

    public function getCampaign()
    {
        return $this->campaign;
    }

    public function setCampaign($value)
    {
        $this->campaign = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }
}
/** End: EX_OroSalesBundle_Lead */

/** Start: EX_OroSalesBundle_B2bCustomerEmail */
abstract class EX_OroSalesBundle_B2bCustomerEmail extends \Oro\Bundle\AddressBundle\Entity\AbstractEmail implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct($email = null)
    {
        parent::__construct($email);
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroSalesBundle_B2bCustomerEmail */

/** Start: EX_OroSalesBundle_LeadAddress */
abstract class EX_OroSalesBundle_LeadAddress extends \Oro\Bundle\AddressBundle\Entity\AbstractAddress implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroSalesBundle_LeadAddress */

/** Start: EX_OroSalesBundle_SalesFunnel */
abstract class EX_OroSalesBundle_SalesFunnel implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroSalesBundle_SalesFunnel */

/** Start: EX_OroSalesBundle_Opportunity */
abstract class EX_OroSalesBundle_Opportunity implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $ac_last_contact_date = null;
    protected $ac_last_contact_date_in = null;
    protected $ac_last_contact_date_out = null;
    protected $ac_contact_count = null;
    protected $ac_contact_count_in = null;
    protected $ac_contact_count_out = null;
    protected $serialized_data = null;
    protected $status = null;

    public function __construct()
    {
    }

    public function getAcLastContactDate()
    {
        return $this->ac_last_contact_date;
    }

    public function setAcLastContactDate($value)
    {
        $this->ac_last_contact_date = $value; return $this;
    }

    public function getAcLastContactDateIn()
    {
        return $this->ac_last_contact_date_in;
    }

    public function setAcLastContactDateIn($value)
    {
        $this->ac_last_contact_date_in = $value; return $this;
    }

    public function getAcLastContactDateOut()
    {
        return $this->ac_last_contact_date_out;
    }

    public function setAcLastContactDateOut($value)
    {
        $this->ac_last_contact_date_out = $value; return $this;
    }

    public function getAcContactCount()
    {
        return $this->ac_contact_count;
    }

    public function setAcContactCount($value)
    {
        $this->ac_contact_count = $value; return $this;
    }

    public function getAcContactCountIn()
    {
        return $this->ac_contact_count_in;
    }

    public function setAcContactCountIn($value)
    {
        $this->ac_contact_count_in = $value; return $this;
    }

    public function getAcContactCountOut()
    {
        return $this->ac_contact_count_out;
    }

    public function setAcContactCountOut($value)
    {
        $this->ac_contact_count_out = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }
}
/** End: EX_OroSalesBundle_Opportunity */

/** Start: EX_OroSalesBundle_B2bCustomer */
abstract class EX_OroSalesBundle_B2bCustomer implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $website = null;
    protected $employees = null;
    protected $ownership = null;
    protected $ticker_symbol = null;
    protected $rating = null;
    protected $ac_last_contact_date = null;
    protected $ac_last_contact_date_in = null;
    protected $ac_last_contact_date_out = null;
    protected $ac_contact_count = null;
    protected $ac_contact_count_in = null;
    protected $ac_contact_count_out = null;
    protected $serialized_data = null;

    public function __construct()
    {
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite($value)
    {
        $this->website = $value; return $this;
    }

    public function getEmployees()
    {
        return $this->employees;
    }

    public function setEmployees($value)
    {
        $this->employees = $value; return $this;
    }

    public function getOwnership()
    {
        return $this->ownership;
    }

    public function setOwnership($value)
    {
        $this->ownership = $value; return $this;
    }

    public function getTickerSymbol()
    {
        return $this->ticker_symbol;
    }

    public function setTickerSymbol($value)
    {
        $this->ticker_symbol = $value; return $this;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($value)
    {
        $this->rating = $value; return $this;
    }

    public function getAcLastContactDate()
    {
        return $this->ac_last_contact_date;
    }

    public function setAcLastContactDate($value)
    {
        $this->ac_last_contact_date = $value; return $this;
    }

    public function getAcLastContactDateIn()
    {
        return $this->ac_last_contact_date_in;
    }

    public function setAcLastContactDateIn($value)
    {
        $this->ac_last_contact_date_in = $value; return $this;
    }

    public function getAcLastContactDateOut()
    {
        return $this->ac_last_contact_date_out;
    }

    public function setAcLastContactDateOut($value)
    {
        $this->ac_last_contact_date_out = $value; return $this;
    }

    public function getAcContactCount()
    {
        return $this->ac_contact_count;
    }

    public function setAcContactCount($value)
    {
        $this->ac_contact_count = $value; return $this;
    }

    public function getAcContactCountIn()
    {
        return $this->ac_contact_count_in;
    }

    public function setAcContactCountIn($value)
    {
        $this->ac_contact_count_in = $value; return $this;
    }

    public function getAcContactCountOut()
    {
        return $this->ac_contact_count_out;
    }

    public function setAcContactCountOut($value)
    {
        $this->ac_contact_count_out = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroSalesBundle_B2bCustomer */

/** Start: EX_OroSalesBundle_LeadPhone */
abstract class EX_OroSalesBundle_LeadPhone extends \Oro\Bundle\AddressBundle\Entity\AbstractPhone implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct($phone = null)
    {
        parent::__construct($phone);
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroSalesBundle_LeadPhone */

/** Start: EX_OroSalesBundle_B2bCustomerPhone */
abstract class EX_OroSalesBundle_B2bCustomerPhone extends \Oro\Bundle\AddressBundle\Entity\AbstractPhone implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct($phone = null)
    {
        parent::__construct($phone);
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroSalesBundle_B2bCustomerPhone */

/** Start: EX_OroSalesBundle_LeadEmail */
abstract class EX_OroSalesBundle_LeadEmail extends \Oro\Bundle\AddressBundle\Entity\AbstractEmail implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct($email = null)
    {
        parent::__construct($email);
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroSalesBundle_LeadEmail */

/** Start: EX_OroContactUsBundle_ContactReason */
abstract class EX_OroContactUsBundle_ContactReason extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    /**
     * @param \Oro\Bundle\LocaleBundle\Entity\Localization|null $localization
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getTitle(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = null)
    {
        return $this->getFallbackValue($this->titles, $localization);
    }

    /**
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getDefaultTitle()
    {
        return $this->getDefaultFallbackValue($this->titles);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultTitle($value)
    {
        return $this->setDefaultFallbackValue($this->titles, $value);
    }

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroContactUsBundle_ContactReason */

/** Start: EX_OroContactUsBundle_ContactRequest */
abstract class EX_OroContactUsBundle_ContactRequest extends \Oro\Bundle\ContactUsBundle\Entity\AbstractContactRequest implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $ac_last_contact_date = null;
    protected $ac_last_contact_date_in = null;
    protected $ac_last_contact_date_out = null;
    protected $ac_contact_count = null;
    protected $ac_contact_count_in = null;
    protected $ac_contact_count_out = null;
    protected $serialized_data = null;

    public function __construct()
    {
    }

    public function getAcLastContactDate()
    {
        return $this->ac_last_contact_date;
    }

    public function setAcLastContactDate($value)
    {
        $this->ac_last_contact_date = $value; return $this;
    }

    public function getAcLastContactDateIn()
    {
        return $this->ac_last_contact_date_in;
    }

    public function setAcLastContactDateIn($value)
    {
        $this->ac_last_contact_date_in = $value; return $this;
    }

    public function getAcLastContactDateOut()
    {
        return $this->ac_last_contact_date_out;
    }

    public function setAcLastContactDateOut($value)
    {
        $this->ac_last_contact_date_out = $value; return $this;
    }

    public function getAcContactCount()
    {
        return $this->ac_contact_count;
    }

    public function setAcContactCount($value)
    {
        $this->ac_contact_count = $value; return $this;
    }

    public function getAcContactCountIn()
    {
        return $this->ac_contact_count_in;
    }

    public function setAcContactCountIn($value)
    {
        $this->ac_contact_count_in = $value; return $this;
    }

    public function getAcContactCountOut()
    {
        return $this->ac_contact_count_out;
    }

    public function setAcContactCountOut($value)
    {
        $this->ac_contact_count_out = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroContactUsBundle_ContactRequest */

/** Start: EX_OroCaseBundle_CaseEntity */
abstract class EX_OroCaseBundle_CaseEntity implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $ac_last_contact_date = null;
    protected $ac_last_contact_date_in = null;
    protected $ac_last_contact_date_out = null;
    protected $ac_contact_count = null;
    protected $ac_contact_count_in = null;
    protected $ac_contact_count_out = null;
    protected $serialized_data = null;

    public function __construct()
    {
    }

    public function getAcLastContactDate()
    {
        return $this->ac_last_contact_date;
    }

    public function setAcLastContactDate($value)
    {
        $this->ac_last_contact_date = $value; return $this;
    }

    public function getAcLastContactDateIn()
    {
        return $this->ac_last_contact_date_in;
    }

    public function setAcLastContactDateIn($value)
    {
        $this->ac_last_contact_date_in = $value; return $this;
    }

    public function getAcLastContactDateOut()
    {
        return $this->ac_last_contact_date_out;
    }

    public function setAcLastContactDateOut($value)
    {
        $this->ac_last_contact_date_out = $value; return $this;
    }

    public function getAcContactCount()
    {
        return $this->ac_contact_count;
    }

    public function setAcContactCount($value)
    {
        $this->ac_contact_count = $value; return $this;
    }

    public function getAcContactCountIn()
    {
        return $this->ac_contact_count_in;
    }

    public function setAcContactCountIn($value)
    {
        $this->ac_contact_count_in = $value; return $this;
    }

    public function getAcContactCountOut()
    {
        return $this->ac_contact_count_out;
    }

    public function setAcContactCountOut($value)
    {
        $this->ac_contact_count_out = $value; return $this;
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroCaseBundle_CaseEntity */

/** Start: EX_OroCaseBundle_CaseMailboxProcessSettings */
abstract class EX_OroCaseBundle_CaseMailboxProcessSettings extends \Oro\Bundle\EmailBundle\Entity\MailboxProcessSettings implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct()
    {
    }
}
/** End: EX_OroCaseBundle_CaseMailboxProcessSettings */

/** Start: EX_OroCaseBundle_CaseComment */
abstract class EX_OroCaseBundle_CaseComment extends \Oro\Bundle\CommentBundle\Entity\BaseComment implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $attachment = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function setAttachment($value)
    {
        $this->attachment = $value; return $this;
    }
}
/** End: EX_OroCaseBundle_CaseComment */

/** Start: EX_OroDotmailerBundle_Campaign */
abstract class EX_OroDotmailerBundle_Campaign implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $reply_action = null;
    protected $status = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getReplyAction()
    {
        return $this->reply_action;
    }

    public function setReplyAction($value)
    {
        $this->reply_action = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }
}
/** End: EX_OroDotmailerBundle_Campaign */

/** Start: EX_OroDotmailerBundle_AddressBookContactsExport */
abstract class EX_OroDotmailerBundle_AddressBookContactsExport implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $status = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }
}
/** End: EX_OroDotmailerBundle_AddressBookContactsExport */

/** Start: EX_OroDotmailerBundle_AddressBook */
abstract class EX_OroDotmailerBundle_AddressBook implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $visibility = null;
    protected $syncStatus = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function setVisibility($value)
    {
        $this->visibility = $value; return $this;
    }

    public function getSyncStatus()
    {
        return $this->syncStatus;
    }

    public function setSyncStatus($value)
    {
        $this->syncStatus = $value; return $this;
    }
}
/** End: EX_OroDotmailerBundle_AddressBook */

/** Start: EX_OroDotmailerBundle_DataField */
abstract class EX_OroDotmailerBundle_DataField implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $visibility = null;
    protected $type = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function setVisibility($value)
    {
        $this->visibility = $value; return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value; return $this;
    }
}
/** End: EX_OroDotmailerBundle_DataField */

/** Start: EX_OroDotmailerBundle_DataFieldMapping */
abstract class EX_OroDotmailerBundle_DataFieldMapping implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }
}
/** End: EX_OroDotmailerBundle_DataFieldMapping */

/** Start: EX_OroDotmailerBundle_Contact */
abstract class EX_OroDotmailerBundle_Contact implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $opt_in_type = null;
    protected $email_type = null;
    protected $status = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getOptInType()
    {
        return $this->opt_in_type;
    }

    public function setOptInType($value)
    {
        $this->opt_in_type = $value; return $this;
    }

    public function getEmailType()
    {
        return $this->email_type;
    }

    public function setEmailType($value)
    {
        $this->email_type = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }
}
/** End: EX_OroDotmailerBundle_Contact */

/** Start: EX_OroDotmailerBundle_AddressBookContact */
abstract class EX_OroDotmailerBundle_AddressBookContact implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $status = null;
    protected $exportOperationType = null;

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($value)
    {
        $this->status = $value; return $this;
    }

    public function getExportOperationType()
    {
        return $this->exportOperationType;
    }

    public function setExportOperationType($value)
    {
        $this->exportOperationType = $value; return $this;
    }
}
/** End: EX_OroDotmailerBundle_AddressBookContact */

/** Start: EX_OroEntityConfigBundle_AttributeFamily */
abstract class EX_OroEntityConfigBundle_AttributeFamily extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    use \Oro\Bundle\EntitySerializedFieldsBundle\Entity\SerializedFieldsTrait;

    protected $serialized_data = null;
    protected $image = null;

    /**
     * @param \Oro\Bundle\LocaleBundle\Entity\Localization|null $localization
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getLabel(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = null)
    {
        return $this->getFallbackValue($this->labels, $localization);
    }

    /**
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getDefaultLabel()
    {
        return $this->getDefaultFallbackValue($this->labels);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultLabel($value)
    {
        return $this->setDefaultFallbackValue($this->labels, $value);
    }

    public function __construct()
    {
    }

    /**
     * @internal
     */
    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    /**
     * @internal
     */
    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($value)
    {
        $this->image = $value; return $this;
    }
}
/** End: EX_OroEntityConfigBundle_AttributeFamily */

/** Start: EX_OroEntityConfigBundle_AttributeGroup */
abstract class EX_OroEntityConfigBundle_AttributeGroup extends \Oro\Bundle\LocaleBundle\Model\ExtendFallback implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    /**
     * @param \Oro\Bundle\LocaleBundle\Entity\Localization|null $localization
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getLabel(\Oro\Bundle\LocaleBundle\Entity\Localization $localization = null)
    {
        return $this->getFallbackValue($this->labels, $localization);
    }

    /**
     * @return \Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue|null
     */
    public function getDefaultLabel()
    {
        return $this->getDefaultFallbackValue($this->labels);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDefaultLabel($value)
    {
        return $this->setDefaultFallbackValue($this->labels, $value);
    }

    public function __construct()
    {
    }
}
/** End: EX_OroEntityConfigBundle_AttributeGroup */

/** Start: EV_Auth_Status */
class EV_Auth_Status extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Auth_Status */

/** Start: EV_Ce_Attendee_Status */
class EV_Ce_Attendee_Status extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Ce_Attendee_Status */

/** Start: EV_Ce_Attendee_Type */
class EV_Ce_Attendee_Type extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Ce_Attendee_Type */

/** Start: EV_Task_Status */
class EV_Task_Status extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Task_Status */

/** Start: EV_Ma_Type */
class EV_Ma_Type extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Ma_Type */

/** Start: EV_Lead_Source */
class EV_Lead_Source extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Lead_Source */

/** Start: EV_Opportunity_Status */
class EV_Opportunity_Status extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Opportunity_Status */

/** Start: EV_Lead_Status */
class EV_Lead_Status extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Lead_Status */

/** Start: EV_Dm_Cmp_Reply_Action */
class EV_Dm_Cmp_Reply_Action extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Cmp_Reply_Action */

/** Start: EV_Dm_Cmp_Status */
class EV_Dm_Cmp_Status extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Cmp_Status */

/** Start: EV_Dm_Ab_Visibility */
class EV_Dm_Ab_Visibility extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Ab_Visibility */

/** Start: EV_Dm_Import_Status */
class EV_Dm_Import_Status extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Import_Status */

/** Start: EV_Dm_Cnt_Opt_In_Type */
class EV_Dm_Cnt_Opt_In_Type extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Cnt_Opt_In_Type */

/** Start: EV_Dm_Cnt_Email_Type */
class EV_Dm_Cnt_Email_Type extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Cnt_Email_Type */

/** Start: EV_Dm_Cnt_Status */
class EV_Dm_Cnt_Status extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Cnt_Status */

/** Start: EV_Dm_Ab_Cnt_Exp_Type */
class EV_Dm_Ab_Cnt_Exp_Type extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Ab_Cnt_Exp_Type */

/** Start: EV_Dm_Df_Visibility */
class EV_Dm_Df_Visibility extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Df_Visibility */

/** Start: EV_Dm_Df_Type */
class EV_Dm_Df_Type extends \Oro\Bundle\EntityExtendBundle\Entity\AbstractEnumValue implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    public function __construct($id, $name, $priority = 0, $default = false)
    {
        parent::__construct($id, $name, $priority, $default);
    }
}
/** End: EV_Dm_Df_Type */
