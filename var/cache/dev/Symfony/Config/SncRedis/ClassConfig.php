<?php

namespace Symfony\Config\SncRedis;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ClassConfig 
{
    private $client;
    private $clientOptions;
    private $connectionParameters;
    private $connectionFactory;
    private $connectionWrapper;
    private $phpredisClient;
    private $phpredisConnectionWrapper;
    private $phpredisClusterclient;
    private $phpredisClusterclientConnectionWrapper;
    private $logger;
    private $dataCollector;
    private $doctrineCachePhpredis;
    private $doctrineCachePredis;
    private $monologHandler;
    private $swiftmailerSpool;
    private $_usedProperties = [];
    
    /**
     * @default 'Predis\\Client'
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
     * @default 'Predis\\Configuration\\Options'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientOptions($value): self
    {
        $this->_usedProperties['clientOptions'] = true;
        $this->clientOptions = $value;
    
        return $this;
    }
    
    /**
     * @default 'Predis\\Connection\\Parameters'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionParameters($value): self
    {
        $this->_usedProperties['connectionParameters'] = true;
        $this->connectionParameters = $value;
    
        return $this;
    }
    
    /**
     * @default 'Snc\\RedisBundle\\Client\\Predis\\Connection\\ConnectionFactory'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionFactory($value): self
    {
        $this->_usedProperties['connectionFactory'] = true;
        $this->connectionFactory = $value;
    
        return $this;
    }
    
    /**
     * @default 'Snc\\RedisBundle\\Client\\Predis\\Connection\\ConnectionWrapper'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connectionWrapper($value): self
    {
        $this->_usedProperties['connectionWrapper'] = true;
        $this->connectionWrapper = $value;
    
        return $this;
    }
    
    /**
     * @default 'Redis'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function phpredisClient($value): self
    {
        $this->_usedProperties['phpredisClient'] = true;
        $this->phpredisClient = $value;
    
        return $this;
    }
    
    /**
     * @default 'Snc\\RedisBundle\\Client\\Phpredis\\Client'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function phpredisConnectionWrapper($value): self
    {
        $this->_usedProperties['phpredisConnectionWrapper'] = true;
        $this->phpredisConnectionWrapper = $value;
    
        return $this;
    }
    
    /**
     * @default 'RedisCluster'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function phpredisClusterclient($value): self
    {
        $this->_usedProperties['phpredisClusterclient'] = true;
        $this->phpredisClusterclient = $value;
    
        return $this;
    }
    
    /**
     * @default 'Snc\\RedisBundle\\Client\\Phpredis\\ClientCluster'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function phpredisClusterclientConnectionWrapper($value): self
    {
        $this->_usedProperties['phpredisClusterclientConnectionWrapper'] = true;
        $this->phpredisClusterclientConnectionWrapper = $value;
    
        return $this;
    }
    
    /**
     * @default 'Snc\\RedisBundle\\Logger\\RedisLogger'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logger($value): self
    {
        $this->_usedProperties['logger'] = true;
        $this->logger = $value;
    
        return $this;
    }
    
    /**
     * @default 'Snc\\RedisBundle\\DataCollector\\RedisDataCollector'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dataCollector($value): self
    {
        $this->_usedProperties['dataCollector'] = true;
        $this->dataCollector = $value;
    
        return $this;
    }
    
    /**
     * @default 'Symfony\\Component\\Cache\\Adapter\\RedisAdapter'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function doctrineCachePhpredis($value): self
    {
        $this->_usedProperties['doctrineCachePhpredis'] = true;
        $this->doctrineCachePhpredis = $value;
    
        return $this;
    }
    
    /**
     * @default 'Symfony\\Component\\Cache\\Adapter\\RedisAdapter'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function doctrineCachePredis($value): self
    {
        $this->_usedProperties['doctrineCachePredis'] = true;
        $this->doctrineCachePredis = $value;
    
        return $this;
    }
    
    /**
     * @default 'Monolog\\Handler\\RedisHandler'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function monologHandler($value): self
    {
        $this->_usedProperties['monologHandler'] = true;
        $this->monologHandler = $value;
    
        return $this;
    }
    
    /**
     * @default 'Snc\\RedisBundle\\SwiftMailer\\RedisSpool'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function swiftmailerSpool($value): self
    {
        $this->_usedProperties['swiftmailerSpool'] = true;
        $this->swiftmailerSpool = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = $value['client'];
            unset($value['client']);
        }
    
        if (array_key_exists('client_options', $value)) {
            $this->_usedProperties['clientOptions'] = true;
            $this->clientOptions = $value['client_options'];
            unset($value['client_options']);
        }
    
        if (array_key_exists('connection_parameters', $value)) {
            $this->_usedProperties['connectionParameters'] = true;
            $this->connectionParameters = $value['connection_parameters'];
            unset($value['connection_parameters']);
        }
    
        if (array_key_exists('connection_factory', $value)) {
            $this->_usedProperties['connectionFactory'] = true;
            $this->connectionFactory = $value['connection_factory'];
            unset($value['connection_factory']);
        }
    
        if (array_key_exists('connection_wrapper', $value)) {
            $this->_usedProperties['connectionWrapper'] = true;
            $this->connectionWrapper = $value['connection_wrapper'];
            unset($value['connection_wrapper']);
        }
    
        if (array_key_exists('phpredis_client', $value)) {
            $this->_usedProperties['phpredisClient'] = true;
            $this->phpredisClient = $value['phpredis_client'];
            unset($value['phpredis_client']);
        }
    
        if (array_key_exists('phpredis_connection_wrapper', $value)) {
            $this->_usedProperties['phpredisConnectionWrapper'] = true;
            $this->phpredisConnectionWrapper = $value['phpredis_connection_wrapper'];
            unset($value['phpredis_connection_wrapper']);
        }
    
        if (array_key_exists('phpredis_clusterclient', $value)) {
            $this->_usedProperties['phpredisClusterclient'] = true;
            $this->phpredisClusterclient = $value['phpredis_clusterclient'];
            unset($value['phpredis_clusterclient']);
        }
    
        if (array_key_exists('phpredis_clusterclient_connection_wrapper', $value)) {
            $this->_usedProperties['phpredisClusterclientConnectionWrapper'] = true;
            $this->phpredisClusterclientConnectionWrapper = $value['phpredis_clusterclient_connection_wrapper'];
            unset($value['phpredis_clusterclient_connection_wrapper']);
        }
    
        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = $value['logger'];
            unset($value['logger']);
        }
    
        if (array_key_exists('data_collector', $value)) {
            $this->_usedProperties['dataCollector'] = true;
            $this->dataCollector = $value['data_collector'];
            unset($value['data_collector']);
        }
    
        if (array_key_exists('doctrine_cache_phpredis', $value)) {
            $this->_usedProperties['doctrineCachePhpredis'] = true;
            $this->doctrineCachePhpredis = $value['doctrine_cache_phpredis'];
            unset($value['doctrine_cache_phpredis']);
        }
    
        if (array_key_exists('doctrine_cache_predis', $value)) {
            $this->_usedProperties['doctrineCachePredis'] = true;
            $this->doctrineCachePredis = $value['doctrine_cache_predis'];
            unset($value['doctrine_cache_predis']);
        }
    
        if (array_key_exists('monolog_handler', $value)) {
            $this->_usedProperties['monologHandler'] = true;
            $this->monologHandler = $value['monolog_handler'];
            unset($value['monolog_handler']);
        }
    
        if (array_key_exists('swiftmailer_spool', $value)) {
            $this->_usedProperties['swiftmailerSpool'] = true;
            $this->swiftmailerSpool = $value['swiftmailer_spool'];
            unset($value['swiftmailer_spool']);
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
        if (isset($this->_usedProperties['clientOptions'])) {
            $output['client_options'] = $this->clientOptions;
        }
        if (isset($this->_usedProperties['connectionParameters'])) {
            $output['connection_parameters'] = $this->connectionParameters;
        }
        if (isset($this->_usedProperties['connectionFactory'])) {
            $output['connection_factory'] = $this->connectionFactory;
        }
        if (isset($this->_usedProperties['connectionWrapper'])) {
            $output['connection_wrapper'] = $this->connectionWrapper;
        }
        if (isset($this->_usedProperties['phpredisClient'])) {
            $output['phpredis_client'] = $this->phpredisClient;
        }
        if (isset($this->_usedProperties['phpredisConnectionWrapper'])) {
            $output['phpredis_connection_wrapper'] = $this->phpredisConnectionWrapper;
        }
        if (isset($this->_usedProperties['phpredisClusterclient'])) {
            $output['phpredis_clusterclient'] = $this->phpredisClusterclient;
        }
        if (isset($this->_usedProperties['phpredisClusterclientConnectionWrapper'])) {
            $output['phpredis_clusterclient_connection_wrapper'] = $this->phpredisClusterclientConnectionWrapper;
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger;
        }
        if (isset($this->_usedProperties['dataCollector'])) {
            $output['data_collector'] = $this->dataCollector;
        }
        if (isset($this->_usedProperties['doctrineCachePhpredis'])) {
            $output['doctrine_cache_phpredis'] = $this->doctrineCachePhpredis;
        }
        if (isset($this->_usedProperties['doctrineCachePredis'])) {
            $output['doctrine_cache_predis'] = $this->doctrineCachePredis;
        }
        if (isset($this->_usedProperties['monologHandler'])) {
            $output['monolog_handler'] = $this->monologHandler;
        }
        if (isset($this->_usedProperties['swiftmailerSpool'])) {
            $output['swiftmailer_spool'] = $this->swiftmailerSpool;
        }
    
        return $output;
    }

}
