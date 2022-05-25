<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Acl'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Acl'.\DIRECTORY_SEPARATOR.'TablesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Acl'.\DIRECTORY_SEPARATOR.'VoterConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class AclConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $connection;
    private $cache;
    private $provider;
    private $tables;
    private $voter;
    private $_usedProperties = [];
    
    /**
     * any name configured in doctrine.dbal section
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connection($value): self
    {
        $this->_usedProperties['connection'] = true;
        $this->connection = $value;
    
        return $this;
    }
    
    public function cache(array $value = []): \Symfony\Config\Acl\CacheConfig
    {
        if (null === $this->cache) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Acl\CacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }
    
        return $this->cache;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): self
    {
        $this->_usedProperties['provider'] = true;
        $this->provider = $value;
    
        return $this;
    }
    
    public function tables(array $value = []): \Symfony\Config\Acl\TablesConfig
    {
        if (null === $this->tables) {
            $this->_usedProperties['tables'] = true;
            $this->tables = new \Symfony\Config\Acl\TablesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "tables()" has already been initialized. You cannot pass values the second time you call tables().');
        }
    
        return $this->tables;
    }
    
    public function voter(array $value = []): \Symfony\Config\Acl\VoterConfig
    {
        if (null === $this->voter) {
            $this->_usedProperties['voter'] = true;
            $this->voter = new \Symfony\Config\Acl\VoterConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "voter()" has already been initialized. You cannot pass values the second time you call voter().');
        }
    
        return $this->voter;
    }
    
    public function getExtensionAlias(): string
    {
        return 'acl';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Acl\CacheConfig($value['cache']);
            unset($value['cache']);
        }
    
        if (array_key_exists('provider', $value)) {
            $this->_usedProperties['provider'] = true;
            $this->provider = $value['provider'];
            unset($value['provider']);
        }
    
        if (array_key_exists('tables', $value)) {
            $this->_usedProperties['tables'] = true;
            $this->tables = new \Symfony\Config\Acl\TablesConfig($value['tables']);
            unset($value['tables']);
        }
    
        if (array_key_exists('voter', $value)) {
            $this->_usedProperties['voter'] = true;
            $this->voter = new \Symfony\Config\Acl\VoterConfig($value['voter']);
            unset($value['voter']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['connection'])) {
            $output['connection'] = $this->connection;
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache->toArray();
        }
        if (isset($this->_usedProperties['provider'])) {
            $output['provider'] = $this->provider;
        }
        if (isset($this->_usedProperties['tables'])) {
            $output['tables'] = $this->tables->toArray();
        }
        if (isset($this->_usedProperties['voter'])) {
            $output['voter'] = $this->voter->toArray();
        }
    
        return $output;
    }

}
