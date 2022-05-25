<?php

namespace Symfony\Config\OroForm\HtmlPurifierModesConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class AllowedHtmlElementsConfig 
{
    private $attributes;
    private $hasClosingTag;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function attributes($value): self
    {
        $this->_usedProperties['attributes'] = true;
        $this->attributes = $value;
    
        return $this;
    }
    
    /**
     * Is HTML tag has closing end tag or not
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function hasClosingTag($value): self
    {
        $this->_usedProperties['hasClosingTag'] = true;
        $this->hasClosingTag = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('attributes', $value)) {
            $this->_usedProperties['attributes'] = true;
            $this->attributes = $value['attributes'];
            unset($value['attributes']);
        }
    
        if (array_key_exists('hasClosingTag', $value)) {
            $this->_usedProperties['hasClosingTag'] = true;
            $this->hasClosingTag = $value['hasClosingTag'];
            unset($value['hasClosingTag']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['attributes'])) {
            $output['attributes'] = $this->attributes;
        }
        if (isset($this->_usedProperties['hasClosingTag'])) {
            $output['hasClosingTag'] = $this->hasClosingTag;
        }
    
        return $output;
    }

}
