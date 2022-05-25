<?php

namespace Symfony\Config\OroHelp;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class DefaultsConfig 
{
    private $server;
    private $prefix;
    private $uri;
    private $link;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function server($value): self
    {
        $this->_usedProperties['server'] = true;
        $this->server = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefix($value): self
    {
        $this->_usedProperties['prefix'] = true;
        $this->prefix = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uri($value): self
    {
        $this->_usedProperties['uri'] = true;
        $this->uri = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function link($value): self
    {
        $this->_usedProperties['link'] = true;
        $this->link = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('server', $value)) {
            $this->_usedProperties['server'] = true;
            $this->server = $value['server'];
            unset($value['server']);
        }
    
        if (array_key_exists('prefix', $value)) {
            $this->_usedProperties['prefix'] = true;
            $this->prefix = $value['prefix'];
            unset($value['prefix']);
        }
    
        if (array_key_exists('uri', $value)) {
            $this->_usedProperties['uri'] = true;
            $this->uri = $value['uri'];
            unset($value['uri']);
        }
    
        if (array_key_exists('link', $value)) {
            $this->_usedProperties['link'] = true;
            $this->link = $value['link'];
            unset($value['link']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['server'])) {
            $output['server'] = $this->server;
        }
        if (isset($this->_usedProperties['prefix'])) {
            $output['prefix'] = $this->prefix;
        }
        if (isset($this->_usedProperties['uri'])) {
            $output['uri'] = $this->uri;
        }
        if (isset($this->_usedProperties['link'])) {
            $output['link'] = $this->link;
        }
    
        return $output;
    }

}
