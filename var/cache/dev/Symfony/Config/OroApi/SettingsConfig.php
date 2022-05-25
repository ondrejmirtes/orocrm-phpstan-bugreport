<?php

namespace Symfony\Config\OroApi;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'WebApiConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $webApi;
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
    
    public function webApi(array $value = []): \Symfony\Config\OroApi\Settings\WebApiConfig
    {
        if (null === $this->webApi) {
            $this->_usedProperties['webApi'] = true;
            $this->webApi = new \Symfony\Config\OroApi\Settings\WebApiConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "webApi()" has already been initialized. You cannot pass values the second time you call webApi().');
        }
    
        return $this->webApi;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('web_api', $value)) {
            $this->_usedProperties['webApi'] = true;
            $this->webApi = new \Symfony\Config\OroApi\Settings\WebApiConfig($value['web_api']);
            unset($value['web_api']);
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
        if (isset($this->_usedProperties['webApi'])) {
            $output['web_api'] = $this->webApi->toArray();
        }
    
        return $output;
    }

}
