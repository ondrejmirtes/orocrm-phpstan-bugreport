<?php

namespace Symfony\Config\OroActivity;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ApiConfig 
{
    private $activityAssociationNames;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function activityAssociationNames(string $name, $value): self
    {
        $this->_usedProperties['activityAssociationNames'] = true;
        $this->activityAssociationNames[$name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('activity_association_names', $value)) {
            $this->_usedProperties['activityAssociationNames'] = true;
            $this->activityAssociationNames = $value['activity_association_names'];
            unset($value['activity_association_names']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['activityAssociationNames'])) {
            $output['activity_association_names'] = $this->activityAssociationNames;
        }
    
        return $output;
    }

}
