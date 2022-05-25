<?php

namespace Symfony\Config\OroReport;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class DbalConfig 
{
    private $connection;
    private $datagridPrefixes;
    private $_usedProperties = [];
    
    /**
     * The name of DBAL connection that should be used to execute report queries.
     * @default null
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
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function datagridPrefixes($value): self
    {
        $this->_usedProperties['datagridPrefixes'] = true;
        $this->datagridPrefixes = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('connection', $value)) {
            $this->_usedProperties['connection'] = true;
            $this->connection = $value['connection'];
            unset($value['connection']);
        }
    
        if (array_key_exists('datagrid_prefixes', $value)) {
            $this->_usedProperties['datagridPrefixes'] = true;
            $this->datagridPrefixes = $value['datagrid_prefixes'];
            unset($value['datagrid_prefixes']);
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
        if (isset($this->_usedProperties['datagridPrefixes'])) {
            $output['datagrid_prefixes'] = $this->datagridPrefixes;
        }
    
        return $output;
    }

}
