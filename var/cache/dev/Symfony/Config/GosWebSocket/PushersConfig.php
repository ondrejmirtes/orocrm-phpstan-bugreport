<?php

namespace Symfony\Config\GosWebSocket;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Pushers'.\DIRECTORY_SEPARATOR.'AmqpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pushers'.\DIRECTORY_SEPARATOR.'WampConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class PushersConfig 
{
    private $amqp;
    private $wamp;
    private $_usedProperties = [];
    
    public function amqp(array $value = []): \Symfony\Config\GosWebSocket\Pushers\AmqpConfig
    {
        if (null === $this->amqp) {
            $this->_usedProperties['amqp'] = true;
            $this->amqp = new \Symfony\Config\GosWebSocket\Pushers\AmqpConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "amqp()" has already been initialized. You cannot pass values the second time you call amqp().');
        }
    
        return $this->amqp;
    }
    
    public function wamp(array $value = []): \Symfony\Config\GosWebSocket\Pushers\WampConfig
    {
        if (null === $this->wamp) {
            $this->_usedProperties['wamp'] = true;
            $this->wamp = new \Symfony\Config\GosWebSocket\Pushers\WampConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "wamp()" has already been initialized. You cannot pass values the second time you call wamp().');
        }
    
        return $this->wamp;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('amqp', $value)) {
            $this->_usedProperties['amqp'] = true;
            $this->amqp = new \Symfony\Config\GosWebSocket\Pushers\AmqpConfig($value['amqp']);
            unset($value['amqp']);
        }
    
        if (array_key_exists('wamp', $value)) {
            $this->_usedProperties['wamp'] = true;
            $this->wamp = new \Symfony\Config\GosWebSocket\Pushers\WampConfig($value['wamp']);
            unset($value['wamp']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['amqp'])) {
            $output['amqp'] = $this->amqp->toArray();
        }
        if (isset($this->_usedProperties['wamp'])) {
            $output['wamp'] = $this->wamp->toArray();
        }
    
        return $output;
    }

}
