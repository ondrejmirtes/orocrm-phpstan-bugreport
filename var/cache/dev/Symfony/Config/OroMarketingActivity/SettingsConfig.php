<?php

namespace Symfony\Config\OroMarketingActivity;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'FeatureEnabledConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $featureEnabled;
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
    
    public function featureEnabled(array $value = []): \Symfony\Config\OroMarketingActivity\Settings\FeatureEnabledConfig
    {
        if (null === $this->featureEnabled) {
            $this->_usedProperties['featureEnabled'] = true;
            $this->featureEnabled = new \Symfony\Config\OroMarketingActivity\Settings\FeatureEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "featureEnabled()" has already been initialized. You cannot pass values the second time you call featureEnabled().');
        }
    
        return $this->featureEnabled;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('feature_enabled', $value)) {
            $this->_usedProperties['featureEnabled'] = true;
            $this->featureEnabled = new \Symfony\Config\OroMarketingActivity\Settings\FeatureEnabledConfig($value['feature_enabled']);
            unset($value['feature_enabled']);
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
        if (isset($this->_usedProperties['featureEnabled'])) {
            $output['feature_enabled'] = $this->featureEnabled->toArray();
        }
    
        return $output;
    }

}
