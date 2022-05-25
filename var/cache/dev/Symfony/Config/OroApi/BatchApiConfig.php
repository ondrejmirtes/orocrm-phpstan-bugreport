<?php

namespace Symfony\Config\OroApi;

require_once __DIR__.\DIRECTORY_SEPARATOR.'BatchApi'.\DIRECTORY_SEPARATOR.'AsyncOperationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class BatchApiConfig 
{
    private $asyncOperation;
    private $chunkSize;
    private $includedDataChunkSize;
    private $chunkSizePerEntity;
    private $includedDataChunkSizePerEntity;
    private $_usedProperties = [];
    
    public function asyncOperation(array $value = []): \Symfony\Config\OroApi\BatchApi\AsyncOperationConfig
    {
        if (null === $this->asyncOperation) {
            $this->_usedProperties['asyncOperation'] = true;
            $this->asyncOperation = new \Symfony\Config\OroApi\BatchApi\AsyncOperationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "asyncOperation()" has already been initialized. You cannot pass values the second time you call asyncOperation().');
        }
    
        return $this->asyncOperation;
    }
    
    /**
     * The default maximum number of entities that can be saved in a chunk.
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function chunkSize($value): self
    {
        $this->_usedProperties['chunkSize'] = true;
        $this->chunkSize = $value;
    
        return $this;
    }
    
    /**
     * The default maximum number of included entities that can be saved in a chunk.
     * @default 50
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function includedDataChunkSize($value): self
    {
        $this->_usedProperties['includedDataChunkSize'] = true;
        $this->includedDataChunkSize = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function chunkSizePerEntity(string $name, $value): self
    {
        $this->_usedProperties['chunkSizePerEntity'] = true;
        $this->chunkSizePerEntity[$name] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function includedDataChunkSizePerEntity(string $name, $value): self
    {
        $this->_usedProperties['includedDataChunkSizePerEntity'] = true;
        $this->includedDataChunkSizePerEntity[$name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('async_operation', $value)) {
            $this->_usedProperties['asyncOperation'] = true;
            $this->asyncOperation = new \Symfony\Config\OroApi\BatchApi\AsyncOperationConfig($value['async_operation']);
            unset($value['async_operation']);
        }
    
        if (array_key_exists('chunk_size', $value)) {
            $this->_usedProperties['chunkSize'] = true;
            $this->chunkSize = $value['chunk_size'];
            unset($value['chunk_size']);
        }
    
        if (array_key_exists('included_data_chunk_size', $value)) {
            $this->_usedProperties['includedDataChunkSize'] = true;
            $this->includedDataChunkSize = $value['included_data_chunk_size'];
            unset($value['included_data_chunk_size']);
        }
    
        if (array_key_exists('chunk_size_per_entity', $value)) {
            $this->_usedProperties['chunkSizePerEntity'] = true;
            $this->chunkSizePerEntity = $value['chunk_size_per_entity'];
            unset($value['chunk_size_per_entity']);
        }
    
        if (array_key_exists('included_data_chunk_size_per_entity', $value)) {
            $this->_usedProperties['includedDataChunkSizePerEntity'] = true;
            $this->includedDataChunkSizePerEntity = $value['included_data_chunk_size_per_entity'];
            unset($value['included_data_chunk_size_per_entity']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['asyncOperation'])) {
            $output['async_operation'] = $this->asyncOperation->toArray();
        }
        if (isset($this->_usedProperties['chunkSize'])) {
            $output['chunk_size'] = $this->chunkSize;
        }
        if (isset($this->_usedProperties['includedDataChunkSize'])) {
            $output['included_data_chunk_size'] = $this->includedDataChunkSize;
        }
        if (isset($this->_usedProperties['chunkSizePerEntity'])) {
            $output['chunk_size_per_entity'] = $this->chunkSizePerEntity;
        }
        if (isset($this->_usedProperties['includedDataChunkSizePerEntity'])) {
            $output['included_data_chunk_size_per_entity'] = $this->includedDataChunkSizePerEntity;
        }
    
        return $output;
    }

}
