<?php

namespace Symfony\Config\OroUser;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class PrivilegesConfig 
{
    private $label;
    private $viewType;
    private $types;
    private $fieldType;
    private $fixValues;
    private $defaultValue;
    private $showDefault;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function label($value): self
    {
        $this->_usedProperties['label'] = true;
        $this->label = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function viewType($value): self
    {
        $this->_usedProperties['viewType'] = true;
        $this->viewType = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function types($value): self
    {
        $this->_usedProperties['types'] = true;
        $this->types = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldType($value): self
    {
        $this->_usedProperties['fieldType'] = true;
        $this->fieldType = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fixValues($value): self
    {
        $this->_usedProperties['fixValues'] = true;
        $this->fixValues = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultValue($value): self
    {
        $this->_usedProperties['defaultValue'] = true;
        $this->defaultValue = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showDefault($value): self
    {
        $this->_usedProperties['showDefault'] = true;
        $this->showDefault = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('label', $value)) {
            $this->_usedProperties['label'] = true;
            $this->label = $value['label'];
            unset($value['label']);
        }
    
        if (array_key_exists('view_type', $value)) {
            $this->_usedProperties['viewType'] = true;
            $this->viewType = $value['view_type'];
            unset($value['view_type']);
        }
    
        if (array_key_exists('types', $value)) {
            $this->_usedProperties['types'] = true;
            $this->types = $value['types'];
            unset($value['types']);
        }
    
        if (array_key_exists('field_type', $value)) {
            $this->_usedProperties['fieldType'] = true;
            $this->fieldType = $value['field_type'];
            unset($value['field_type']);
        }
    
        if (array_key_exists('fix_values', $value)) {
            $this->_usedProperties['fixValues'] = true;
            $this->fixValues = $value['fix_values'];
            unset($value['fix_values']);
        }
    
        if (array_key_exists('default_value', $value)) {
            $this->_usedProperties['defaultValue'] = true;
            $this->defaultValue = $value['default_value'];
            unset($value['default_value']);
        }
    
        if (array_key_exists('show_default', $value)) {
            $this->_usedProperties['showDefault'] = true;
            $this->showDefault = $value['show_default'];
            unset($value['show_default']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['label'])) {
            $output['label'] = $this->label;
        }
        if (isset($this->_usedProperties['viewType'])) {
            $output['view_type'] = $this->viewType;
        }
        if (isset($this->_usedProperties['types'])) {
            $output['types'] = $this->types;
        }
        if (isset($this->_usedProperties['fieldType'])) {
            $output['field_type'] = $this->fieldType;
        }
        if (isset($this->_usedProperties['fixValues'])) {
            $output['fix_values'] = $this->fixValues;
        }
        if (isset($this->_usedProperties['defaultValue'])) {
            $output['default_value'] = $this->defaultValue;
        }
        if (isset($this->_usedProperties['showDefault'])) {
            $output['show_default'] = $this->showDefault;
        }
    
        return $output;
    }

}
