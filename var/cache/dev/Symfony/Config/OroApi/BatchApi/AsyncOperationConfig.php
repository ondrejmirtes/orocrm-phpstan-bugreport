<?php

namespace Symfony\Config\OroApi\BatchApi;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class AsyncOperationConfig 
{
    private $lifetime;
    private $cleanupProcessTimeout;
    private $_usedProperties = [];
    
    /**
     * The number of days asynchronous operations are stored in the system.
     * @default 30
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function lifetime($value): self
    {
        $this->_usedProperties['lifetime'] = true;
        $this->lifetime = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of seconds that the asynchronous operations cleanup process can spend in one run.
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function cleanupProcessTimeout($value): self
    {
        $this->_usedProperties['cleanupProcessTimeout'] = true;
        $this->cleanupProcessTimeout = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('lifetime', $value)) {
            $this->_usedProperties['lifetime'] = true;
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }
    
        if (array_key_exists('cleanup_process_timeout', $value)) {
            $this->_usedProperties['cleanupProcessTimeout'] = true;
            $this->cleanupProcessTimeout = $value['cleanup_process_timeout'];
            unset($value['cleanup_process_timeout']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['lifetime'])) {
            $output['lifetime'] = $this->lifetime;
        }
        if (isset($this->_usedProperties['cleanupProcessTimeout'])) {
            $output['cleanup_process_timeout'] = $this->cleanupProcessTimeout;
        }
    
        return $output;
    }

}
