<?php

namespace Symfony\Config\OroApi;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ApiFirewallsConfig 
{
    private $featureName;
    private $featureFirewallListeners;
    private $_usedProperties = [];
    
    /**
     * The name of the feature.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function featureName($value): self
    {
        $this->_usedProperties['featureName'] = true;
        $this->featureName = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function featureFirewallListeners($value): self
    {
        $this->_usedProperties['featureFirewallListeners'] = true;
        $this->featureFirewallListeners = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('feature_name', $value)) {
            $this->_usedProperties['featureName'] = true;
            $this->featureName = $value['feature_name'];
            unset($value['feature_name']);
        }
    
        if (array_key_exists('feature_firewall_listeners', $value)) {
            $this->_usedProperties['featureFirewallListeners'] = true;
            $this->featureFirewallListeners = $value['feature_firewall_listeners'];
            unset($value['feature_firewall_listeners']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['featureName'])) {
            $output['feature_name'] = $this->featureName;
        }
        if (isset($this->_usedProperties['featureFirewallListeners'])) {
            $output['feature_firewall_listeners'] = $this->featureFirewallListeners;
        }
    
        return $output;
    }

}
