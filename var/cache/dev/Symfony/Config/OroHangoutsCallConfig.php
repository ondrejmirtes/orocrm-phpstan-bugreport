<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroHangoutsCall'.\DIRECTORY_SEPARATOR.'InitialAppsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroHangoutsCall'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroHangoutsCallConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $initialApps;
    private $settings;
    private $_usedProperties = [];
    
    public function initialApps(array $value = []): \Symfony\Config\OroHangoutsCall\InitialAppsConfig
    {
        $this->_usedProperties['initialApps'] = true;
    
        return $this->initialApps[] = new \Symfony\Config\OroHangoutsCall\InitialAppsConfig($value);
    }
    
    public function settings(array $value = []): \Symfony\Config\OroHangoutsCall\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroHangoutsCall\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_hangouts_call';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('initial_apps', $value)) {
            $this->_usedProperties['initialApps'] = true;
            $this->initialApps = array_map(function ($v) { return new \Symfony\Config\OroHangoutsCall\InitialAppsConfig($v); }, $value['initial_apps']);
            unset($value['initial_apps']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroHangoutsCall\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['initialApps'])) {
            $output['initial_apps'] = array_map(function ($v) { return $v->toArray(); }, $this->initialApps);
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
