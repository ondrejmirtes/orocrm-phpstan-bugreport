<?php

namespace Symfony\Config\OroTracking;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DynamicTrackingEnabledConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'LogRotateIntervalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PiwikHostConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PiwikTokenAuthConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'FeatureEnabledConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PrecalculatedStatisticEnabledConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $dynamicTrackingEnabled;
    private $logRotateInterval;
    private $piwikHost;
    private $piwikTokenAuth;
    private $featureEnabled;
    private $precalculatedStatisticEnabled;
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
    
    public function dynamicTrackingEnabled(array $value = []): \Symfony\Config\OroTracking\Settings\DynamicTrackingEnabledConfig
    {
        if (null === $this->dynamicTrackingEnabled) {
            $this->_usedProperties['dynamicTrackingEnabled'] = true;
            $this->dynamicTrackingEnabled = new \Symfony\Config\OroTracking\Settings\DynamicTrackingEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "dynamicTrackingEnabled()" has already been initialized. You cannot pass values the second time you call dynamicTrackingEnabled().');
        }
    
        return $this->dynamicTrackingEnabled;
    }
    
    public function logRotateInterval(array $value = []): \Symfony\Config\OroTracking\Settings\LogRotateIntervalConfig
    {
        if (null === $this->logRotateInterval) {
            $this->_usedProperties['logRotateInterval'] = true;
            $this->logRotateInterval = new \Symfony\Config\OroTracking\Settings\LogRotateIntervalConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "logRotateInterval()" has already been initialized. You cannot pass values the second time you call logRotateInterval().');
        }
    
        return $this->logRotateInterval;
    }
    
    public function piwikHost(array $value = []): \Symfony\Config\OroTracking\Settings\PiwikHostConfig
    {
        if (null === $this->piwikHost) {
            $this->_usedProperties['piwikHost'] = true;
            $this->piwikHost = new \Symfony\Config\OroTracking\Settings\PiwikHostConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "piwikHost()" has already been initialized. You cannot pass values the second time you call piwikHost().');
        }
    
        return $this->piwikHost;
    }
    
    public function piwikTokenAuth(array $value = []): \Symfony\Config\OroTracking\Settings\PiwikTokenAuthConfig
    {
        if (null === $this->piwikTokenAuth) {
            $this->_usedProperties['piwikTokenAuth'] = true;
            $this->piwikTokenAuth = new \Symfony\Config\OroTracking\Settings\PiwikTokenAuthConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "piwikTokenAuth()" has already been initialized. You cannot pass values the second time you call piwikTokenAuth().');
        }
    
        return $this->piwikTokenAuth;
    }
    
    public function featureEnabled(array $value = []): \Symfony\Config\OroTracking\Settings\FeatureEnabledConfig
    {
        if (null === $this->featureEnabled) {
            $this->_usedProperties['featureEnabled'] = true;
            $this->featureEnabled = new \Symfony\Config\OroTracking\Settings\FeatureEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "featureEnabled()" has already been initialized. You cannot pass values the second time you call featureEnabled().');
        }
    
        return $this->featureEnabled;
    }
    
    public function precalculatedStatisticEnabled(array $value = []): \Symfony\Config\OroTracking\Settings\PrecalculatedStatisticEnabledConfig
    {
        if (null === $this->precalculatedStatisticEnabled) {
            $this->_usedProperties['precalculatedStatisticEnabled'] = true;
            $this->precalculatedStatisticEnabled = new \Symfony\Config\OroTracking\Settings\PrecalculatedStatisticEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "precalculatedStatisticEnabled()" has already been initialized. You cannot pass values the second time you call precalculatedStatisticEnabled().');
        }
    
        return $this->precalculatedStatisticEnabled;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('dynamic_tracking_enabled', $value)) {
            $this->_usedProperties['dynamicTrackingEnabled'] = true;
            $this->dynamicTrackingEnabled = new \Symfony\Config\OroTracking\Settings\DynamicTrackingEnabledConfig($value['dynamic_tracking_enabled']);
            unset($value['dynamic_tracking_enabled']);
        }
    
        if (array_key_exists('log_rotate_interval', $value)) {
            $this->_usedProperties['logRotateInterval'] = true;
            $this->logRotateInterval = new \Symfony\Config\OroTracking\Settings\LogRotateIntervalConfig($value['log_rotate_interval']);
            unset($value['log_rotate_interval']);
        }
    
        if (array_key_exists('piwik_host', $value)) {
            $this->_usedProperties['piwikHost'] = true;
            $this->piwikHost = new \Symfony\Config\OroTracking\Settings\PiwikHostConfig($value['piwik_host']);
            unset($value['piwik_host']);
        }
    
        if (array_key_exists('piwik_token_auth', $value)) {
            $this->_usedProperties['piwikTokenAuth'] = true;
            $this->piwikTokenAuth = new \Symfony\Config\OroTracking\Settings\PiwikTokenAuthConfig($value['piwik_token_auth']);
            unset($value['piwik_token_auth']);
        }
    
        if (array_key_exists('feature_enabled', $value)) {
            $this->_usedProperties['featureEnabled'] = true;
            $this->featureEnabled = new \Symfony\Config\OroTracking\Settings\FeatureEnabledConfig($value['feature_enabled']);
            unset($value['feature_enabled']);
        }
    
        if (array_key_exists('precalculated_statistic_enabled', $value)) {
            $this->_usedProperties['precalculatedStatisticEnabled'] = true;
            $this->precalculatedStatisticEnabled = new \Symfony\Config\OroTracking\Settings\PrecalculatedStatisticEnabledConfig($value['precalculated_statistic_enabled']);
            unset($value['precalculated_statistic_enabled']);
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
        if (isset($this->_usedProperties['dynamicTrackingEnabled'])) {
            $output['dynamic_tracking_enabled'] = $this->dynamicTrackingEnabled->toArray();
        }
        if (isset($this->_usedProperties['logRotateInterval'])) {
            $output['log_rotate_interval'] = $this->logRotateInterval->toArray();
        }
        if (isset($this->_usedProperties['piwikHost'])) {
            $output['piwik_host'] = $this->piwikHost->toArray();
        }
        if (isset($this->_usedProperties['piwikTokenAuth'])) {
            $output['piwik_token_auth'] = $this->piwikTokenAuth->toArray();
        }
        if (isset($this->_usedProperties['featureEnabled'])) {
            $output['feature_enabled'] = $this->featureEnabled->toArray();
        }
        if (isset($this->_usedProperties['precalculatedStatisticEnabled'])) {
            $output['precalculated_statistic_enabled'] = $this->precalculatedStatisticEnabled->toArray();
        }
    
        return $output;
    }

}
