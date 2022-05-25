<?php

namespace Symfony\Config\NelmioApiDoc\Sandbox;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class AuthenticationConfig 
{
    private $delivery;
    private $name;
    private $type;
    private $customEndpoint;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function delivery($value): self
    {
        $this->_usedProperties['delivery'] = true;
        $this->delivery = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;
    
        return $this;
    }
    
    /**
     * Required if http delivery is selected.
     * @default null
     * @param ParamConfigurator|'basic'|'bearer' $value
     * @return $this
     */
    public function type($value): self
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function customEndpoint($value): self
    {
        $this->_usedProperties['customEndpoint'] = true;
        $this->customEndpoint = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('delivery', $value)) {
            $this->_usedProperties['delivery'] = true;
            $this->delivery = $value['delivery'];
            unset($value['delivery']);
        }
    
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }
    
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (array_key_exists('custom_endpoint', $value)) {
            $this->_usedProperties['customEndpoint'] = true;
            $this->customEndpoint = $value['custom_endpoint'];
            unset($value['custom_endpoint']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['delivery'])) {
            $output['delivery'] = $this->delivery;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['customEndpoint'])) {
            $output['custom_endpoint'] = $this->customEndpoint;
        }
    
        return $output;
    }

}
