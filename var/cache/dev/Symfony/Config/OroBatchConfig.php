<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroBatchConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $logBatch;
    private $cleanupInterval;
    private $_usedProperties = [];
    
    /**
     * Enables/Disables writing of batch log files for each batch job in var/logs/batch directory
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logBatch($value): self
    {
        $this->_usedProperties['logBatch'] = true;
        $this->logBatch = $value;
    
        return $this;
    }
    
    /**
     * Sets the time interval to keep the batch job records in the database
     * @example 1 month
     * @default '1 week'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cleanupInterval($value): self
    {
        $this->_usedProperties['cleanupInterval'] = true;
        $this->cleanupInterval = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_batch';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('log_batch', $value)) {
            $this->_usedProperties['logBatch'] = true;
            $this->logBatch = $value['log_batch'];
            unset($value['log_batch']);
        }
    
        if (array_key_exists('cleanup_interval', $value)) {
            $this->_usedProperties['cleanupInterval'] = true;
            $this->cleanupInterval = $value['cleanup_interval'];
            unset($value['cleanup_interval']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['logBatch'])) {
            $output['log_batch'] = $this->logBatch;
        }
        if (isset($this->_usedProperties['cleanupInterval'])) {
            $output['cleanup_interval'] = $this->cleanupInterval;
        }
    
        return $output;
    }

}
