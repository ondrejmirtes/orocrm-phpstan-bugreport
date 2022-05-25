<?php

namespace Symfony\Config\SncRedis;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'MetadataCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ResultCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'QueryCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'SecondLevelCacheConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class DoctrineConfig 
{
    private $metadataCache;
    private $resultCache;
    private $queryCache;
    private $secondLevelCache;
    private $_usedProperties = [];
    
    public function metadataCache(array $value = []): \Symfony\Config\SncRedis\Doctrine\MetadataCacheConfig
    {
        if (null === $this->metadataCache) {
            $this->_usedProperties['metadataCache'] = true;
            $this->metadataCache = new \Symfony\Config\SncRedis\Doctrine\MetadataCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "metadataCache()" has already been initialized. You cannot pass values the second time you call metadataCache().');
        }
    
        return $this->metadataCache;
    }
    
    public function resultCache(array $value = []): \Symfony\Config\SncRedis\Doctrine\ResultCacheConfig
    {
        if (null === $this->resultCache) {
            $this->_usedProperties['resultCache'] = true;
            $this->resultCache = new \Symfony\Config\SncRedis\Doctrine\ResultCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resultCache()" has already been initialized. You cannot pass values the second time you call resultCache().');
        }
    
        return $this->resultCache;
    }
    
    public function queryCache(array $value = []): \Symfony\Config\SncRedis\Doctrine\QueryCacheConfig
    {
        if (null === $this->queryCache) {
            $this->_usedProperties['queryCache'] = true;
            $this->queryCache = new \Symfony\Config\SncRedis\Doctrine\QueryCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "queryCache()" has already been initialized. You cannot pass values the second time you call queryCache().');
        }
    
        return $this->queryCache;
    }
    
    public function secondLevelCache(array $value = []): \Symfony\Config\SncRedis\Doctrine\SecondLevelCacheConfig
    {
        if (null === $this->secondLevelCache) {
            $this->_usedProperties['secondLevelCache'] = true;
            $this->secondLevelCache = new \Symfony\Config\SncRedis\Doctrine\SecondLevelCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "secondLevelCache()" has already been initialized. You cannot pass values the second time you call secondLevelCache().');
        }
    
        return $this->secondLevelCache;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('metadata_cache', $value)) {
            $this->_usedProperties['metadataCache'] = true;
            $this->metadataCache = new \Symfony\Config\SncRedis\Doctrine\MetadataCacheConfig($value['metadata_cache']);
            unset($value['metadata_cache']);
        }
    
        if (array_key_exists('result_cache', $value)) {
            $this->_usedProperties['resultCache'] = true;
            $this->resultCache = new \Symfony\Config\SncRedis\Doctrine\ResultCacheConfig($value['result_cache']);
            unset($value['result_cache']);
        }
    
        if (array_key_exists('query_cache', $value)) {
            $this->_usedProperties['queryCache'] = true;
            $this->queryCache = new \Symfony\Config\SncRedis\Doctrine\QueryCacheConfig($value['query_cache']);
            unset($value['query_cache']);
        }
    
        if (array_key_exists('second_level_cache', $value)) {
            $this->_usedProperties['secondLevelCache'] = true;
            $this->secondLevelCache = new \Symfony\Config\SncRedis\Doctrine\SecondLevelCacheConfig($value['second_level_cache']);
            unset($value['second_level_cache']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['metadataCache'])) {
            $output['metadata_cache'] = $this->metadataCache->toArray();
        }
        if (isset($this->_usedProperties['resultCache'])) {
            $output['result_cache'] = $this->resultCache->toArray();
        }
        if (isset($this->_usedProperties['queryCache'])) {
            $output['query_cache'] = $this->queryCache->toArray();
        }
        if (isset($this->_usedProperties['secondLevelCache'])) {
            $output['second_level_cache'] = $this->secondLevelCache->toArray();
        }
    
        return $output;
    }

}
