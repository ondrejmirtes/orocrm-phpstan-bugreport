<?php

namespace Symfony\Config\NelmioApiDoc;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class CacheConfig 
{
    private $enabled;
    private $file;
    private $_usedProperties = [];
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.cache_dir%/api-doc.cache'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function file($value): self
    {
        $this->_usedProperties['file'] = true;
        $this->file = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (array_key_exists('file', $value)) {
            $this->_usedProperties['file'] = true;
            $this->file = $value['file'];
            unset($value['file']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['file'])) {
            $output['file'] = $this->file;
        }
    
        return $output;
    }

}
