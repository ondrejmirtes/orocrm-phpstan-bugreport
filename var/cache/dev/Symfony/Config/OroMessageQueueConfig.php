<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroMessageQueue'.\DIRECTORY_SEPARATOR.'TransportConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroMessageQueue'.\DIRECTORY_SEPARATOR.'ClientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroMessageQueue'.\DIRECTORY_SEPARATOR.'ConsumerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroMessageQueue'.\DIRECTORY_SEPARATOR.'TimeBeforeStaleConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroMessageQueueConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $transport;
    private $client;
    private $persistentServices;
    private $persistentProcessors;
    private $securityAgnosticTopics;
    private $securityAgnosticProcessors;
    private $consumer;
    private $timeBeforeStale;
    private $_usedProperties = [];
    
    public function transport(array $value = []): \Symfony\Config\OroMessageQueue\TransportConfig
    {
        if (null === $this->transport) {
            $this->_usedProperties['transport'] = true;
            $this->transport = new \Symfony\Config\OroMessageQueue\TransportConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "transport()" has already been initialized. You cannot pass values the second time you call transport().');
        }
    
        return $this->transport;
    }
    
    public function client(array $value = []): \Symfony\Config\OroMessageQueue\ClientConfig
    {
        if (null === $this->client) {
            $this->_usedProperties['client'] = true;
            $this->client = new \Symfony\Config\OroMessageQueue\ClientConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "client()" has already been initialized. You cannot pass values the second time you call client().');
        }
    
        return $this->client;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function persistentServices($value): self
    {
        $this->_usedProperties['persistentServices'] = true;
        $this->persistentServices = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function persistentProcessors($value): self
    {
        $this->_usedProperties['persistentProcessors'] = true;
        $this->persistentProcessors = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function securityAgnosticTopics($value): self
    {
        $this->_usedProperties['securityAgnosticTopics'] = true;
        $this->securityAgnosticTopics = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function securityAgnosticProcessors($value): self
    {
        $this->_usedProperties['securityAgnosticProcessors'] = true;
        $this->securityAgnosticProcessors = $value;
    
        return $this;
    }
    
    public function consumer(array $value = []): \Symfony\Config\OroMessageQueue\ConsumerConfig
    {
        if (null === $this->consumer) {
            $this->_usedProperties['consumer'] = true;
            $this->consumer = new \Symfony\Config\OroMessageQueue\ConsumerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "consumer()" has already been initialized. You cannot pass values the second time you call consumer().');
        }
    
        return $this->consumer;
    }
    
    public function timeBeforeStale(array $value = []): \Symfony\Config\OroMessageQueue\TimeBeforeStaleConfig
    {
        if (null === $this->timeBeforeStale) {
            $this->_usedProperties['timeBeforeStale'] = true;
            $this->timeBeforeStale = new \Symfony\Config\OroMessageQueue\TimeBeforeStaleConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "timeBeforeStale()" has already been initialized. You cannot pass values the second time you call timeBeforeStale().');
        }
    
        return $this->timeBeforeStale;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_message_queue';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('transport', $value)) {
            $this->_usedProperties['transport'] = true;
            $this->transport = new \Symfony\Config\OroMessageQueue\TransportConfig($value['transport']);
            unset($value['transport']);
        }
    
        if (array_key_exists('client', $value)) {
            $this->_usedProperties['client'] = true;
            $this->client = new \Symfony\Config\OroMessageQueue\ClientConfig($value['client']);
            unset($value['client']);
        }
    
        if (array_key_exists('persistent_services', $value)) {
            $this->_usedProperties['persistentServices'] = true;
            $this->persistentServices = $value['persistent_services'];
            unset($value['persistent_services']);
        }
    
        if (array_key_exists('persistent_processors', $value)) {
            $this->_usedProperties['persistentProcessors'] = true;
            $this->persistentProcessors = $value['persistent_processors'];
            unset($value['persistent_processors']);
        }
    
        if (array_key_exists('security_agnostic_topics', $value)) {
            $this->_usedProperties['securityAgnosticTopics'] = true;
            $this->securityAgnosticTopics = $value['security_agnostic_topics'];
            unset($value['security_agnostic_topics']);
        }
    
        if (array_key_exists('security_agnostic_processors', $value)) {
            $this->_usedProperties['securityAgnosticProcessors'] = true;
            $this->securityAgnosticProcessors = $value['security_agnostic_processors'];
            unset($value['security_agnostic_processors']);
        }
    
        if (array_key_exists('consumer', $value)) {
            $this->_usedProperties['consumer'] = true;
            $this->consumer = new \Symfony\Config\OroMessageQueue\ConsumerConfig($value['consumer']);
            unset($value['consumer']);
        }
    
        if (array_key_exists('time_before_stale', $value)) {
            $this->_usedProperties['timeBeforeStale'] = true;
            $this->timeBeforeStale = new \Symfony\Config\OroMessageQueue\TimeBeforeStaleConfig($value['time_before_stale']);
            unset($value['time_before_stale']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['transport'])) {
            $output['transport'] = $this->transport->toArray();
        }
        if (isset($this->_usedProperties['client'])) {
            $output['client'] = $this->client->toArray();
        }
        if (isset($this->_usedProperties['persistentServices'])) {
            $output['persistent_services'] = $this->persistentServices;
        }
        if (isset($this->_usedProperties['persistentProcessors'])) {
            $output['persistent_processors'] = $this->persistentProcessors;
        }
        if (isset($this->_usedProperties['securityAgnosticTopics'])) {
            $output['security_agnostic_topics'] = $this->securityAgnosticTopics;
        }
        if (isset($this->_usedProperties['securityAgnosticProcessors'])) {
            $output['security_agnostic_processors'] = $this->securityAgnosticProcessors;
        }
        if (isset($this->_usedProperties['consumer'])) {
            $output['consumer'] = $this->consumer->toArray();
        }
        if (isset($this->_usedProperties['timeBeforeStale'])) {
            $output['time_before_stale'] = $this->timeBeforeStale->toArray();
        }
    
        return $output;
    }

}
