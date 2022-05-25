<?php

namespace Symfony\Config\Acl;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class VoterConfig 
{
    private $allowIfObjectIdentityUnavailable;
    private $_usedProperties = [];
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowIfObjectIdentityUnavailable($value): self
    {
        $this->_usedProperties['allowIfObjectIdentityUnavailable'] = true;
        $this->allowIfObjectIdentityUnavailable = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('allow_if_object_identity_unavailable', $value)) {
            $this->_usedProperties['allowIfObjectIdentityUnavailable'] = true;
            $this->allowIfObjectIdentityUnavailable = $value['allow_if_object_identity_unavailable'];
            unset($value['allow_if_object_identity_unavailable']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['allowIfObjectIdentityUnavailable'])) {
            $output['allow_if_object_identity_unavailable'] = $this->allowIfObjectIdentityUnavailable;
        }
    
        return $output;
    }

}
