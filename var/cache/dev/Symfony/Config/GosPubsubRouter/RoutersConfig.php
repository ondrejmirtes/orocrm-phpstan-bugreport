<?php

namespace Symfony\Config\GosPubsubRouter;

require_once __DIR__.\DIRECTORY_SEPARATOR.'RoutersConfig'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class RoutersConfig 
{
    private $resources;
    private $_usedProperties = [];
    
    public function resources(array $value = []): \Symfony\Config\GosPubsubRouter\RoutersConfig\ResourcesConfig
    {
        $this->_usedProperties['resources'] = true;
    
        return $this->resources[] = new \Symfony\Config\GosPubsubRouter\RoutersConfig\ResourcesConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resources', $value)) {
            $this->_usedProperties['resources'] = true;
            $this->resources = array_map(function ($v) { return new \Symfony\Config\GosPubsubRouter\RoutersConfig\ResourcesConfig($v); }, $value['resources']);
            unset($value['resources']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['resources'])) {
            $output['resources'] = array_map(function ($v) { return $v->toArray(); }, $this->resources);
        }
    
        return $output;
    }

}
