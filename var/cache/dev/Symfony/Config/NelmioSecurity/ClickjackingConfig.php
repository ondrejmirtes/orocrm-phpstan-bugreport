<?php

namespace Symfony\Config\NelmioSecurity;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Clickjacking'.\DIRECTORY_SEPARATOR.'PathConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class ClickjackingConfig 
{
    private $paths;
    private $contentTypes;
    private $_usedProperties = [];
    
    public function path(string $pattern, array $value = []): \Symfony\Config\NelmioSecurity\Clickjacking\PathConfig
    {
        if (!isset($this->paths[$pattern])) {
            $this->_usedProperties['paths'] = true;
    
            return $this->paths[$pattern] = new \Symfony\Config\NelmioSecurity\Clickjacking\PathConfig($value);
        }
        if ([] === $value) {
            return $this->paths[$pattern];
        }
    
        throw new InvalidConfigurationException('The node created by "path()" has already been initialized. You cannot pass values the second time you call path().');
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function contentTypes($value): self
    {
        $this->_usedProperties['contentTypes'] = true;
        $this->contentTypes = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('paths', $value)) {
            $this->_usedProperties['paths'] = true;
            $this->paths = array_map(function ($v) { return new \Symfony\Config\NelmioSecurity\Clickjacking\PathConfig($v); }, $value['paths']);
            unset($value['paths']);
        }
    
        if (array_key_exists('content_types', $value)) {
            $this->_usedProperties['contentTypes'] = true;
            $this->contentTypes = $value['content_types'];
            unset($value['content_types']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['paths'])) {
            $output['paths'] = array_map(function ($v) { return $v->toArray(); }, $this->paths);
        }
        if (isset($this->_usedProperties['contentTypes'])) {
            $output['content_types'] = $this->contentTypes;
        }
    
        return $output;
    }

}
