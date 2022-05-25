<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroSearch'.\DIRECTORY_SEPARATOR.'RequiredPluginsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroSearch'.\DIRECTORY_SEPARATOR.'RequiredAttributesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroSearchConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $engine;
    private $requiredPlugins;
    private $requiredAttributes;
    private $engineParameters;
    private $logQueries;
    private $itemContainerTemplate;
    private $_usedProperties = [];
    
    /**
     * @default 'orm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function engine($value): self
    {
        $this->_usedProperties['engine'] = true;
        $this->engine = $value;
    
        return $this;
    }
    
    public function requiredPlugins(array $value = []): \Symfony\Config\OroSearch\RequiredPluginsConfig
    {
        $this->_usedProperties['requiredPlugins'] = true;
    
        return $this->requiredPlugins[] = new \Symfony\Config\OroSearch\RequiredPluginsConfig($value);
    }
    
    public function requiredAttributes(string $attribute_name, array $value = []): \Symfony\Config\OroSearch\RequiredAttributesConfig
    {
        if (!isset($this->requiredAttributes[$attribute_name])) {
            $this->_usedProperties['requiredAttributes'] = true;
    
            return $this->requiredAttributes[$attribute_name] = new \Symfony\Config\OroSearch\RequiredAttributesConfig($value);
        }
        if ([] === $value) {
            return $this->requiredAttributes[$attribute_name];
        }
    
        throw new InvalidConfigurationException('The node created by "requiredAttributes()" has already been initialized. You cannot pass values the second time you call requiredAttributes().');
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function engineParameters($value): self
    {
        $this->_usedProperties['engineParameters'] = true;
        $this->engineParameters = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function logQueries($value): self
    {
        $this->_usedProperties['logQueries'] = true;
        $this->logQueries = $value;
    
        return $this;
    }
    
    /**
     * @default '@OroSearch/Datagrid/itemContainer.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function itemContainerTemplate($value): self
    {
        $this->_usedProperties['itemContainerTemplate'] = true;
        $this->itemContainerTemplate = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_search';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('engine', $value)) {
            $this->_usedProperties['engine'] = true;
            $this->engine = $value['engine'];
            unset($value['engine']);
        }
    
        if (array_key_exists('required_plugins', $value)) {
            $this->_usedProperties['requiredPlugins'] = true;
            $this->requiredPlugins = array_map(function ($v) { return new \Symfony\Config\OroSearch\RequiredPluginsConfig($v); }, $value['required_plugins']);
            unset($value['required_plugins']);
        }
    
        if (array_key_exists('required_attributes', $value)) {
            $this->_usedProperties['requiredAttributes'] = true;
            $this->requiredAttributes = array_map(function ($v) { return new \Symfony\Config\OroSearch\RequiredAttributesConfig($v); }, $value['required_attributes']);
            unset($value['required_attributes']);
        }
    
        if (array_key_exists('engine_parameters', $value)) {
            $this->_usedProperties['engineParameters'] = true;
            $this->engineParameters = $value['engine_parameters'];
            unset($value['engine_parameters']);
        }
    
        if (array_key_exists('log_queries', $value)) {
            $this->_usedProperties['logQueries'] = true;
            $this->logQueries = $value['log_queries'];
            unset($value['log_queries']);
        }
    
        if (array_key_exists('item_container_template', $value)) {
            $this->_usedProperties['itemContainerTemplate'] = true;
            $this->itemContainerTemplate = $value['item_container_template'];
            unset($value['item_container_template']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['engine'])) {
            $output['engine'] = $this->engine;
        }
        if (isset($this->_usedProperties['requiredPlugins'])) {
            $output['required_plugins'] = array_map(function ($v) { return $v->toArray(); }, $this->requiredPlugins);
        }
        if (isset($this->_usedProperties['requiredAttributes'])) {
            $output['required_attributes'] = array_map(function ($v) { return $v->toArray(); }, $this->requiredAttributes);
        }
        if (isset($this->_usedProperties['engineParameters'])) {
            $output['engine_parameters'] = $this->engineParameters;
        }
        if (isset($this->_usedProperties['logQueries'])) {
            $output['log_queries'] = $this->logQueries;
        }
        if (isset($this->_usedProperties['itemContainerTemplate'])) {
            $output['item_container_template'] = $this->itemContainerTemplate;
        }
    
        return $output;
    }

}
