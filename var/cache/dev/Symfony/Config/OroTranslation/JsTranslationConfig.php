<?php

namespace Symfony\Config\OroTranslation;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class JsTranslationConfig 
{
    private $domains;
    private $debug;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function domains($value): self
    {
        $this->_usedProperties['domains'] = true;
        $this->domains = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): self
    {
        $this->_usedProperties['debug'] = true;
        $this->debug = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('domains', $value)) {
            $this->_usedProperties['domains'] = true;
            $this->domains = $value['domains'];
            unset($value['domains']);
        }
    
        if (array_key_exists('debug', $value)) {
            $this->_usedProperties['debug'] = true;
            $this->debug = $value['debug'];
            unset($value['debug']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['domains'])) {
            $output['domains'] = $this->domains;
        }
        if (isset($this->_usedProperties['debug'])) {
            $output['debug'] = $this->debug;
        }
    
        return $output;
    }

}
