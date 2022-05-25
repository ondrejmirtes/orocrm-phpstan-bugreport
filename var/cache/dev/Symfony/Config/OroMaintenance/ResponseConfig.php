<?php

namespace Symfony\Config\OroMaintenance;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ResponseConfig 
{
    private $code;
    private $status;
    private $exceptionMessage;
    private $_usedProperties = [];
    
    /**
     * @default 503
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function code($value): self
    {
        $this->_usedProperties['code'] = true;
        $this->code = $value;
    
        return $this;
    }
    
    /**
     * @default 'Service Temporarily Unavailable'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function status($value): self
    {
        $this->_usedProperties['status'] = true;
        $this->status = $value;
    
        return $this;
    }
    
    /**
     * @default 'Service Temporarily Unavailable'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function exceptionMessage($value): self
    {
        $this->_usedProperties['exceptionMessage'] = true;
        $this->exceptionMessage = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('code', $value)) {
            $this->_usedProperties['code'] = true;
            $this->code = $value['code'];
            unset($value['code']);
        }
    
        if (array_key_exists('status', $value)) {
            $this->_usedProperties['status'] = true;
            $this->status = $value['status'];
            unset($value['status']);
        }
    
        if (array_key_exists('exception_message', $value)) {
            $this->_usedProperties['exceptionMessage'] = true;
            $this->exceptionMessage = $value['exception_message'];
            unset($value['exception_message']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['code'])) {
            $output['code'] = $this->code;
        }
        if (isset($this->_usedProperties['status'])) {
            $output['status'] = $this->status;
        }
        if (isset($this->_usedProperties['exceptionMessage'])) {
            $output['exception_message'] = $this->exceptionMessage;
        }
    
        return $output;
    }

}
