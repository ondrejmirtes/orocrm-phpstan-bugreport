<?php

namespace Symfony\Config\OroMessageQueue;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Transport'.\DIRECTORY_SEPARATOR.'DbalConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class TransportConfig 
{
    private $dbal;
    private $_usedProperties = [];
    
    public function dbal(array $value = []): \Symfony\Config\OroMessageQueue\Transport\DbalConfig
    {
        if (null === $this->dbal) {
            $this->_usedProperties['dbal'] = true;
            $this->dbal = new \Symfony\Config\OroMessageQueue\Transport\DbalConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "dbal()" has already been initialized. You cannot pass values the second time you call dbal().');
        }
    
        return $this->dbal;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('dbal', $value)) {
            $this->_usedProperties['dbal'] = true;
            $this->dbal = new \Symfony\Config\OroMessageQueue\Transport\DbalConfig($value['dbal']);
            unset($value['dbal']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['dbal'])) {
            $output['dbal'] = $this->dbal->toArray();
        }
    
        return $output;
    }

}
