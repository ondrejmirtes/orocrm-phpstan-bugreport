<?php

namespace Symfony\Config\OroMessageQueue\Client;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class RedeliveryConfig 
{
    private $enabled;
    private $delayTime;
    private $_usedProperties = [];
    
    /**
     * If redelivery enabled than new copied message will be published
    to message broker and old one will be REJECTED when error
    was occurred during message processing.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * Time through which message will be re-published to the broker,
    old one will be REJECTED immediately.
     * @default 10
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function delayTime($value): self
    {
        $this->_usedProperties['delayTime'] = true;
        $this->delayTime = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (array_key_exists('delay_time', $value)) {
            $this->_usedProperties['delayTime'] = true;
            $this->delayTime = $value['delay_time'];
            unset($value['delay_time']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['delayTime'])) {
            $output['delay_time'] = $this->delayTime;
        }
    
        return $output;
    }

}
