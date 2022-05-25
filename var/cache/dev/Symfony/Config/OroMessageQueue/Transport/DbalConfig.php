<?php

namespace Symfony\Config\OroMessageQueue\Transport;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class DbalConfig 
{
    private $connection;
    private $table;
    private $pidFileDir;
    private $consumerProcessPattern;
    private $pollingInterval;
    private $_usedProperties = [];
    
    /**
     * @default 'message_queue'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function connection($value): self
    {
        $this->_usedProperties['connection'] = true;
        $this->connection = $value;
    
        return $this;
    }
    
    /**
     * @default 'oro_message_queue'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function table($value): self
    {
        $this->_usedProperties['table'] = true;
        $this->table = $value;
    
        return $this;
    }
    
    /**
     * @default '/tmp/oro-message-queue'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pidFileDir($value): self
    {
        $this->_usedProperties['pidFileDir'] = true;
        $this->pidFileDir = $value;
    
        return $this;
    }
    
    /**
     * @default ':consume'
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function consumerProcessPattern($value): self
    {
        $this->_usedProperties['consumerProcessPattern'] = true;
        $this->consumerProcessPattern = $value;
    
        return $this;
    }
    
    /**
     * @default 1000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pollingInterval($value): self
    {
        $this->_usedProperties['pollingInterval'] = true;
        $this->pollingInterval = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (array_key_exists('table', $value)) {
            $this->_usedProperties['table'] = true;
            $this->table = $value['table'];
            unset($value['table']);
        }
    
        if (array_key_exists('pid_file_dir', $value)) {
            $this->_usedProperties['pidFileDir'] = true;
            $this->pidFileDir = $value['pid_file_dir'];
            unset($value['pid_file_dir']);
        }
    
        if (array_key_exists('consumer_process_pattern', $value)) {
            $this->_usedProperties['consumerProcessPattern'] = true;
            $this->consumerProcessPattern = $value['consumer_process_pattern'];
            unset($value['consumer_process_pattern']);
        }
    
        if (array_key_exists('polling_interval', $value)) {
            $this->_usedProperties['pollingInterval'] = true;
            $this->pollingInterval = $value['polling_interval'];
            unset($value['polling_interval']);
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
        if (isset($this->_usedProperties['table'])) {
            $output['table'] = $this->table;
        }
        if (isset($this->_usedProperties['pidFileDir'])) {
            $output['pid_file_dir'] = $this->pidFileDir;
        }
        if (isset($this->_usedProperties['consumerProcessPattern'])) {
            $output['consumer_process_pattern'] = $this->consumerProcessPattern;
        }
        if (isset($this->_usedProperties['pollingInterval'])) {
            $output['polling_interval'] = $this->pollingInterval;
        }
    
        return $output;
    }

}
