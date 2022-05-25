<?php

namespace Symfony\Config\OroApi;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ActionsConfig'.\DIRECTORY_SEPARATOR.'ProcessingGroupsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ActionsConfig 
{
    private $processorServiceId;
    private $processingGroups;
    private $_usedProperties = [];
    
    /**
     * The service id of the action processor. Set for public actions only.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function processorServiceId($value): self
    {
        $this->_usedProperties['processorServiceId'] = true;
        $this->processorServiceId = $value;
    
        return $this;
    }
    
    public function processingGroups(string $name, array $value = []): \Symfony\Config\OroApi\ActionsConfig\ProcessingGroupsConfig
    {
        if (!isset($this->processingGroups[$name])) {
            $this->_usedProperties['processingGroups'] = true;
    
            return $this->processingGroups[$name] = new \Symfony\Config\OroApi\ActionsConfig\ProcessingGroupsConfig($value);
        }
        if ([] === $value) {
            return $this->processingGroups[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "processingGroups()" has already been initialized. You cannot pass values the second time you call processingGroups().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('processor_service_id', $value)) {
            $this->_usedProperties['processorServiceId'] = true;
            $this->processorServiceId = $value['processor_service_id'];
            unset($value['processor_service_id']);
        }
    
        if (array_key_exists('processing_groups', $value)) {
            $this->_usedProperties['processingGroups'] = true;
            $this->processingGroups = array_map(function ($v) { return new \Symfony\Config\OroApi\ActionsConfig\ProcessingGroupsConfig($v); }, $value['processing_groups']);
            unset($value['processing_groups']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['processorServiceId'])) {
            $output['processor_service_id'] = $this->processorServiceId;
        }
        if (isset($this->_usedProperties['processingGroups'])) {
            $output['processing_groups'] = array_map(function ($v) { return $v->toArray(); }, $this->processingGroups);
        }
    
        return $output;
    }

}
