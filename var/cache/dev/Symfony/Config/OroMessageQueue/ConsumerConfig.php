<?php

namespace Symfony\Config\OroMessageQueue;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ConsumerConfig 
{
    private $heartbeatUpdatePeriod;
    private $_usedProperties = [];
    
    /**
     * Consumer heartbeat update period in minutes. To disable the checks, set this option to 0
     * @default 15
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function heartbeatUpdatePeriod($value): self
    {
        $this->_usedProperties['heartbeatUpdatePeriod'] = true;
        $this->heartbeatUpdatePeriod = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('heartbeat_update_period', $value)) {
            $this->_usedProperties['heartbeatUpdatePeriod'] = true;
            $this->heartbeatUpdatePeriod = $value['heartbeat_update_period'];
            unset($value['heartbeat_update_period']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['heartbeatUpdatePeriod'])) {
            $output['heartbeat_update_period'] = $this->heartbeatUpdatePeriod;
        }
    
        return $output;
    }

}
