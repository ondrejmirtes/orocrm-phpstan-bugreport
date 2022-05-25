<?php

namespace Symfony\Config\OroEmail;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'FeatureEnabledConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SignatureConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'AppendSignatureConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DefaultButtonReplyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'UseThreadsInEmailsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'MinimumInputLengthConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ShowRecentEmailsInUserBarConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'AttachmentSyncEnableConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'AttachmentSyncMaxSizeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'AttachmentMaxSizeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'AttachmentPreviewLimitConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SanitizeHtmlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ThreadsGroupingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SmtpSettingsHostConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SmtpSettingsPortConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SmtpSettingsEncryptionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SmtpSettingsUsernameConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SmtpSettingsPasswordConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $featureEnabled;
    private $signature;
    private $appendSignature;
    private $defaultButtonReply;
    private $useThreadsInEmails;
    private $minimumInputLength;
    private $showRecentEmailsInUserBar;
    private $attachmentSyncEnable;
    private $attachmentSyncMaxSize;
    private $attachmentMaxSize;
    private $attachmentPreviewLimit;
    private $sanitizeHtml;
    private $threadsGrouping;
    private $smtpSettingsHost;
    private $smtpSettingsPort;
    private $smtpSettingsEncryption;
    private $smtpSettingsUsername;
    private $smtpSettingsPassword;
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
    
    public function featureEnabled(array $value = []): \Symfony\Config\OroEmail\Settings\FeatureEnabledConfig
    {
        if (null === $this->featureEnabled) {
            $this->_usedProperties['featureEnabled'] = true;
            $this->featureEnabled = new \Symfony\Config\OroEmail\Settings\FeatureEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "featureEnabled()" has already been initialized. You cannot pass values the second time you call featureEnabled().');
        }
    
        return $this->featureEnabled;
    }
    
    public function signature(array $value = []): \Symfony\Config\OroEmail\Settings\SignatureConfig
    {
        if (null === $this->signature) {
            $this->_usedProperties['signature'] = true;
            $this->signature = new \Symfony\Config\OroEmail\Settings\SignatureConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "signature()" has already been initialized. You cannot pass values the second time you call signature().');
        }
    
        return $this->signature;
    }
    
    public function appendSignature(array $value = []): \Symfony\Config\OroEmail\Settings\AppendSignatureConfig
    {
        if (null === $this->appendSignature) {
            $this->_usedProperties['appendSignature'] = true;
            $this->appendSignature = new \Symfony\Config\OroEmail\Settings\AppendSignatureConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "appendSignature()" has already been initialized. You cannot pass values the second time you call appendSignature().');
        }
    
        return $this->appendSignature;
    }
    
    public function defaultButtonReply(array $value = []): \Symfony\Config\OroEmail\Settings\DefaultButtonReplyConfig
    {
        if (null === $this->defaultButtonReply) {
            $this->_usedProperties['defaultButtonReply'] = true;
            $this->defaultButtonReply = new \Symfony\Config\OroEmail\Settings\DefaultButtonReplyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaultButtonReply()" has already been initialized. You cannot pass values the second time you call defaultButtonReply().');
        }
    
        return $this->defaultButtonReply;
    }
    
    public function useThreadsInEmails(array $value = []): \Symfony\Config\OroEmail\Settings\UseThreadsInEmailsConfig
    {
        if (null === $this->useThreadsInEmails) {
            $this->_usedProperties['useThreadsInEmails'] = true;
            $this->useThreadsInEmails = new \Symfony\Config\OroEmail\Settings\UseThreadsInEmailsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "useThreadsInEmails()" has already been initialized. You cannot pass values the second time you call useThreadsInEmails().');
        }
    
        return $this->useThreadsInEmails;
    }
    
    public function minimumInputLength(array $value = []): \Symfony\Config\OroEmail\Settings\MinimumInputLengthConfig
    {
        if (null === $this->minimumInputLength) {
            $this->_usedProperties['minimumInputLength'] = true;
            $this->minimumInputLength = new \Symfony\Config\OroEmail\Settings\MinimumInputLengthConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "minimumInputLength()" has already been initialized. You cannot pass values the second time you call minimumInputLength().');
        }
    
        return $this->minimumInputLength;
    }
    
    public function showRecentEmailsInUserBar(array $value = []): \Symfony\Config\OroEmail\Settings\ShowRecentEmailsInUserBarConfig
    {
        if (null === $this->showRecentEmailsInUserBar) {
            $this->_usedProperties['showRecentEmailsInUserBar'] = true;
            $this->showRecentEmailsInUserBar = new \Symfony\Config\OroEmail\Settings\ShowRecentEmailsInUserBarConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "showRecentEmailsInUserBar()" has already been initialized. You cannot pass values the second time you call showRecentEmailsInUserBar().');
        }
    
        return $this->showRecentEmailsInUserBar;
    }
    
    public function attachmentSyncEnable(array $value = []): \Symfony\Config\OroEmail\Settings\AttachmentSyncEnableConfig
    {
        if (null === $this->attachmentSyncEnable) {
            $this->_usedProperties['attachmentSyncEnable'] = true;
            $this->attachmentSyncEnable = new \Symfony\Config\OroEmail\Settings\AttachmentSyncEnableConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "attachmentSyncEnable()" has already been initialized. You cannot pass values the second time you call attachmentSyncEnable().');
        }
    
        return $this->attachmentSyncEnable;
    }
    
    public function attachmentSyncMaxSize(array $value = []): \Symfony\Config\OroEmail\Settings\AttachmentSyncMaxSizeConfig
    {
        if (null === $this->attachmentSyncMaxSize) {
            $this->_usedProperties['attachmentSyncMaxSize'] = true;
            $this->attachmentSyncMaxSize = new \Symfony\Config\OroEmail\Settings\AttachmentSyncMaxSizeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "attachmentSyncMaxSize()" has already been initialized. You cannot pass values the second time you call attachmentSyncMaxSize().');
        }
    
        return $this->attachmentSyncMaxSize;
    }
    
    public function attachmentMaxSize(array $value = []): \Symfony\Config\OroEmail\Settings\AttachmentMaxSizeConfig
    {
        if (null === $this->attachmentMaxSize) {
            $this->_usedProperties['attachmentMaxSize'] = true;
            $this->attachmentMaxSize = new \Symfony\Config\OroEmail\Settings\AttachmentMaxSizeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "attachmentMaxSize()" has already been initialized. You cannot pass values the second time you call attachmentMaxSize().');
        }
    
        return $this->attachmentMaxSize;
    }
    
    public function attachmentPreviewLimit(array $value = []): \Symfony\Config\OroEmail\Settings\AttachmentPreviewLimitConfig
    {
        if (null === $this->attachmentPreviewLimit) {
            $this->_usedProperties['attachmentPreviewLimit'] = true;
            $this->attachmentPreviewLimit = new \Symfony\Config\OroEmail\Settings\AttachmentPreviewLimitConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "attachmentPreviewLimit()" has already been initialized. You cannot pass values the second time you call attachmentPreviewLimit().');
        }
    
        return $this->attachmentPreviewLimit;
    }
    
    public function sanitizeHtml(array $value = []): \Symfony\Config\OroEmail\Settings\SanitizeHtmlConfig
    {
        if (null === $this->sanitizeHtml) {
            $this->_usedProperties['sanitizeHtml'] = true;
            $this->sanitizeHtml = new \Symfony\Config\OroEmail\Settings\SanitizeHtmlConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sanitizeHtml()" has already been initialized. You cannot pass values the second time you call sanitizeHtml().');
        }
    
        return $this->sanitizeHtml;
    }
    
    public function threadsGrouping(array $value = []): \Symfony\Config\OroEmail\Settings\ThreadsGroupingConfig
    {
        if (null === $this->threadsGrouping) {
            $this->_usedProperties['threadsGrouping'] = true;
            $this->threadsGrouping = new \Symfony\Config\OroEmail\Settings\ThreadsGroupingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "threadsGrouping()" has already been initialized. You cannot pass values the second time you call threadsGrouping().');
        }
    
        return $this->threadsGrouping;
    }
    
    public function smtpSettingsHost(array $value = []): \Symfony\Config\OroEmail\Settings\SmtpSettingsHostConfig
    {
        if (null === $this->smtpSettingsHost) {
            $this->_usedProperties['smtpSettingsHost'] = true;
            $this->smtpSettingsHost = new \Symfony\Config\OroEmail\Settings\SmtpSettingsHostConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "smtpSettingsHost()" has already been initialized. You cannot pass values the second time you call smtpSettingsHost().');
        }
    
        return $this->smtpSettingsHost;
    }
    
    public function smtpSettingsPort(array $value = []): \Symfony\Config\OroEmail\Settings\SmtpSettingsPortConfig
    {
        if (null === $this->smtpSettingsPort) {
            $this->_usedProperties['smtpSettingsPort'] = true;
            $this->smtpSettingsPort = new \Symfony\Config\OroEmail\Settings\SmtpSettingsPortConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "smtpSettingsPort()" has already been initialized. You cannot pass values the second time you call smtpSettingsPort().');
        }
    
        return $this->smtpSettingsPort;
    }
    
    public function smtpSettingsEncryption(array $value = []): \Symfony\Config\OroEmail\Settings\SmtpSettingsEncryptionConfig
    {
        if (null === $this->smtpSettingsEncryption) {
            $this->_usedProperties['smtpSettingsEncryption'] = true;
            $this->smtpSettingsEncryption = new \Symfony\Config\OroEmail\Settings\SmtpSettingsEncryptionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "smtpSettingsEncryption()" has already been initialized. You cannot pass values the second time you call smtpSettingsEncryption().');
        }
    
        return $this->smtpSettingsEncryption;
    }
    
    public function smtpSettingsUsername(array $value = []): \Symfony\Config\OroEmail\Settings\SmtpSettingsUsernameConfig
    {
        if (null === $this->smtpSettingsUsername) {
            $this->_usedProperties['smtpSettingsUsername'] = true;
            $this->smtpSettingsUsername = new \Symfony\Config\OroEmail\Settings\SmtpSettingsUsernameConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "smtpSettingsUsername()" has already been initialized. You cannot pass values the second time you call smtpSettingsUsername().');
        }
    
        return $this->smtpSettingsUsername;
    }
    
    public function smtpSettingsPassword(array $value = []): \Symfony\Config\OroEmail\Settings\SmtpSettingsPasswordConfig
    {
        if (null === $this->smtpSettingsPassword) {
            $this->_usedProperties['smtpSettingsPassword'] = true;
            $this->smtpSettingsPassword = new \Symfony\Config\OroEmail\Settings\SmtpSettingsPasswordConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "smtpSettingsPassword()" has already been initialized. You cannot pass values the second time you call smtpSettingsPassword().');
        }
    
        return $this->smtpSettingsPassword;
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
            $this->featureEnabled = new \Symfony\Config\OroEmail\Settings\FeatureEnabledConfig($value['feature_enabled']);
            unset($value['feature_enabled']);
        }
    
        if (array_key_exists('signature', $value)) {
            $this->_usedProperties['signature'] = true;
            $this->signature = new \Symfony\Config\OroEmail\Settings\SignatureConfig($value['signature']);
            unset($value['signature']);
        }
    
        if (array_key_exists('append_signature', $value)) {
            $this->_usedProperties['appendSignature'] = true;
            $this->appendSignature = new \Symfony\Config\OroEmail\Settings\AppendSignatureConfig($value['append_signature']);
            unset($value['append_signature']);
        }
    
        if (array_key_exists('default_button_reply', $value)) {
            $this->_usedProperties['defaultButtonReply'] = true;
            $this->defaultButtonReply = new \Symfony\Config\OroEmail\Settings\DefaultButtonReplyConfig($value['default_button_reply']);
            unset($value['default_button_reply']);
        }
    
        if (array_key_exists('use_threads_in_emails', $value)) {
            $this->_usedProperties['useThreadsInEmails'] = true;
            $this->useThreadsInEmails = new \Symfony\Config\OroEmail\Settings\UseThreadsInEmailsConfig($value['use_threads_in_emails']);
            unset($value['use_threads_in_emails']);
        }
    
        if (array_key_exists('minimum_input_length', $value)) {
            $this->_usedProperties['minimumInputLength'] = true;
            $this->minimumInputLength = new \Symfony\Config\OroEmail\Settings\MinimumInputLengthConfig($value['minimum_input_length']);
            unset($value['minimum_input_length']);
        }
    
        if (array_key_exists('show_recent_emails_in_user_bar', $value)) {
            $this->_usedProperties['showRecentEmailsInUserBar'] = true;
            $this->showRecentEmailsInUserBar = new \Symfony\Config\OroEmail\Settings\ShowRecentEmailsInUserBarConfig($value['show_recent_emails_in_user_bar']);
            unset($value['show_recent_emails_in_user_bar']);
        }
    
        if (array_key_exists('attachment_sync_enable', $value)) {
            $this->_usedProperties['attachmentSyncEnable'] = true;
            $this->attachmentSyncEnable = new \Symfony\Config\OroEmail\Settings\AttachmentSyncEnableConfig($value['attachment_sync_enable']);
            unset($value['attachment_sync_enable']);
        }
    
        if (array_key_exists('attachment_sync_max_size', $value)) {
            $this->_usedProperties['attachmentSyncMaxSize'] = true;
            $this->attachmentSyncMaxSize = new \Symfony\Config\OroEmail\Settings\AttachmentSyncMaxSizeConfig($value['attachment_sync_max_size']);
            unset($value['attachment_sync_max_size']);
        }
    
        if (array_key_exists('attachment_max_size', $value)) {
            $this->_usedProperties['attachmentMaxSize'] = true;
            $this->attachmentMaxSize = new \Symfony\Config\OroEmail\Settings\AttachmentMaxSizeConfig($value['attachment_max_size']);
            unset($value['attachment_max_size']);
        }
    
        if (array_key_exists('attachment_preview_limit', $value)) {
            $this->_usedProperties['attachmentPreviewLimit'] = true;
            $this->attachmentPreviewLimit = new \Symfony\Config\OroEmail\Settings\AttachmentPreviewLimitConfig($value['attachment_preview_limit']);
            unset($value['attachment_preview_limit']);
        }
    
        if (array_key_exists('sanitize_html', $value)) {
            $this->_usedProperties['sanitizeHtml'] = true;
            $this->sanitizeHtml = new \Symfony\Config\OroEmail\Settings\SanitizeHtmlConfig($value['sanitize_html']);
            unset($value['sanitize_html']);
        }
    
        if (array_key_exists('threads_grouping', $value)) {
            $this->_usedProperties['threadsGrouping'] = true;
            $this->threadsGrouping = new \Symfony\Config\OroEmail\Settings\ThreadsGroupingConfig($value['threads_grouping']);
            unset($value['threads_grouping']);
        }
    
        if (array_key_exists('smtp_settings_host', $value)) {
            $this->_usedProperties['smtpSettingsHost'] = true;
            $this->smtpSettingsHost = new \Symfony\Config\OroEmail\Settings\SmtpSettingsHostConfig($value['smtp_settings_host']);
            unset($value['smtp_settings_host']);
        }
    
        if (array_key_exists('smtp_settings_port', $value)) {
            $this->_usedProperties['smtpSettingsPort'] = true;
            $this->smtpSettingsPort = new \Symfony\Config\OroEmail\Settings\SmtpSettingsPortConfig($value['smtp_settings_port']);
            unset($value['smtp_settings_port']);
        }
    
        if (array_key_exists('smtp_settings_encryption', $value)) {
            $this->_usedProperties['smtpSettingsEncryption'] = true;
            $this->smtpSettingsEncryption = new \Symfony\Config\OroEmail\Settings\SmtpSettingsEncryptionConfig($value['smtp_settings_encryption']);
            unset($value['smtp_settings_encryption']);
        }
    
        if (array_key_exists('smtp_settings_username', $value)) {
            $this->_usedProperties['smtpSettingsUsername'] = true;
            $this->smtpSettingsUsername = new \Symfony\Config\OroEmail\Settings\SmtpSettingsUsernameConfig($value['smtp_settings_username']);
            unset($value['smtp_settings_username']);
        }
    
        if (array_key_exists('smtp_settings_password', $value)) {
            $this->_usedProperties['smtpSettingsPassword'] = true;
            $this->smtpSettingsPassword = new \Symfony\Config\OroEmail\Settings\SmtpSettingsPasswordConfig($value['smtp_settings_password']);
            unset($value['smtp_settings_password']);
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
        if (isset($this->_usedProperties['signature'])) {
            $output['signature'] = $this->signature->toArray();
        }
        if (isset($this->_usedProperties['appendSignature'])) {
            $output['append_signature'] = $this->appendSignature->toArray();
        }
        if (isset($this->_usedProperties['defaultButtonReply'])) {
            $output['default_button_reply'] = $this->defaultButtonReply->toArray();
        }
        if (isset($this->_usedProperties['useThreadsInEmails'])) {
            $output['use_threads_in_emails'] = $this->useThreadsInEmails->toArray();
        }
        if (isset($this->_usedProperties['minimumInputLength'])) {
            $output['minimum_input_length'] = $this->minimumInputLength->toArray();
        }
        if (isset($this->_usedProperties['showRecentEmailsInUserBar'])) {
            $output['show_recent_emails_in_user_bar'] = $this->showRecentEmailsInUserBar->toArray();
        }
        if (isset($this->_usedProperties['attachmentSyncEnable'])) {
            $output['attachment_sync_enable'] = $this->attachmentSyncEnable->toArray();
        }
        if (isset($this->_usedProperties['attachmentSyncMaxSize'])) {
            $output['attachment_sync_max_size'] = $this->attachmentSyncMaxSize->toArray();
        }
        if (isset($this->_usedProperties['attachmentMaxSize'])) {
            $output['attachment_max_size'] = $this->attachmentMaxSize->toArray();
        }
        if (isset($this->_usedProperties['attachmentPreviewLimit'])) {
            $output['attachment_preview_limit'] = $this->attachmentPreviewLimit->toArray();
        }
        if (isset($this->_usedProperties['sanitizeHtml'])) {
            $output['sanitize_html'] = $this->sanitizeHtml->toArray();
        }
        if (isset($this->_usedProperties['threadsGrouping'])) {
            $output['threads_grouping'] = $this->threadsGrouping->toArray();
        }
        if (isset($this->_usedProperties['smtpSettingsHost'])) {
            $output['smtp_settings_host'] = $this->smtpSettingsHost->toArray();
        }
        if (isset($this->_usedProperties['smtpSettingsPort'])) {
            $output['smtp_settings_port'] = $this->smtpSettingsPort->toArray();
        }
        if (isset($this->_usedProperties['smtpSettingsEncryption'])) {
            $output['smtp_settings_encryption'] = $this->smtpSettingsEncryption->toArray();
        }
        if (isset($this->_usedProperties['smtpSettingsUsername'])) {
            $output['smtp_settings_username'] = $this->smtpSettingsUsername->toArray();
        }
        if (isset($this->_usedProperties['smtpSettingsPassword'])) {
            $output['smtp_settings_password'] = $this->smtpSettingsPassword->toArray();
        }
    
        return $output;
    }

}
