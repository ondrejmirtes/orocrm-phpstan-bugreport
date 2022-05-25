<?php

namespace Symfony\Config\Acl;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class CacheConfig 
{
    private $id;
    private $pool;
    private $prefix;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): self
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;
    
        return $this;
    }
    
    /**
     * The cache pool used to store ACLs
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pool($value): self
    {
        $this->_usedProperties['pool'] = true;
        $this->pool = $value;
    
        return $this;
    }
    
    /**
     * @default 'sf_acl_'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefix($value): self
    {
        $this->_usedProperties['prefix'] = true;
        $this->prefix = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
        }
    
        if (array_key_exists('pool', $value)) {
            $this->_usedProperties['pool'] = true;
            $this->pool = $value['pool'];
            unset($value['pool']);
        }
    
        if (array_key_exists('prefix', $value)) {
            $this->_usedProperties['prefix'] = true;
            $this->prefix = $value['prefix'];
            unset($value['prefix']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['pool'])) {
            $output['pool'] = $this->pool;
        }
        if (isset($this->_usedProperties['prefix'])) {
            $output['prefix'] = $this->prefix;
        }
    
        return $output;
    }

}
