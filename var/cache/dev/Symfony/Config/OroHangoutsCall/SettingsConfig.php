<?php

namespace Symfony\Config\OroHangoutsCall;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EnableGoogleHangoutsForEmailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EnableGoogleHangoutsForPhoneConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $enableGoogleHangoutsForEmail;
    private $enableGoogleHangoutsForPhone;
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
    
    public function enableGoogleHangoutsForEmail(array $value = []): \Symfony\Config\OroHangoutsCall\Settings\EnableGoogleHangoutsForEmailConfig
    {
        if (null === $this->enableGoogleHangoutsForEmail) {
            $this->_usedProperties['enableGoogleHangoutsForEmail'] = true;
            $this->enableGoogleHangoutsForEmail = new \Symfony\Config\OroHangoutsCall\Settings\EnableGoogleHangoutsForEmailConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "enableGoogleHangoutsForEmail()" has already been initialized. You cannot pass values the second time you call enableGoogleHangoutsForEmail().');
        }
    
        return $this->enableGoogleHangoutsForEmail;
    }
    
    public function enableGoogleHangoutsForPhone(array $value = []): \Symfony\Config\OroHangoutsCall\Settings\EnableGoogleHangoutsForPhoneConfig
    {
        if (null === $this->enableGoogleHangoutsForPhone) {
            $this->_usedProperties['enableGoogleHangoutsForPhone'] = true;
            $this->enableGoogleHangoutsForPhone = new \Symfony\Config\OroHangoutsCall\Settings\EnableGoogleHangoutsForPhoneConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "enableGoogleHangoutsForPhone()" has already been initialized. You cannot pass values the second time you call enableGoogleHangoutsForPhone().');
        }
    
        return $this->enableGoogleHangoutsForPhone;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('enable_google_hangouts_for_email', $value)) {
            $this->_usedProperties['enableGoogleHangoutsForEmail'] = true;
            $this->enableGoogleHangoutsForEmail = new \Symfony\Config\OroHangoutsCall\Settings\EnableGoogleHangoutsForEmailConfig($value['enable_google_hangouts_for_email']);
            unset($value['enable_google_hangouts_for_email']);
        }
    
        if (array_key_exists('enable_google_hangouts_for_phone', $value)) {
            $this->_usedProperties['enableGoogleHangoutsForPhone'] = true;
            $this->enableGoogleHangoutsForPhone = new \Symfony\Config\OroHangoutsCall\Settings\EnableGoogleHangoutsForPhoneConfig($value['enable_google_hangouts_for_phone']);
            unset($value['enable_google_hangouts_for_phone']);
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
        if (isset($this->_usedProperties['enableGoogleHangoutsForEmail'])) {
            $output['enable_google_hangouts_for_email'] = $this->enableGoogleHangoutsForEmail->toArray();
        }
        if (isset($this->_usedProperties['enableGoogleHangoutsForPhone'])) {
            $output['enable_google_hangouts_for_phone'] = $this->enableGoogleHangoutsForPhone->toArray();
        }
    
        return $output;
    }

}
