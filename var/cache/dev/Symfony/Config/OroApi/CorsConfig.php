<?php

namespace Symfony\Config\OroApi;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class CorsConfig 
{
    private $preflightMaxAge;
    private $allowOrigins;
    private $allowCredentials;
    private $allowHeaders;
    private $exposeHeaders;
    private $_usedProperties = [];
    
    /**
     * The amount of seconds the user agent is allowed to cache CORS preflight requests.
     * @default 600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function preflightMaxAge($value): self
    {
        $this->_usedProperties['preflightMaxAge'] = true;
        $this->preflightMaxAge = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowOrigins($value): self
    {
        $this->_usedProperties['allowOrigins'] = true;
        $this->allowOrigins = $value;
    
        return $this;
    }
    
    /**
     * Indicates whether CORS request can include user credentials.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowCredentials($value): self
    {
        $this->_usedProperties['allowCredentials'] = true;
        $this->allowCredentials = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowHeaders($value): self
    {
        $this->_usedProperties['allowHeaders'] = true;
        $this->allowHeaders = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function exposeHeaders($value): self
    {
        $this->_usedProperties['exposeHeaders'] = true;
        $this->exposeHeaders = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('preflight_max_age', $value)) {
            $this->_usedProperties['preflightMaxAge'] = true;
            $this->preflightMaxAge = $value['preflight_max_age'];
            unset($value['preflight_max_age']);
        }
    
        if (array_key_exists('allow_origins', $value)) {
            $this->_usedProperties['allowOrigins'] = true;
            $this->allowOrigins = $value['allow_origins'];
            unset($value['allow_origins']);
        }
    
        if (array_key_exists('allow_credentials', $value)) {
            $this->_usedProperties['allowCredentials'] = true;
            $this->allowCredentials = $value['allow_credentials'];
            unset($value['allow_credentials']);
        }
    
        if (array_key_exists('allow_headers', $value)) {
            $this->_usedProperties['allowHeaders'] = true;
            $this->allowHeaders = $value['allow_headers'];
            unset($value['allow_headers']);
        }
    
        if (array_key_exists('expose_headers', $value)) {
            $this->_usedProperties['exposeHeaders'] = true;
            $this->exposeHeaders = $value['expose_headers'];
            unset($value['expose_headers']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['preflightMaxAge'])) {
            $output['preflight_max_age'] = $this->preflightMaxAge;
        }
        if (isset($this->_usedProperties['allowOrigins'])) {
            $output['allow_origins'] = $this->allowOrigins;
        }
        if (isset($this->_usedProperties['allowCredentials'])) {
            $output['allow_credentials'] = $this->allowCredentials;
        }
        if (isset($this->_usedProperties['allowHeaders'])) {
            $output['allow_headers'] = $this->allowHeaders;
        }
        if (isset($this->_usedProperties['exposeHeaders'])) {
            $output['expose_headers'] = $this->exposeHeaders;
        }
    
        return $output;
    }

}
