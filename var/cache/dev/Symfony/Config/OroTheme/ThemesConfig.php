<?php

namespace Symfony\Config\OroTheme;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ThemesConfig 
{
    private $label;
    private $logo;
    private $icon;
    private $screenshot;
    private $rtlSupport;
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
    public function logo($value): self
    {
        $this->_usedProperties['logo'] = true;
        $this->logo = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function icon($value): self
    {
        $this->_usedProperties['icon'] = true;
        $this->icon = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function screenshot($value): self
    {
        $this->_usedProperties['screenshot'] = true;
        $this->screenshot = $value;
    
        return $this;
    }
    
    /**
     * Defines whether Theme supports RTL and additional *.rtl.css have to be build
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function rtlSupport($value): self
    {
        $this->_usedProperties['rtlSupport'] = true;
        $this->rtlSupport = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('label', $value)) {
            $this->_usedProperties['label'] = true;
            $this->label = $value['label'];
            unset($value['label']);
        }
    
        if (array_key_exists('logo', $value)) {
            $this->_usedProperties['logo'] = true;
            $this->logo = $value['logo'];
            unset($value['logo']);
        }
    
        if (array_key_exists('icon', $value)) {
            $this->_usedProperties['icon'] = true;
            $this->icon = $value['icon'];
            unset($value['icon']);
        }
    
        if (array_key_exists('screenshot', $value)) {
            $this->_usedProperties['screenshot'] = true;
            $this->screenshot = $value['screenshot'];
            unset($value['screenshot']);
        }
    
        if (array_key_exists('rtl_support', $value)) {
            $this->_usedProperties['rtlSupport'] = true;
            $this->rtlSupport = $value['rtl_support'];
            unset($value['rtl_support']);
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
        if (isset($this->_usedProperties['logo'])) {
            $output['logo'] = $this->logo;
        }
        if (isset($this->_usedProperties['icon'])) {
            $output['icon'] = $this->icon;
        }
        if (isset($this->_usedProperties['screenshot'])) {
            $output['screenshot'] = $this->screenshot;
        }
        if (isset($this->_usedProperties['rtlSupport'])) {
            $output['rtl_support'] = $this->rtlSupport;
        }
    
        return $output;
    }

}
