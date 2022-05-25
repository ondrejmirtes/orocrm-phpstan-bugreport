<?php

namespace Symfony\Config\OroForm;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HtmlPurifierModesConfig'.\DIRECTORY_SEPARATOR.'AllowedHtmlElementsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class HtmlPurifierModesConfig 
{
    private $extends;
    private $allowedRel;
    private $allowedIframeDomains;
    private $allowedUriSchemes;
    private $allowedHtmlElements;
    private $_usedProperties = [];
    
    /**
     * Extends configuration from selected scope
     * @example default
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function extends($value): self
    {
        $this->_usedProperties['extends'] = true;
        $this->extends = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowedRel($value): self
    {
        $this->_usedProperties['allowedRel'] = true;
        $this->allowedRel = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowedIframeDomains($value): self
    {
        $this->_usedProperties['allowedIframeDomains'] = true;
        $this->allowedIframeDomains = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowedUriSchemes($value): self
    {
        $this->_usedProperties['allowedUriSchemes'] = true;
        $this->allowedUriSchemes = $value;
    
        return $this;
    }
    
    public function allowedHtmlElements(array $value = []): \Symfony\Config\OroForm\HtmlPurifierModesConfig\AllowedHtmlElementsConfig
    {
        $this->_usedProperties['allowedHtmlElements'] = true;
    
        return $this->allowedHtmlElements[] = new \Symfony\Config\OroForm\HtmlPurifierModesConfig\AllowedHtmlElementsConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('extends', $value)) {
            $this->_usedProperties['extends'] = true;
            $this->extends = $value['extends'];
            unset($value['extends']);
        }
    
        if (array_key_exists('allowed_rel', $value)) {
            $this->_usedProperties['allowedRel'] = true;
            $this->allowedRel = $value['allowed_rel'];
            unset($value['allowed_rel']);
        }
    
        if (array_key_exists('allowed_iframe_domains', $value)) {
            $this->_usedProperties['allowedIframeDomains'] = true;
            $this->allowedIframeDomains = $value['allowed_iframe_domains'];
            unset($value['allowed_iframe_domains']);
        }
    
        if (array_key_exists('allowed_uri_schemes', $value)) {
            $this->_usedProperties['allowedUriSchemes'] = true;
            $this->allowedUriSchemes = $value['allowed_uri_schemes'];
            unset($value['allowed_uri_schemes']);
        }
    
        if (array_key_exists('allowed_html_elements', $value)) {
            $this->_usedProperties['allowedHtmlElements'] = true;
            $this->allowedHtmlElements = array_map(function ($v) { return new \Symfony\Config\OroForm\HtmlPurifierModesConfig\AllowedHtmlElementsConfig($v); }, $value['allowed_html_elements']);
            unset($value['allowed_html_elements']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['extends'])) {
            $output['extends'] = $this->extends;
        }
        if (isset($this->_usedProperties['allowedRel'])) {
            $output['allowed_rel'] = $this->allowedRel;
        }
        if (isset($this->_usedProperties['allowedIframeDomains'])) {
            $output['allowed_iframe_domains'] = $this->allowedIframeDomains;
        }
        if (isset($this->_usedProperties['allowedUriSchemes'])) {
            $output['allowed_uri_schemes'] = $this->allowedUriSchemes;
        }
        if (isset($this->_usedProperties['allowedHtmlElements'])) {
            $output['allowed_html_elements'] = array_map(function ($v) { return $v->toArray(); }, $this->allowedHtmlElements);
        }
    
        return $output;
    }

}
