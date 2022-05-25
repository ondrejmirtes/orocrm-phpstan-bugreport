<?php

namespace Symfony\Config\OroContact;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SocialUrlFormatConfig 
{
    private $twitter;
    private $facebook;
    private $googlePlus;
    private $linkedIn;
    private $_usedProperties = [];
    
    /**
     * @default 'https://twitter.com/%%username%%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function twitter($value): self
    {
        $this->_usedProperties['twitter'] = true;
        $this->twitter = $value;
    
        return $this;
    }
    
    /**
     * @default 'https://www.facebook.com/%%username%%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function facebook($value): self
    {
        $this->_usedProperties['facebook'] = true;
        $this->facebook = $value;
    
        return $this;
    }
    
    /**
     * @default 'https://profiles.google.com/%%username%%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function googlePlus($value): self
    {
        $this->_usedProperties['googlePlus'] = true;
        $this->googlePlus = $value;
    
        return $this;
    }
    
    /**
     * @default 'http://www.linkedin.com/in/%%username%%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function linkedIn($value): self
    {
        $this->_usedProperties['linkedIn'] = true;
        $this->linkedIn = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('twitter', $value)) {
            $this->_usedProperties['twitter'] = true;
            $this->twitter = $value['twitter'];
            unset($value['twitter']);
        }
    
        if (array_key_exists('facebook', $value)) {
            $this->_usedProperties['facebook'] = true;
            $this->facebook = $value['facebook'];
            unset($value['facebook']);
        }
    
        if (array_key_exists('google_plus', $value)) {
            $this->_usedProperties['googlePlus'] = true;
            $this->googlePlus = $value['google_plus'];
            unset($value['google_plus']);
        }
    
        if (array_key_exists('linked_in', $value)) {
            $this->_usedProperties['linkedIn'] = true;
            $this->linkedIn = $value['linked_in'];
            unset($value['linked_in']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['twitter'])) {
            $output['twitter'] = $this->twitter;
        }
        if (isset($this->_usedProperties['facebook'])) {
            $output['facebook'] = $this->facebook;
        }
        if (isset($this->_usedProperties['googlePlus'])) {
            $output['google_plus'] = $this->googlePlus;
        }
        if (isset($this->_usedProperties['linkedIn'])) {
            $output['linked_in'] = $this->linkedIn;
        }
    
        return $output;
    }

}
