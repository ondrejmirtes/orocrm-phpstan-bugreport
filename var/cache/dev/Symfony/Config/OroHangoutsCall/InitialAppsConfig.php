<?php

namespace Symfony\Config\OroHangoutsCall;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class InitialAppsConfig 
{
    private $appId;
    private $appType;
    private $appName;
    private $basePath;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function appId($value): self
    {
        $this->_usedProperties['appId'] = true;
        $this->appId = $value;
    
        return $this;
    }
    
    /**
     * @default 'ROOM_APP'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function appType($value): self
    {
        $this->_usedProperties['appType'] = true;
        $this->appType = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function appName($value): self
    {
        $this->_usedProperties['appName'] = true;
        $this->appName = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function basePath($value): self
    {
        $this->_usedProperties['basePath'] = true;
        $this->basePath = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('app_id', $value)) {
            $this->_usedProperties['appId'] = true;
            $this->appId = $value['app_id'];
            unset($value['app_id']);
        }
    
        if (array_key_exists('app_type', $value)) {
            $this->_usedProperties['appType'] = true;
            $this->appType = $value['app_type'];
            unset($value['app_type']);
        }
    
        if (array_key_exists('app_name', $value)) {
            $this->_usedProperties['appName'] = true;
            $this->appName = $value['app_name'];
            unset($value['app_name']);
        }
    
        if (array_key_exists('base_path', $value)) {
            $this->_usedProperties['basePath'] = true;
            $this->basePath = $value['base_path'];
            unset($value['base_path']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['appId'])) {
            $output['app_id'] = $this->appId;
        }
        if (isset($this->_usedProperties['appType'])) {
            $output['app_type'] = $this->appType;
        }
        if (isset($this->_usedProperties['appName'])) {
            $output['app_name'] = $this->appName;
        }
        if (isset($this->_usedProperties['basePath'])) {
            $output['base_path'] = $this->basePath;
        }
    
        return $output;
    }

}
