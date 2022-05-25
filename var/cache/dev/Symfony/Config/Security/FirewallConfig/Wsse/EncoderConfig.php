<?php

namespace Symfony\Config\Security\FirewallConfig\Wsse;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class EncoderConfig 
{
    private $algorithm;
    private $encodeHashAsBase64;
    private $iterations;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function algorithm($value): self
    {
        $this->_usedProperties['algorithm'] = true;
        $this->algorithm = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function encodeHashAsBase64($value): self
    {
        $this->_usedProperties['encodeHashAsBase64'] = true;
        $this->encodeHashAsBase64 = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iterations($value): self
    {
        $this->_usedProperties['iterations'] = true;
        $this->iterations = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('algorithm', $value)) {
            $this->_usedProperties['algorithm'] = true;
            $this->algorithm = $value['algorithm'];
            unset($value['algorithm']);
        }
    
        if (array_key_exists('encodeHashAsBase64', $value)) {
            $this->_usedProperties['encodeHashAsBase64'] = true;
            $this->encodeHashAsBase64 = $value['encodeHashAsBase64'];
            unset($value['encodeHashAsBase64']);
        }
    
        if (array_key_exists('iterations', $value)) {
            $this->_usedProperties['iterations'] = true;
            $this->iterations = $value['iterations'];
            unset($value['iterations']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['algorithm'])) {
            $output['algorithm'] = $this->algorithm;
        }
        if (isset($this->_usedProperties['encodeHashAsBase64'])) {
            $output['encodeHashAsBase64'] = $this->encodeHashAsBase64;
        }
        if (isset($this->_usedProperties['iterations'])) {
            $output['iterations'] = $this->iterations;
        }
    
        return $output;
    }

}
