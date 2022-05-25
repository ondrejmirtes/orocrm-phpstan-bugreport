<?php

namespace Symfony\Config\OroCampaign;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'CampaignSenderEmailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'CampaignSenderNameConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'FeatureEnabledConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $campaignSenderEmail;
    private $campaignSenderName;
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
    
    public function campaignSenderEmail(array $value = []): \Symfony\Config\OroCampaign\Settings\CampaignSenderEmailConfig
    {
        if (null === $this->campaignSenderEmail) {
            $this->_usedProperties['campaignSenderEmail'] = true;
            $this->campaignSenderEmail = new \Symfony\Config\OroCampaign\Settings\CampaignSenderEmailConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "campaignSenderEmail()" has already been initialized. You cannot pass values the second time you call campaignSenderEmail().');
        }
    
        return $this->campaignSenderEmail;
    }
    
    public function campaignSenderName(array $value = []): \Symfony\Config\OroCampaign\Settings\CampaignSenderNameConfig
    {
        if (null === $this->campaignSenderName) {
            $this->_usedProperties['campaignSenderName'] = true;
            $this->campaignSenderName = new \Symfony\Config\OroCampaign\Settings\CampaignSenderNameConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "campaignSenderName()" has already been initialized. You cannot pass values the second time you call campaignSenderName().');
        }
    
        return $this->campaignSenderName;
    }
    
    public function featureEnabled(array $value = []): \Symfony\Config\OroCampaign\Settings\FeatureEnabledConfig
    {
        if (null === $this->featureEnabled) {
            $this->_usedProperties['featureEnabled'] = true;
            $this->featureEnabled = new \Symfony\Config\OroCampaign\Settings\FeatureEnabledConfig($value);
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
    
        if (array_key_exists('campaign_sender_email', $value)) {
            $this->_usedProperties['campaignSenderEmail'] = true;
            $this->campaignSenderEmail = new \Symfony\Config\OroCampaign\Settings\CampaignSenderEmailConfig($value['campaign_sender_email']);
            unset($value['campaign_sender_email']);
        }
    
        if (array_key_exists('campaign_sender_name', $value)) {
            $this->_usedProperties['campaignSenderName'] = true;
            $this->campaignSenderName = new \Symfony\Config\OroCampaign\Settings\CampaignSenderNameConfig($value['campaign_sender_name']);
            unset($value['campaign_sender_name']);
        }
    
        if (array_key_exists('feature_enabled', $value)) {
            $this->_usedProperties['featureEnabled'] = true;
            $this->featureEnabled = new \Symfony\Config\OroCampaign\Settings\FeatureEnabledConfig($value['feature_enabled']);
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
        if (isset($this->_usedProperties['campaignSenderEmail'])) {
            $output['campaign_sender_email'] = $this->campaignSenderEmail->toArray();
        }
        if (isset($this->_usedProperties['campaignSenderName'])) {
            $output['campaign_sender_name'] = $this->campaignSenderName->toArray();
        }
        if (isset($this->_usedProperties['featureEnabled'])) {
            $output['feature_enabled'] = $this->featureEnabled->toArray();
        }
    
        return $output;
    }

}
