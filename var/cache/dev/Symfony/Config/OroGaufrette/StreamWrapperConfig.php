<?php

namespace Symfony\Config\OroGaufrette;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class StreamWrapperConfig 
{
    private $readonlyProtocol;
    private $_usedProperties = [];
    
    /**
     * The name of read-only Gaufrette protocol. By default it is "{gaufrette protocol name}-readonly".
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function readonlyProtocol($value): self
    {
        $this->_usedProperties['readonlyProtocol'] = true;
        $this->readonlyProtocol = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('readonly_protocol', $value)) {
            $this->_usedProperties['readonlyProtocol'] = true;
            $this->readonlyProtocol = $value['readonly_protocol'];
            unset($value['readonly_protocol']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['readonlyProtocol'])) {
            $output['readonly_protocol'] = $this->readonlyProtocol;
        }
    
        return $output;
    }

}
