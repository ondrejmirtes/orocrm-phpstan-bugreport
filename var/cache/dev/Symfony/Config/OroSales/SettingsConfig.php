<?php

namespace Symfony\Config\OroSales;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'LeadFeatureEnabledConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'OpportunityFeatureEnabledConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SalesfunnelFeatureEnabledConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DefaultOpportunityProbabilitiesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DisplayRelevantOpportunitiesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $leadFeatureEnabled;
    private $opportunityFeatureEnabled;
    private $salesfunnelFeatureEnabled;
    private $defaultOpportunityProbabilities;
    private $displayRelevantOpportunities;
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
    
    public function leadFeatureEnabled(array $value = []): \Symfony\Config\OroSales\Settings\LeadFeatureEnabledConfig
    {
        if (null === $this->leadFeatureEnabled) {
            $this->_usedProperties['leadFeatureEnabled'] = true;
            $this->leadFeatureEnabled = new \Symfony\Config\OroSales\Settings\LeadFeatureEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "leadFeatureEnabled()" has already been initialized. You cannot pass values the second time you call leadFeatureEnabled().');
        }
    
        return $this->leadFeatureEnabled;
    }
    
    public function opportunityFeatureEnabled(array $value = []): \Symfony\Config\OroSales\Settings\OpportunityFeatureEnabledConfig
    {
        if (null === $this->opportunityFeatureEnabled) {
            $this->_usedProperties['opportunityFeatureEnabled'] = true;
            $this->opportunityFeatureEnabled = new \Symfony\Config\OroSales\Settings\OpportunityFeatureEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "opportunityFeatureEnabled()" has already been initialized. You cannot pass values the second time you call opportunityFeatureEnabled().');
        }
    
        return $this->opportunityFeatureEnabled;
    }
    
    public function salesfunnelFeatureEnabled(array $value = []): \Symfony\Config\OroSales\Settings\SalesfunnelFeatureEnabledConfig
    {
        if (null === $this->salesfunnelFeatureEnabled) {
            $this->_usedProperties['salesfunnelFeatureEnabled'] = true;
            $this->salesfunnelFeatureEnabled = new \Symfony\Config\OroSales\Settings\SalesfunnelFeatureEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "salesfunnelFeatureEnabled()" has already been initialized. You cannot pass values the second time you call salesfunnelFeatureEnabled().');
        }
    
        return $this->salesfunnelFeatureEnabled;
    }
    
    public function defaultOpportunityProbabilities(array $value = []): \Symfony\Config\OroSales\Settings\DefaultOpportunityProbabilitiesConfig
    {
        if (null === $this->defaultOpportunityProbabilities) {
            $this->_usedProperties['defaultOpportunityProbabilities'] = true;
            $this->defaultOpportunityProbabilities = new \Symfony\Config\OroSales\Settings\DefaultOpportunityProbabilitiesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaultOpportunityProbabilities()" has already been initialized. You cannot pass values the second time you call defaultOpportunityProbabilities().');
        }
    
        return $this->defaultOpportunityProbabilities;
    }
    
    public function displayRelevantOpportunities(array $value = []): \Symfony\Config\OroSales\Settings\DisplayRelevantOpportunitiesConfig
    {
        if (null === $this->displayRelevantOpportunities) {
            $this->_usedProperties['displayRelevantOpportunities'] = true;
            $this->displayRelevantOpportunities = new \Symfony\Config\OroSales\Settings\DisplayRelevantOpportunitiesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "displayRelevantOpportunities()" has already been initialized. You cannot pass values the second time you call displayRelevantOpportunities().');
        }
    
        return $this->displayRelevantOpportunities;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('lead_feature_enabled', $value)) {
            $this->_usedProperties['leadFeatureEnabled'] = true;
            $this->leadFeatureEnabled = new \Symfony\Config\OroSales\Settings\LeadFeatureEnabledConfig($value['lead_feature_enabled']);
            unset($value['lead_feature_enabled']);
        }
    
        if (array_key_exists('opportunity_feature_enabled', $value)) {
            $this->_usedProperties['opportunityFeatureEnabled'] = true;
            $this->opportunityFeatureEnabled = new \Symfony\Config\OroSales\Settings\OpportunityFeatureEnabledConfig($value['opportunity_feature_enabled']);
            unset($value['opportunity_feature_enabled']);
        }
    
        if (array_key_exists('salesfunnel_feature_enabled', $value)) {
            $this->_usedProperties['salesfunnelFeatureEnabled'] = true;
            $this->salesfunnelFeatureEnabled = new \Symfony\Config\OroSales\Settings\SalesfunnelFeatureEnabledConfig($value['salesfunnel_feature_enabled']);
            unset($value['salesfunnel_feature_enabled']);
        }
    
        if (array_key_exists('default_opportunity_probabilities', $value)) {
            $this->_usedProperties['defaultOpportunityProbabilities'] = true;
            $this->defaultOpportunityProbabilities = new \Symfony\Config\OroSales\Settings\DefaultOpportunityProbabilitiesConfig($value['default_opportunity_probabilities']);
            unset($value['default_opportunity_probabilities']);
        }
    
        if (array_key_exists('display_relevant_opportunities', $value)) {
            $this->_usedProperties['displayRelevantOpportunities'] = true;
            $this->displayRelevantOpportunities = new \Symfony\Config\OroSales\Settings\DisplayRelevantOpportunitiesConfig($value['display_relevant_opportunities']);
            unset($value['display_relevant_opportunities']);
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
        if (isset($this->_usedProperties['leadFeatureEnabled'])) {
            $output['lead_feature_enabled'] = $this->leadFeatureEnabled->toArray();
        }
        if (isset($this->_usedProperties['opportunityFeatureEnabled'])) {
            $output['opportunity_feature_enabled'] = $this->opportunityFeatureEnabled->toArray();
        }
        if (isset($this->_usedProperties['salesfunnelFeatureEnabled'])) {
            $output['salesfunnel_feature_enabled'] = $this->salesfunnelFeatureEnabled->toArray();
        }
        if (isset($this->_usedProperties['defaultOpportunityProbabilities'])) {
            $output['default_opportunity_probabilities'] = $this->defaultOpportunityProbabilities->toArray();
        }
        if (isset($this->_usedProperties['displayRelevantOpportunities'])) {
            $output['display_relevant_opportunities'] = $this->displayRelevantOpportunities->toArray();
        }
    
        return $output;
    }

}
