<?php

namespace Symfony\Config\OroEntityPagination;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EnabledConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'LimitConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $enabled;
    private $limit;
    private $_usedProperties = [];
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function resolved($value): self
    {
        $this->_usedProperties['resolved'] = true;
        $this->resolved = $value;
    
        return $this;
    }
    
    public function enabled(array $value = []): \Symfony\Config\OroEntityPagination\Settings\EnabledConfig
    {
        if (null === $this->enabled) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = new \Symfony\Config\OroEntityPagination\Settings\EnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "enabled()" has already been initialized. You cannot pass values the second time you call enabled().');
        }
    
        return $this->enabled;
    }
    
    public function limit(array $value = []): \Symfony\Config\OroEntityPagination\Settings\LimitConfig
    {
        if (null === $this->limit) {
            $this->_usedProperties['limit'] = true;
            $this->limit = new \Symfony\Config\OroEntityPagination\Settings\LimitConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "limit()" has already been initialized. You cannot pass values the second time you call limit().');
        }
    
        return $this->limit;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = new \Symfony\Config\OroEntityPagination\Settings\EnabledConfig($value['enabled']);
            unset($value['enabled']);
        }
    
        if (array_key_exists('limit', $value)) {
            $this->_usedProperties['limit'] = true;
            $this->limit = new \Symfony\Config\OroEntityPagination\Settings\LimitConfig($value['limit']);
            unset($value['limit']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['resolved'])) {
            $output['resolved'] = $this->resolved;
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled->toArray();
        }
        if (isset($this->_usedProperties['limit'])) {
            $output['limit'] = $this->limit->toArray();
        }
    
        return $output;
    }

}
