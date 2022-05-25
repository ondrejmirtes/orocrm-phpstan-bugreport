<?php

namespace Symfony\Config\OroApi;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ApiDocCacheConfig 
{
    private $excludedFeatures;
    private $resettableServices;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function excludedFeatures($value): self
    {
        $this->_usedProperties['excludedFeatures'] = true;
        $this->excludedFeatures = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function resettableServices($value): self
    {
        $this->_usedProperties['resettableServices'] = true;
        $this->resettableServices = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('excluded_features', $value)) {
            $this->_usedProperties['excludedFeatures'] = true;
            $this->excludedFeatures = $value['excluded_features'];
            unset($value['excluded_features']);
        }
    
        if (array_key_exists('resettable_services', $value)) {
            $this->_usedProperties['resettableServices'] = true;
            $this->resettableServices = $value['resettable_services'];
            unset($value['resettable_services']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['excludedFeatures'])) {
            $output['excluded_features'] = $this->excludedFeatures;
        }
        if (isset($this->_usedProperties['resettableServices'])) {
            $output['resettable_services'] = $this->resettableServices;
        }
    
        return $output;
    }

}
