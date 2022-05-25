<?php

namespace Symfony\Config\OroApi;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ConfigFilesConfig 
{
    private $fileName;
    private $requestType;
    private $_usedProperties = [];
    
    /**
     * The name of a file that contain API resources configuration. Can contain several files, in this case all of them are merged.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fileName($value): self
    {
        $this->_usedProperties['fileName'] = true;
        $this->fileName = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function requestType($value): self
    {
        $this->_usedProperties['requestType'] = true;
        $this->requestType = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('file_name', $value)) {
            $this->_usedProperties['fileName'] = true;
            $this->fileName = $value['file_name'];
            unset($value['file_name']);
        }
    
        if (array_key_exists('request_type', $value)) {
            $this->_usedProperties['requestType'] = true;
            $this->requestType = $value['request_type'];
            unset($value['request_type']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['fileName'])) {
            $output['file_name'] = $this->fileName;
        }
        if (isset($this->_usedProperties['requestType'])) {
            $output['request_type'] = $this->requestType;
        }
    
        return $output;
    }

}
