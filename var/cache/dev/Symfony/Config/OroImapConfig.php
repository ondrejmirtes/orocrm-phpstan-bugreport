<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroImap'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroImapConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $userEmailOriginTransport;
    private $settings;
    private $_usedProperties = [];
    
    /**
     * Name of the mailer transport to use for sending emails on behalf of a user. Make sure it is present in "framework.mailer.transports" configuration section with DSN "oro://user-email-origin"
     * @default 'oro_user_email_origin'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userEmailOriginTransport($value): self
    {
        $this->_usedProperties['userEmailOriginTransport'] = true;
        $this->userEmailOriginTransport = $value;
    
        return $this;
    }
    
    public function settings(array $value = []): \Symfony\Config\OroImap\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroImap\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_imap';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('user_email_origin_transport', $value)) {
            $this->_usedProperties['userEmailOriginTransport'] = true;
            $this->userEmailOriginTransport = $value['user_email_origin_transport'];
            unset($value['user_email_origin_transport']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroImap\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['userEmailOriginTransport'])) {
            $output['user_email_origin_transport'] = $this->userEmailOriginTransport;
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
