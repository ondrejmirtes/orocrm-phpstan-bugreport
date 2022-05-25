<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroMaintenance'.\DIRECTORY_SEPARATOR.'AuthorizedConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroMaintenance'.\DIRECTORY_SEPARATOR.'DriverConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroMaintenance'.\DIRECTORY_SEPARATOR.'ResponseConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroMaintenanceConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $authorized;
    private $driver;
    private $response;
    private $_usedProperties = [];
    
    public function authorized(array $value = []): \Symfony\Config\OroMaintenance\AuthorizedConfig
    {
        if (null === $this->authorized) {
            $this->_usedProperties['authorized'] = true;
            $this->authorized = new \Symfony\Config\OroMaintenance\AuthorizedConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "authorized()" has already been initialized. You cannot pass values the second time you call authorized().');
        }
    
        return $this->authorized;
    }
    
    public function driver(array $value = []): \Symfony\Config\OroMaintenance\DriverConfig
    {
        if (null === $this->driver) {
            $this->_usedProperties['driver'] = true;
            $this->driver = new \Symfony\Config\OroMaintenance\DriverConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "driver()" has already been initialized. You cannot pass values the second time you call driver().');
        }
    
        return $this->driver;
    }
    
    public function response(array $value = []): \Symfony\Config\OroMaintenance\ResponseConfig
    {
        if (null === $this->response) {
            $this->_usedProperties['response'] = true;
            $this->response = new \Symfony\Config\OroMaintenance\ResponseConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "response()" has already been initialized. You cannot pass values the second time you call response().');
        }
    
        return $this->response;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_maintenance';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('authorized', $value)) {
            $this->_usedProperties['authorized'] = true;
            $this->authorized = new \Symfony\Config\OroMaintenance\AuthorizedConfig($value['authorized']);
            unset($value['authorized']);
        }
    
        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = new \Symfony\Config\OroMaintenance\DriverConfig($value['driver']);
            unset($value['driver']);
        }
    
        if (array_key_exists('response', $value)) {
            $this->_usedProperties['response'] = true;
            $this->response = new \Symfony\Config\OroMaintenance\ResponseConfig($value['response']);
            unset($value['response']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['authorized'])) {
            $output['authorized'] = $this->authorized->toArray();
        }
        if (isset($this->_usedProperties['driver'])) {
            $output['driver'] = $this->driver->toArray();
        }
        if (isset($this->_usedProperties['response'])) {
            $output['response'] = $this->response->toArray();
        }
    
        return $output;
    }

}
