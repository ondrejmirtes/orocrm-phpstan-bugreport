<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroEmail'.\DIRECTORY_SEPARATOR.'FlashNotificationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroEmail'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroEmailConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $emailSyncExclusions;
    private $publicEmailOwners;
    private $flashNotification;
    private $settings;
    private $_usedProperties = [];
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function emailSyncExclusions($value): self
    {
        $this->_usedProperties['emailSyncExclusions'] = true;
        $this->emailSyncExclusions = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function publicEmailOwners($value): self
    {
        $this->_usedProperties['publicEmailOwners'] = true;
        $this->publicEmailOwners = $value;
    
        return $this;
    }
    
    public function flashNotification(array $value = []): \Symfony\Config\OroEmail\FlashNotificationConfig
    {
        if (null === $this->flashNotification) {
            $this->_usedProperties['flashNotification'] = true;
            $this->flashNotification = new \Symfony\Config\OroEmail\FlashNotificationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "flashNotification()" has already been initialized. You cannot pass values the second time you call flashNotification().');
        }
    
        return $this->flashNotification;
    }
    
    public function settings(array $value = []): \Symfony\Config\OroEmail\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroEmail\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_email';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('email_sync_exclusions', $value)) {
            $this->_usedProperties['emailSyncExclusions'] = true;
            $this->emailSyncExclusions = $value['email_sync_exclusions'];
            unset($value['email_sync_exclusions']);
        }
    
        if (array_key_exists('public_email_owners', $value)) {
            $this->_usedProperties['publicEmailOwners'] = true;
            $this->publicEmailOwners = $value['public_email_owners'];
            unset($value['public_email_owners']);
        }
    
        if (array_key_exists('flash_notification', $value)) {
            $this->_usedProperties['flashNotification'] = true;
            $this->flashNotification = new \Symfony\Config\OroEmail\FlashNotificationConfig($value['flash_notification']);
            unset($value['flash_notification']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroEmail\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['emailSyncExclusions'])) {
            $output['email_sync_exclusions'] = $this->emailSyncExclusions;
        }
        if (isset($this->_usedProperties['publicEmailOwners'])) {
            $output['public_email_owners'] = $this->publicEmailOwners;
        }
        if (isset($this->_usedProperties['flashNotification'])) {
            $output['flash_notification'] = $this->flashNotification->toArray();
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
