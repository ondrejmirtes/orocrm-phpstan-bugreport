<?php

namespace Symfony\Config\OroQueryDesigner;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ConditionsGroupMergeSameEntityConditionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $conditionsGroupMergeSameEntityConditions;
    private $_usedProperties = [];
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function resolved($value): self
    {
        $this->_usedProperties['resolved'] = true;
        $this->resolved = $value;
    
        return $this;
    }
    
    public function conditionsGroupMergeSameEntityConditions(array $value = []): \Symfony\Config\OroQueryDesigner\Settings\ConditionsGroupMergeSameEntityConditionsConfig
    {
        if (null === $this->conditionsGroupMergeSameEntityConditions) {
            $this->_usedProperties['conditionsGroupMergeSameEntityConditions'] = true;
            $this->conditionsGroupMergeSameEntityConditions = new \Symfony\Config\OroQueryDesigner\Settings\ConditionsGroupMergeSameEntityConditionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "conditionsGroupMergeSameEntityConditions()" has already been initialized. You cannot pass values the second time you call conditionsGroupMergeSameEntityConditions().');
        }
    
        return $this->conditionsGroupMergeSameEntityConditions;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('conditions_group_merge_same_entity_conditions', $value)) {
            $this->_usedProperties['conditionsGroupMergeSameEntityConditions'] = true;
            $this->conditionsGroupMergeSameEntityConditions = new \Symfony\Config\OroQueryDesigner\Settings\ConditionsGroupMergeSameEntityConditionsConfig($value['conditions_group_merge_same_entity_conditions']);
            unset($value['conditions_group_merge_same_entity_conditions']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['resolved'])) {
            $output['resolved'] = $this->resolved;
        }
        if (isset($this->_usedProperties['conditionsGroupMergeSameEntityConditions'])) {
            $output['conditions_group_merge_same_entity_conditions'] = $this->conditionsGroupMergeSameEntityConditions->toArray();
        }
    
        return $output;
    }

}
