<?php

namespace Symfony\Config\SncRedis\Doctrine;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ResultCacheConfig 
{
    private $client;
    private $namespace;
    private $entityManagers;
    private $documentManagers;
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namespace($value): self
    {
        $this->_usedProperties['namespace'] = true;
        $this->namespace = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function entityManagers($value): self
    {
        $this->_usedProperties['entityManagers'] = true;
        $this->entityManagers = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function documentManagers($value): self
    {
        $this->_usedProperties['documentManagers'] = true;
        $this->documentManagers = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
        }
    
        if (array_key_exists('namespace', $value)) {
            $this->_usedProperties['namespace'] = true;
            $this->namespace = $value['namespace'];
            unset($value['namespace']);
        }
    
        if (array_key_exists('entity_managers', $value)) {
            $this->_usedProperties['entityManagers'] = true;
            $this->entityManagers = $value['entity_managers'];
            unset($value['entity_managers']);
        }
    
        if (array_key_exists('document_managers', $value)) {
            $this->_usedProperties['documentManagers'] = true;
            $this->documentManagers = $value['document_managers'];
            unset($value['document_managers']);
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
        if (isset($this->_usedProperties['namespace'])) {
            $output['namespace'] = $this->namespace;
        }
        if (isset($this->_usedProperties['entityManagers'])) {
            $output['entity_managers'] = $this->entityManagers;
        }
        if (isset($this->_usedProperties['documentManagers'])) {
            $output['document_managers'] = $this->documentManagers;
        }
    
        return $output;
    }

}
