<?php

namespace Symfony\Config\OroSecurity;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class CsrfCookieConfig 
{
    private $cookieSecure;
    private $cookieHttponly;
    private $cookieSamesite;
    private $_usedProperties = [];
    
    /**
     * @default 'auto'
     * @param ParamConfigurator|true|false|'auto' $value
     * @return $this
     */
    public function cookieSecure($value): self
    {
        $this->_usedProperties['cookieSecure'] = true;
        $this->cookieSecure = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function cookieHttponly($value): self
    {
        $this->_usedProperties['cookieHttponly'] = true;
        $this->cookieHttponly = $value;
    
        return $this;
    }
    
    /**
     * @default 'lax'
     * @param ParamConfigurator|NULL|'lax'|'strict'|'none' $value
     * @return $this
     */
    public function cookieSamesite($value): self
    {
        $this->_usedProperties['cookieSamesite'] = true;
        $this->cookieSamesite = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('cookie_secure', $value)) {
            $this->_usedProperties['cookieSecure'] = true;
            $this->cookieSecure = $value['cookie_secure'];
            unset($value['cookie_secure']);
        }
    
        if (array_key_exists('cookie_httponly', $value)) {
            $this->_usedProperties['cookieHttponly'] = true;
            $this->cookieHttponly = $value['cookie_httponly'];
            unset($value['cookie_httponly']);
        }
    
        if (array_key_exists('cookie_samesite', $value)) {
            $this->_usedProperties['cookieSamesite'] = true;
            $this->cookieSamesite = $value['cookie_samesite'];
            unset($value['cookie_samesite']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cookieSecure'])) {
            $output['cookie_secure'] = $this->cookieSecure;
        }
        if (isset($this->_usedProperties['cookieHttponly'])) {
            $output['cookie_httponly'] = $this->cookieHttponly;
        }
        if (isset($this->_usedProperties['cookieSamesite'])) {
            $output['cookie_samesite'] = $this->cookieSamesite;
        }
    
        return $output;
    }

}
