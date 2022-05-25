<?php

namespace Symfony\Config\NelmioApiDoc\Swagger;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class InfoConfig 
{
    private $title;
    private $description;
    private $termsOfServiceUrl;
    private $contact;
    private $license;
    private $licenseUrl;
    private $_usedProperties = [];
    
    /**
     * @default 'Symfony2'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): self
    {
        $this->_usedProperties['title'] = true;
        $this->title = $value;
    
        return $this;
    }
    
    /**
     * @default 'My awesome Symfony2 app!'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): self
    {
        $this->_usedProperties['description'] = true;
        $this->description = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function termsOfServiceUrl($value): self
    {
        $this->_usedProperties['termsOfServiceUrl'] = true;
        $this->termsOfServiceUrl = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function contact($value): self
    {
        $this->_usedProperties['contact'] = true;
        $this->contact = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function license($value): self
    {
        $this->_usedProperties['license'] = true;
        $this->license = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function licenseUrl($value): self
    {
        $this->_usedProperties['licenseUrl'] = true;
        $this->licenseUrl = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('title', $value)) {
            $this->_usedProperties['title'] = true;
            $this->title = $value['title'];
            unset($value['title']);
        }
    
        if (array_key_exists('description', $value)) {
            $this->_usedProperties['description'] = true;
            $this->description = $value['description'];
            unset($value['description']);
        }
    
        if (array_key_exists('TermsOfServiceUrl', $value)) {
            $this->_usedProperties['termsOfServiceUrl'] = true;
            $this->termsOfServiceUrl = $value['TermsOfServiceUrl'];
            unset($value['TermsOfServiceUrl']);
        }
    
        if (array_key_exists('contact', $value)) {
            $this->_usedProperties['contact'] = true;
            $this->contact = $value['contact'];
            unset($value['contact']);
        }
    
        if (array_key_exists('license', $value)) {
            $this->_usedProperties['license'] = true;
            $this->license = $value['license'];
            unset($value['license']);
        }
    
        if (array_key_exists('licenseUrl', $value)) {
            $this->_usedProperties['licenseUrl'] = true;
            $this->licenseUrl = $value['licenseUrl'];
            unset($value['licenseUrl']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['title'])) {
            $output['title'] = $this->title;
        }
        if (isset($this->_usedProperties['description'])) {
            $output['description'] = $this->description;
        }
        if (isset($this->_usedProperties['termsOfServiceUrl'])) {
            $output['TermsOfServiceUrl'] = $this->termsOfServiceUrl;
        }
        if (isset($this->_usedProperties['contact'])) {
            $output['contact'] = $this->contact;
        }
        if (isset($this->_usedProperties['license'])) {
            $output['license'] = $this->license;
        }
        if (isset($this->_usedProperties['licenseUrl'])) {
            $output['licenseUrl'] = $this->licenseUrl;
        }
    
        return $output;
    }

}
