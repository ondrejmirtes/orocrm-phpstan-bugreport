<?php

namespace Symfony\Config\OroTranslation;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class TranslationServiceConfig 
{
    private $apikey;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apikey($value): self
    {
        $this->_usedProperties['apikey'] = true;
        $this->apikey = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('apikey', $value)) {
            $this->_usedProperties['apikey'] = true;
            $this->apikey = $value['apikey'];
            unset($value['apikey']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['apikey'])) {
            $output['apikey'] = $this->apikey;
        }
    
        return $output;
    }

}
