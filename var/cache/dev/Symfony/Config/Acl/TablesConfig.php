<?php

namespace Symfony\Config\Acl;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class TablesConfig 
{
    private $class;
    private $entry;
    private $objectIdentity;
    private $objectIdentityAncestors;
    private $securityIdentity;
    private $_usedProperties = [];
    
    /**
     * @default 'acl_classes'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): self
    {
        $this->_usedProperties['class'] = true;
        $this->class = $value;
    
        return $this;
    }
    
    /**
     * @default 'acl_entries'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function entry($value): self
    {
        $this->_usedProperties['entry'] = true;
        $this->entry = $value;
    
        return $this;
    }
    
    /**
     * @default 'acl_object_identities'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function objectIdentity($value): self
    {
        $this->_usedProperties['objectIdentity'] = true;
        $this->objectIdentity = $value;
    
        return $this;
    }
    
    /**
     * @default 'acl_object_identity_ancestors'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function objectIdentityAncestors($value): self
    {
        $this->_usedProperties['objectIdentityAncestors'] = true;
        $this->objectIdentityAncestors = $value;
    
        return $this;
    }
    
    /**
     * @default 'acl_security_identities'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityIdentity($value): self
    {
        $this->_usedProperties['securityIdentity'] = true;
        $this->securityIdentity = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('class', $value)) {
            $this->_usedProperties['class'] = true;
            $this->class = $value['class'];
            unset($value['class']);
        }
    
        if (array_key_exists('entry', $value)) {
            $this->_usedProperties['entry'] = true;
            $this->entry = $value['entry'];
            unset($value['entry']);
        }
    
        if (array_key_exists('object_identity', $value)) {
            $this->_usedProperties['objectIdentity'] = true;
            $this->objectIdentity = $value['object_identity'];
            unset($value['object_identity']);
        }
    
        if (array_key_exists('object_identity_ancestors', $value)) {
            $this->_usedProperties['objectIdentityAncestors'] = true;
            $this->objectIdentityAncestors = $value['object_identity_ancestors'];
            unset($value['object_identity_ancestors']);
        }
    
        if (array_key_exists('security_identity', $value)) {
            $this->_usedProperties['securityIdentity'] = true;
            $this->securityIdentity = $value['security_identity'];
            unset($value['security_identity']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class;
        }
        if (isset($this->_usedProperties['entry'])) {
            $output['entry'] = $this->entry;
        }
        if (isset($this->_usedProperties['objectIdentity'])) {
            $output['object_identity'] = $this->objectIdentity;
        }
        if (isset($this->_usedProperties['objectIdentityAncestors'])) {
            $output['object_identity_ancestors'] = $this->objectIdentityAncestors;
        }
        if (isset($this->_usedProperties['securityIdentity'])) {
            $output['security_identity'] = $this->securityIdentity;
        }
    
        return $output;
    }

}
