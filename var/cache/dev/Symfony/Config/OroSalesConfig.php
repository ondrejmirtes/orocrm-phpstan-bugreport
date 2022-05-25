<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroSales'.\DIRECTORY_SEPARATOR.'ApiConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroSales'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroSalesConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $api;
    private $settings;
    private $_usedProperties = [];
    
    public function api(array $value = []): \Symfony\Config\OroSales\ApiConfig
    {
        if (null === $this->api) {
            $this->_usedProperties['api'] = true;
            $this->api = new \Symfony\Config\OroSales\ApiConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "api()" has already been initialized. You cannot pass values the second time you call api().');
        }
    
        return $this->api;
    }
    
    public function settings(array $value = []): \Symfony\Config\OroSales\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroSales\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_sales';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('api', $value)) {
            $this->_usedProperties['api'] = true;
            $this->api = new \Symfony\Config\OroSales\ApiConfig($value['api']);
            unset($value['api']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroSales\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['api'])) {
            $output['api'] = $this->api->toArray();
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
