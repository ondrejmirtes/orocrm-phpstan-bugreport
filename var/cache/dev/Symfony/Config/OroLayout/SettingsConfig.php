<?php

namespace Symfony\Config\OroLayout;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DevelopmentSettingsFeatureEnabledConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DebugBlockInfoConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DebugDeveloperToolbarConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $developmentSettingsFeatureEnabled;
    private $debugBlockInfo;
    private $debugDeveloperToolbar;
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
    
    public function developmentSettingsFeatureEnabled(array $value = []): \Symfony\Config\OroLayout\Settings\DevelopmentSettingsFeatureEnabledConfig
    {
        if (null === $this->developmentSettingsFeatureEnabled) {
            $this->_usedProperties['developmentSettingsFeatureEnabled'] = true;
            $this->developmentSettingsFeatureEnabled = new \Symfony\Config\OroLayout\Settings\DevelopmentSettingsFeatureEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "developmentSettingsFeatureEnabled()" has already been initialized. You cannot pass values the second time you call developmentSettingsFeatureEnabled().');
        }
    
        return $this->developmentSettingsFeatureEnabled;
    }
    
    public function debugBlockInfo(array $value = []): \Symfony\Config\OroLayout\Settings\DebugBlockInfoConfig
    {
        if (null === $this->debugBlockInfo) {
            $this->_usedProperties['debugBlockInfo'] = true;
            $this->debugBlockInfo = new \Symfony\Config\OroLayout\Settings\DebugBlockInfoConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "debugBlockInfo()" has already been initialized. You cannot pass values the second time you call debugBlockInfo().');
        }
    
        return $this->debugBlockInfo;
    }
    
    public function debugDeveloperToolbar(array $value = []): \Symfony\Config\OroLayout\Settings\DebugDeveloperToolbarConfig
    {
        if (null === $this->debugDeveloperToolbar) {
            $this->_usedProperties['debugDeveloperToolbar'] = true;
            $this->debugDeveloperToolbar = new \Symfony\Config\OroLayout\Settings\DebugDeveloperToolbarConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "debugDeveloperToolbar()" has already been initialized. You cannot pass values the second time you call debugDeveloperToolbar().');
        }
    
        return $this->debugDeveloperToolbar;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('development_settings_feature_enabled', $value)) {
            $this->_usedProperties['developmentSettingsFeatureEnabled'] = true;
            $this->developmentSettingsFeatureEnabled = new \Symfony\Config\OroLayout\Settings\DevelopmentSettingsFeatureEnabledConfig($value['development_settings_feature_enabled']);
            unset($value['development_settings_feature_enabled']);
        }
    
        if (array_key_exists('debug_block_info', $value)) {
            $this->_usedProperties['debugBlockInfo'] = true;
            $this->debugBlockInfo = new \Symfony\Config\OroLayout\Settings\DebugBlockInfoConfig($value['debug_block_info']);
            unset($value['debug_block_info']);
        }
    
        if (array_key_exists('debug_developer_toolbar', $value)) {
            $this->_usedProperties['debugDeveloperToolbar'] = true;
            $this->debugDeveloperToolbar = new \Symfony\Config\OroLayout\Settings\DebugDeveloperToolbarConfig($value['debug_developer_toolbar']);
            unset($value['debug_developer_toolbar']);
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
        if (isset($this->_usedProperties['developmentSettingsFeatureEnabled'])) {
            $output['development_settings_feature_enabled'] = $this->developmentSettingsFeatureEnabled->toArray();
        }
        if (isset($this->_usedProperties['debugBlockInfo'])) {
            $output['debug_block_info'] = $this->debugBlockInfo->toArray();
        }
        if (isset($this->_usedProperties['debugDeveloperToolbar'])) {
            $output['debug_developer_toolbar'] = $this->debugDeveloperToolbar->toArray();
        }
    
        return $output;
    }

}
