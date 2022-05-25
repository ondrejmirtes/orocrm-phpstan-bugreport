<?php

namespace Symfony\Config\OroSales;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ApiConfig 
{
    private $customerAssociationNames;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function customerAssociationNames(string $name, $value): self
    {
        $this->_usedProperties['customerAssociationNames'] = true;
        $this->customerAssociationNames[$name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('customer_association_names', $value)) {
            $this->_usedProperties['customerAssociationNames'] = true;
            $this->customerAssociationNames = $value['customer_association_names'];
            unset($value['customer_association_names']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['customerAssociationNames'])) {
            $output['customer_association_names'] = $this->customerAssociationNames;
        }
    
        return $output;
    }

}
