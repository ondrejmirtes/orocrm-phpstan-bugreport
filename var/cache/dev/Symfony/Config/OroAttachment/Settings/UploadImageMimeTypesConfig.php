<?php

namespace Symfony\Config\OroAttachment\Settings;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class UploadImageMimeTypesConfig 
{
    private $value;
    private $scope;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function value($value): self
    {
        $this->_usedProperties['value'] = true;
        $this->value = $value;
    
        return $this;
    }
    
    /**
     * @default 'app'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function scope($value): self
    {
        $this->_usedProperties['scope'] = true;
        $this->scope = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('value', $value)) {
            $this->_usedProperties['value'] = true;
            $this->value = $value['value'];
            unset($value['value']);
        }
    
        if (array_key_exists('scope', $value)) {
            $this->_usedProperties['scope'] = true;
            $this->scope = $value['scope'];
            unset($value['scope']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['value'])) {
            $output['value'] = $this->value;
        }
        if (isset($this->_usedProperties['scope'])) {
            $output['scope'] = $this->scope;
        }
    
        return $output;
    }

}
