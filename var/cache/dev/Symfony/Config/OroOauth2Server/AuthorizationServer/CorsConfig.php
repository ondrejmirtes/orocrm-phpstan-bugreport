<?php

namespace Symfony\Config\OroOauth2Server\AuthorizationServer;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class CorsConfig 
{
    private $preflightMaxAge;
    private $allowOrigins;
    private $_usedProperties = [];
    
    /**
     * The amount of seconds the user agent is allowed to cache CORS preflight requests.
     * @default 600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function preflightMaxAge($value): self
    {
        $this->_usedProperties['preflightMaxAge'] = true;
        $this->preflightMaxAge = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowOrigins($value): self
    {
        $this->_usedProperties['allowOrigins'] = true;
        $this->allowOrigins = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('preflight_max_age', $value)) {
            $this->_usedProperties['preflightMaxAge'] = true;
            $this->preflightMaxAge = $value['preflight_max_age'];
            unset($value['preflight_max_age']);
        }
    
        if (array_key_exists('allow_origins', $value)) {
            $this->_usedProperties['allowOrigins'] = true;
            $this->allowOrigins = $value['allow_origins'];
            unset($value['allow_origins']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['preflightMaxAge'])) {
            $output['preflight_max_age'] = $this->preflightMaxAge;
        }
        if (isset($this->_usedProperties['allowOrigins'])) {
            $output['allow_origins'] = $this->allowOrigins;
        }
    
        return $output;
    }

}
