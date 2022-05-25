<?php

namespace Symfony\Config\OroLogger;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DetailedLogsLevelConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DetailedLogsEndTimestampConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EmailNotificationRecipientsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EmailNotificationSubjectConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $detailedLogsLevel;
    private $detailedLogsEndTimestamp;
    private $emailNotificationRecipients;
    private $emailNotificationSubject;
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
    
    public function detailedLogsLevel(array $value = []): \Symfony\Config\OroLogger\Settings\DetailedLogsLevelConfig
    {
        if (null === $this->detailedLogsLevel) {
            $this->_usedProperties['detailedLogsLevel'] = true;
            $this->detailedLogsLevel = new \Symfony\Config\OroLogger\Settings\DetailedLogsLevelConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "detailedLogsLevel()" has already been initialized. You cannot pass values the second time you call detailedLogsLevel().');
        }
    
        return $this->detailedLogsLevel;
    }
    
    public function detailedLogsEndTimestamp(array $value = []): \Symfony\Config\OroLogger\Settings\DetailedLogsEndTimestampConfig
    {
        if (null === $this->detailedLogsEndTimestamp) {
            $this->_usedProperties['detailedLogsEndTimestamp'] = true;
            $this->detailedLogsEndTimestamp = new \Symfony\Config\OroLogger\Settings\DetailedLogsEndTimestampConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "detailedLogsEndTimestamp()" has already been initialized. You cannot pass values the second time you call detailedLogsEndTimestamp().');
        }
    
        return $this->detailedLogsEndTimestamp;
    }
    
    public function emailNotificationRecipients(array $value = []): \Symfony\Config\OroLogger\Settings\EmailNotificationRecipientsConfig
    {
        if (null === $this->emailNotificationRecipients) {
            $this->_usedProperties['emailNotificationRecipients'] = true;
            $this->emailNotificationRecipients = new \Symfony\Config\OroLogger\Settings\EmailNotificationRecipientsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "emailNotificationRecipients()" has already been initialized. You cannot pass values the second time you call emailNotificationRecipients().');
        }
    
        return $this->emailNotificationRecipients;
    }
    
    public function emailNotificationSubject(array $value = []): \Symfony\Config\OroLogger\Settings\EmailNotificationSubjectConfig
    {
        if (null === $this->emailNotificationSubject) {
            $this->_usedProperties['emailNotificationSubject'] = true;
            $this->emailNotificationSubject = new \Symfony\Config\OroLogger\Settings\EmailNotificationSubjectConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "emailNotificationSubject()" has already been initialized. You cannot pass values the second time you call emailNotificationSubject().');
        }
    
        return $this->emailNotificationSubject;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('detailed_logs_level', $value)) {
            $this->_usedProperties['detailedLogsLevel'] = true;
            $this->detailedLogsLevel = new \Symfony\Config\OroLogger\Settings\DetailedLogsLevelConfig($value['detailed_logs_level']);
            unset($value['detailed_logs_level']);
        }
    
        if (array_key_exists('detailed_logs_end_timestamp', $value)) {
            $this->_usedProperties['detailedLogsEndTimestamp'] = true;
            $this->detailedLogsEndTimestamp = new \Symfony\Config\OroLogger\Settings\DetailedLogsEndTimestampConfig($value['detailed_logs_end_timestamp']);
            unset($value['detailed_logs_end_timestamp']);
        }
    
        if (array_key_exists('email_notification_recipients', $value)) {
            $this->_usedProperties['emailNotificationRecipients'] = true;
            $this->emailNotificationRecipients = new \Symfony\Config\OroLogger\Settings\EmailNotificationRecipientsConfig($value['email_notification_recipients']);
            unset($value['email_notification_recipients']);
        }
    
        if (array_key_exists('email_notification_subject', $value)) {
            $this->_usedProperties['emailNotificationSubject'] = true;
            $this->emailNotificationSubject = new \Symfony\Config\OroLogger\Settings\EmailNotificationSubjectConfig($value['email_notification_subject']);
            unset($value['email_notification_subject']);
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
        if (isset($this->_usedProperties['detailedLogsLevel'])) {
            $output['detailed_logs_level'] = $this->detailedLogsLevel->toArray();
        }
        if (isset($this->_usedProperties['detailedLogsEndTimestamp'])) {
            $output['detailed_logs_end_timestamp'] = $this->detailedLogsEndTimestamp->toArray();
        }
        if (isset($this->_usedProperties['emailNotificationRecipients'])) {
            $output['email_notification_recipients'] = $this->emailNotificationRecipients->toArray();
        }
        if (isset($this->_usedProperties['emailNotificationSubject'])) {
            $output['email_notification_subject'] = $this->emailNotificationSubject->toArray();
        }
    
        return $output;
    }

}
