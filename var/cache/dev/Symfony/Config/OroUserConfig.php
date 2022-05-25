<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroUser'.\DIRECTORY_SEPARATOR.'ResetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroUser'.\DIRECTORY_SEPARATOR.'PrivilegesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroUser'.\DIRECTORY_SEPARATOR.'LoginSourcesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroUser'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroUserConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $reset;
    private $privileges;
    private $loginSources;
    private $settings;
    private $_usedProperties = [];
    
    public function reset(array $value = []): \Symfony\Config\OroUser\ResetConfig
    {
        if (null === $this->reset) {
            $this->_usedProperties['reset'] = true;
            $this->reset = new \Symfony\Config\OroUser\ResetConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "reset()" has already been initialized. You cannot pass values the second time you call reset().');
        }
    
        return $this->reset;
    }
    
    public function privileges(string $name, array $value = []): \Symfony\Config\OroUser\PrivilegesConfig
    {
        if (!isset($this->privileges[$name])) {
            $this->_usedProperties['privileges'] = true;
    
            return $this->privileges[$name] = new \Symfony\Config\OroUser\PrivilegesConfig($value);
        }
        if ([] === $value) {
            return $this->privileges[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "privileges()" has already been initialized. You cannot pass values the second time you call privileges().');
    }
    
    public function loginSources(string $name, array $value = []): \Symfony\Config\OroUser\LoginSourcesConfig
    {
        if (!isset($this->loginSources[$name])) {
            $this->_usedProperties['loginSources'] = true;
    
            return $this->loginSources[$name] = new \Symfony\Config\OroUser\LoginSourcesConfig($value);
        }
        if ([] === $value) {
            return $this->loginSources[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "loginSources()" has already been initialized. You cannot pass values the second time you call loginSources().');
    }
    
    public function settings(array $value = []): \Symfony\Config\OroUser\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroUser\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_user';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('reset', $value)) {
            $this->_usedProperties['reset'] = true;
            $this->reset = new \Symfony\Config\OroUser\ResetConfig($value['reset']);
            unset($value['reset']);
        }
    
        if (array_key_exists('privileges', $value)) {
            $this->_usedProperties['privileges'] = true;
            $this->privileges = array_map(function ($v) { return new \Symfony\Config\OroUser\PrivilegesConfig($v); }, $value['privileges']);
            unset($value['privileges']);
        }
    
        if (array_key_exists('login_sources', $value)) {
            $this->_usedProperties['loginSources'] = true;
            $this->loginSources = array_map(function ($v) { return new \Symfony\Config\OroUser\LoginSourcesConfig($v); }, $value['login_sources']);
            unset($value['login_sources']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroUser\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['reset'])) {
            $output['reset'] = $this->reset->toArray();
        }
        if (isset($this->_usedProperties['privileges'])) {
            $output['privileges'] = array_map(function ($v) { return $v->toArray(); }, $this->privileges);
        }
        if (isset($this->_usedProperties['loginSources'])) {
            $output['login_sources'] = array_map(function ($v) { return $v->toArray(); }, $this->loginSources);
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
