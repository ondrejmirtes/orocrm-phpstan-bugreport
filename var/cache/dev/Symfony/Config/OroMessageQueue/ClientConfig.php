<?php

namespace Symfony\Config\OroMessageQueue;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Client'.\DIRECTORY_SEPARATOR.'RedeliveryConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ClientConfig 
{
    private $traceableProducer;
    private $prefix;
    private $defaultDestination;
    private $defaultTopic;
    private $redelivery;
    private $noopStatus;
    private $_usedProperties = [];
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function traceableProducer($value): self
    {
        $this->_usedProperties['traceableProducer'] = true;
        $this->traceableProducer = $value;
    
        return $this;
    }
    
    /**
     * @default 'oro'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefix($value): self
    {
        $this->_usedProperties['prefix'] = true;
        $this->prefix = $value;
    
        return $this;
    }
    
    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultDestination($value): self
    {
        $this->_usedProperties['defaultDestination'] = true;
        $this->defaultDestination = $value;
    
        return $this;
    }
    
    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultTopic($value): self
    {
        $this->_usedProperties['defaultTopic'] = true;
        $this->defaultTopic = $value;
    
        return $this;
    }
    
    public function redelivery(array $value = []): \Symfony\Config\OroMessageQueue\Client\RedeliveryConfig
    {
        if (null === $this->redelivery) {
            $this->_usedProperties['redelivery'] = true;
            $this->redelivery = new \Symfony\Config\OroMessageQueue\Client\RedeliveryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "redelivery()" has already been initialized. You cannot pass values the second time you call redelivery().');
        }
    
        return $this->redelivery;
    }
    
    /**
     * Status that must be set for messages not claimed by any message processor.
     * @default 'throw_exception'
     * @param ParamConfigurator|'oro.message_queue.consumption.ack'|'oro.message_queue.consumption.reject'|'oro.message_queue.consumption.requeue'|'throw_exception' $value
     * @return $this
     */
    public function noopStatus($value): self
    {
        $this->_usedProperties['noopStatus'] = true;
        $this->noopStatus = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('traceable_producer', $value)) {
            $this->_usedProperties['traceableProducer'] = true;
            $this->traceableProducer = $value['traceable_producer'];
            unset($value['traceable_producer']);
        }
    
        if (array_key_exists('prefix', $value)) {
            $this->_usedProperties['prefix'] = true;
            $this->prefix = $value['prefix'];
            unset($value['prefix']);
        }
    
        if (array_key_exists('default_destination', $value)) {
            $this->_usedProperties['defaultDestination'] = true;
            $this->defaultDestination = $value['default_destination'];
            unset($value['default_destination']);
        }
    
        if (array_key_exists('default_topic', $value)) {
            $this->_usedProperties['defaultTopic'] = true;
            $this->defaultTopic = $value['default_topic'];
            unset($value['default_topic']);
        }
    
        if (array_key_exists('redelivery', $value)) {
            $this->_usedProperties['redelivery'] = true;
            $this->redelivery = new \Symfony\Config\OroMessageQueue\Client\RedeliveryConfig($value['redelivery']);
            unset($value['redelivery']);
        }
    
        if (array_key_exists('noop_status', $value)) {
            $this->_usedProperties['noopStatus'] = true;
            $this->noopStatus = $value['noop_status'];
            unset($value['noop_status']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['traceableProducer'])) {
            $output['traceable_producer'] = $this->traceableProducer;
        }
        if (isset($this->_usedProperties['prefix'])) {
            $output['prefix'] = $this->prefix;
        }
        if (isset($this->_usedProperties['defaultDestination'])) {
            $output['default_destination'] = $this->defaultDestination;
        }
        if (isset($this->_usedProperties['defaultTopic'])) {
            $output['default_topic'] = $this->defaultTopic;
        }
        if (isset($this->_usedProperties['redelivery'])) {
            $output['redelivery'] = $this->redelivery->toArray();
        }
        if (isset($this->_usedProperties['noopStatus'])) {
            $output['noop_status'] = $this->noopStatus;
        }
    
        return $output;
    }

}
