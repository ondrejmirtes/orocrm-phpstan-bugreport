<?php

namespace Symfony\Config\OroNotification;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EmailNotificationSenderEmailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EmailNotificationSenderNameConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'MassNotificationTemplateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'MassNotificationRecipientsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $emailNotificationSenderEmail;
    private $emailNotificationSenderName;
    private $massNotificationTemplate;
    private $massNotificationRecipients;
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
    
    public function emailNotificationSenderEmail(array $value = []): \Symfony\Config\OroNotification\Settings\EmailNotificationSenderEmailConfig
    {
        if (null === $this->emailNotificationSenderEmail) {
            $this->_usedProperties['emailNotificationSenderEmail'] = true;
            $this->emailNotificationSenderEmail = new \Symfony\Config\OroNotification\Settings\EmailNotificationSenderEmailConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "emailNotificationSenderEmail()" has already been initialized. You cannot pass values the second time you call emailNotificationSenderEmail().');
        }
    
        return $this->emailNotificationSenderEmail;
    }
    
    public function emailNotificationSenderName(array $value = []): \Symfony\Config\OroNotification\Settings\EmailNotificationSenderNameConfig
    {
        if (null === $this->emailNotificationSenderName) {
            $this->_usedProperties['emailNotificationSenderName'] = true;
            $this->emailNotificationSenderName = new \Symfony\Config\OroNotification\Settings\EmailNotificationSenderNameConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "emailNotificationSenderName()" has already been initialized. You cannot pass values the second time you call emailNotificationSenderName().');
        }
    
        return $this->emailNotificationSenderName;
    }
    
    public function massNotificationTemplate(array $value = []): \Symfony\Config\OroNotification\Settings\MassNotificationTemplateConfig
    {
        if (null === $this->massNotificationTemplate) {
            $this->_usedProperties['massNotificationTemplate'] = true;
            $this->massNotificationTemplate = new \Symfony\Config\OroNotification\Settings\MassNotificationTemplateConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "massNotificationTemplate()" has already been initialized. You cannot pass values the second time you call massNotificationTemplate().');
        }
    
        return $this->massNotificationTemplate;
    }
    
    public function massNotificationRecipients(array $value = []): \Symfony\Config\OroNotification\Settings\MassNotificationRecipientsConfig
    {
        if (null === $this->massNotificationRecipients) {
            $this->_usedProperties['massNotificationRecipients'] = true;
            $this->massNotificationRecipients = new \Symfony\Config\OroNotification\Settings\MassNotificationRecipientsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "massNotificationRecipients()" has already been initialized. You cannot pass values the second time you call massNotificationRecipients().');
        }
    
        return $this->massNotificationRecipients;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('email_notification_sender_email', $value)) {
            $this->_usedProperties['emailNotificationSenderEmail'] = true;
            $this->emailNotificationSenderEmail = new \Symfony\Config\OroNotification\Settings\EmailNotificationSenderEmailConfig($value['email_notification_sender_email']);
            unset($value['email_notification_sender_email']);
        }
    
        if (array_key_exists('email_notification_sender_name', $value)) {
            $this->_usedProperties['emailNotificationSenderName'] = true;
            $this->emailNotificationSenderName = new \Symfony\Config\OroNotification\Settings\EmailNotificationSenderNameConfig($value['email_notification_sender_name']);
            unset($value['email_notification_sender_name']);
        }
    
        if (array_key_exists('mass_notification_template', $value)) {
            $this->_usedProperties['massNotificationTemplate'] = true;
            $this->massNotificationTemplate = new \Symfony\Config\OroNotification\Settings\MassNotificationTemplateConfig($value['mass_notification_template']);
            unset($value['mass_notification_template']);
        }
    
        if (array_key_exists('mass_notification_recipients', $value)) {
            $this->_usedProperties['massNotificationRecipients'] = true;
            $this->massNotificationRecipients = new \Symfony\Config\OroNotification\Settings\MassNotificationRecipientsConfig($value['mass_notification_recipients']);
            unset($value['mass_notification_recipients']);
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
        if (isset($this->_usedProperties['emailNotificationSenderEmail'])) {
            $output['email_notification_sender_email'] = $this->emailNotificationSenderEmail->toArray();
        }
        if (isset($this->_usedProperties['emailNotificationSenderName'])) {
            $output['email_notification_sender_name'] = $this->emailNotificationSenderName->toArray();
        }
        if (isset($this->_usedProperties['massNotificationTemplate'])) {
            $output['mass_notification_template'] = $this->massNotificationTemplate->toArray();
        }
        if (isset($this->_usedProperties['massNotificationRecipients'])) {
            $output['mass_notification_recipients'] = $this->massNotificationRecipients->toArray();
        }
    
        return $output;
    }

}
