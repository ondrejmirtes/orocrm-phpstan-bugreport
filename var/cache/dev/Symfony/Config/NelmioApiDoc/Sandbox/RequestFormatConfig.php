<?php

namespace Symfony\Config\NelmioApiDoc\Sandbox;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class RequestFormatConfig 
{
    private $formats;
    private $method;
    private $defaultFormat;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function formats($value): self
    {
        $this->_usedProperties['formats'] = true;
        $this->formats = $value;
    
        return $this;
    }
    
    /**
     * @default 'format_param'
     * @param ParamConfigurator|'format_param'|'accept_header' $value
     * @return $this
     */
    public function method($value): self
    {
        $this->_usedProperties['method'] = true;
        $this->method = $value;
    
        return $this;
    }
    
    /**
     * @default 'json'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultFormat($value): self
    {
        $this->_usedProperties['defaultFormat'] = true;
        $this->defaultFormat = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('formats', $value)) {
            $this->_usedProperties['formats'] = true;
            $this->formats = $value['formats'];
            unset($value['formats']);
        }
    
        if (array_key_exists('method', $value)) {
            $this->_usedProperties['method'] = true;
            $this->method = $value['method'];
            unset($value['method']);
        }
    
        if (array_key_exists('default_format', $value)) {
            $this->_usedProperties['defaultFormat'] = true;
            $this->defaultFormat = $value['default_format'];
            unset($value['default_format']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['formats'])) {
            $output['formats'] = $this->formats;
        }
        if (isset($this->_usedProperties['method'])) {
            $output['method'] = $this->method;
        }
        if (isset($this->_usedProperties['defaultFormat'])) {
            $output['default_format'] = $this->defaultFormat;
        }
    
        return $output;
    }

}
