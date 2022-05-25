<?php

namespace Symfony\Config\OroMessageQueue;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class TimeBeforeStaleConfig 
{
    private $default;
    private $jobs;
    private $_usedProperties = [];
    
    /**
     * The number of seconds of inactivity to qualify a job as stale.
    If this attribute is not set or set to -1, jobs will never be qualified as stale.
    It means that if a unique job is not properly removed after it is finished,
    it will be blocking other jobs of that type until it is manually interrupted.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function default($value): self
    {
        $this->_usedProperties['default'] = true;
        $this->default = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function jobs(string $job_name, $value): self
    {
        $this->_usedProperties['jobs'] = true;
        $this->jobs[$job_name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('default', $value)) {
            $this->_usedProperties['default'] = true;
            $this->default = $value['default'];
            unset($value['default']);
        }
    
        if (array_key_exists('jobs', $value)) {
            $this->_usedProperties['jobs'] = true;
            $this->jobs = $value['jobs'];
            unset($value['jobs']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['default'])) {
            $output['default'] = $this->default;
        }
        if (isset($this->_usedProperties['jobs'])) {
            $output['jobs'] = $this->jobs;
        }
    
        return $output;
    }

}
