<?php

namespace Symfony\Config\OroMaintenance;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class AuthorizedConfig 
{
    private $path;
    private $host;
    private $ips;
    private $query;
    private $cookie;
    private $route;
    private $attributes;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->_usedProperties['host'] = true;
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ips($value = array (
    )): self
    {
        $this->_usedProperties['ips'] = true;
        $this->ips = $value;
    
        return $this;
    }
    
    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function query($value = array (
    )): self
    {
        $this->_usedProperties['query'] = true;
        $this->query = $value;
    
        return $this;
    }
    
    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookie($value = array (
    )): self
    {
        $this->_usedProperties['cookie'] = true;
        $this->cookie = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function route($value): self
    {
        $this->_usedProperties['route'] = true;
        $this->route = $value;
    
        return $this;
    }
    
    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function attributes($value = array (
    )): self
    {
        $this->_usedProperties['attributes'] = true;
        $this->attributes = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (array_key_exists('host', $value)) {
            $this->_usedProperties['host'] = true;
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (array_key_exists('ips', $value)) {
            $this->_usedProperties['ips'] = true;
            $this->ips = $value['ips'];
            unset($value['ips']);
        }
    
        if (array_key_exists('query', $value)) {
            $this->_usedProperties['query'] = true;
            $this->query = $value['query'];
            unset($value['query']);
        }
    
        if (array_key_exists('cookie', $value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = $value['cookie'];
            unset($value['cookie']);
        }
    
        if (array_key_exists('route', $value)) {
            $this->_usedProperties['route'] = true;
            $this->route = $value['route'];
            unset($value['route']);
        }
    
        if (array_key_exists('attributes', $value)) {
            $this->_usedProperties['attributes'] = true;
            $this->attributes = $value['attributes'];
            unset($value['attributes']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['host'])) {
            $output['host'] = $this->host;
        }
        if (isset($this->_usedProperties['ips'])) {
            $output['ips'] = $this->ips;
        }
        if (isset($this->_usedProperties['query'])) {
            $output['query'] = $this->query;
        }
        if (isset($this->_usedProperties['cookie'])) {
            $output['cookie'] = $this->cookie;
        }
        if (isset($this->_usedProperties['route'])) {
            $output['route'] = $this->route;
        }
        if (isset($this->_usedProperties['attributes'])) {
            $output['attributes'] = $this->attributes;
        }
    
        return $output;
    }

}
