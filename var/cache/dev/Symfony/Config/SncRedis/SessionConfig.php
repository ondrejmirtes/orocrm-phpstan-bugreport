<?php

namespace Symfony\Config\SncRedis;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SessionConfig 
{
    private $client;
    private $prefix;
    private $ttl;
    private $locking;
    private $spinLockWait;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function client($value): self
    {
        $this->_usedProperties['client'] = true;
        $this->client = $value;
    
        return $this;
    }
    
    /**
     * @default 'session'
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
    public function ttl($value): self
    {
        $this->_usedProperties['ttl'] = true;
        $this->ttl = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function locking($value): self
    {
        $this->_usedProperties['locking'] = true;
        $this->locking = $value;
    
        return $this;
    }
    
    /**
     * @default 150000
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function spinLockWait($value): self
    {
        $this->_usedProperties['spinLockWait'] = true;
        $this->spinLockWait = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
        }
    
        if (array_key_exists('prefix', $value)) {
            $this->_usedProperties['prefix'] = true;
            $this->prefix = $value['prefix'];
            unset($value['prefix']);
        }
    
        if (array_key_exists('ttl', $value)) {
            $this->_usedProperties['ttl'] = true;
            $this->ttl = $value['ttl'];
            unset($value['ttl']);
        }
    
        if (array_key_exists('locking', $value)) {
            $this->_usedProperties['locking'] = true;
            $this->locking = $value['locking'];
            unset($value['locking']);
        }
    
        if (array_key_exists('spin_lock_wait', $value)) {
            $this->_usedProperties['spinLockWait'] = true;
            $this->spinLockWait = $value['spin_lock_wait'];
            unset($value['spin_lock_wait']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['client'])) {
            $output['client'] = $this->client;
        }
        if (isset($this->_usedProperties['prefix'])) {
            $output['prefix'] = $this->prefix;
        }
        if (isset($this->_usedProperties['ttl'])) {
            $output['ttl'] = $this->ttl;
        }
        if (isset($this->_usedProperties['locking'])) {
            $output['locking'] = $this->locking;
        }
        if (isset($this->_usedProperties['spinLockWait'])) {
            $output['spin_lock_wait'] = $this->spinLockWait;
        }
    
        return $output;
    }

}
