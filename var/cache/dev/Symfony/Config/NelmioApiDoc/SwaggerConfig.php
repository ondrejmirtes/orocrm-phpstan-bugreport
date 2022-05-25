<?php

namespace Symfony\Config\NelmioApiDoc;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Swagger'.\DIRECTORY_SEPARATOR.'InfoConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SwaggerConfig 
{
    private $modelNamingStrategy;
    private $apiBasePath;
    private $swaggerVersion;
    private $apiVersion;
    private $info;
    private $_usedProperties = [];
    
    /**
     * @default 'dot_notation'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function modelNamingStrategy($value): self
    {
        $this->_usedProperties['modelNamingStrategy'] = true;
        $this->modelNamingStrategy = $value;
    
        return $this;
    }
    
    /**
     * @default '/api'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiBasePath($value): self
    {
        $this->_usedProperties['apiBasePath'] = true;
        $this->apiBasePath = $value;
    
        return $this;
    }
    
    /**
     * @default '1.2'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function swaggerVersion($value): self
    {
        $this->_usedProperties['swaggerVersion'] = true;
        $this->swaggerVersion = $value;
    
        return $this;
    }
    
    /**
     * @default '0.1'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiVersion($value): self
    {
        $this->_usedProperties['apiVersion'] = true;
        $this->apiVersion = $value;
    
        return $this;
    }
    
    public function info(array $value = []): \Symfony\Config\NelmioApiDoc\Swagger\InfoConfig
    {
        if (null === $this->info) {
            $this->_usedProperties['info'] = true;
            $this->info = new \Symfony\Config\NelmioApiDoc\Swagger\InfoConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "info()" has already been initialized. You cannot pass values the second time you call info().');
        }
    
        return $this->info;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('model_naming_strategy', $value)) {
            $this->_usedProperties['modelNamingStrategy'] = true;
            $this->modelNamingStrategy = $value['model_naming_strategy'];
            unset($value['model_naming_strategy']);
        }
    
        if (array_key_exists('api_base_path', $value)) {
            $this->_usedProperties['apiBasePath'] = true;
            $this->apiBasePath = $value['api_base_path'];
            unset($value['api_base_path']);
        }
    
        if (array_key_exists('swagger_version', $value)) {
            $this->_usedProperties['swaggerVersion'] = true;
            $this->swaggerVersion = $value['swagger_version'];
            unset($value['swagger_version']);
        }
    
        if (array_key_exists('api_version', $value)) {
            $this->_usedProperties['apiVersion'] = true;
            $this->apiVersion = $value['api_version'];
            unset($value['api_version']);
        }
    
        if (array_key_exists('info', $value)) {
            $this->_usedProperties['info'] = true;
            $this->info = new \Symfony\Config\NelmioApiDoc\Swagger\InfoConfig($value['info']);
            unset($value['info']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['modelNamingStrategy'])) {
            $output['model_naming_strategy'] = $this->modelNamingStrategy;
        }
        if (isset($this->_usedProperties['apiBasePath'])) {
            $output['api_base_path'] = $this->apiBasePath;
        }
        if (isset($this->_usedProperties['swaggerVersion'])) {
            $output['swagger_version'] = $this->swaggerVersion;
        }
        if (isset($this->_usedProperties['apiVersion'])) {
            $output['api_version'] = $this->apiVersion;
        }
        if (isset($this->_usedProperties['info'])) {
            $output['info'] = $this->info->toArray();
        }
    
        return $output;
    }

}
