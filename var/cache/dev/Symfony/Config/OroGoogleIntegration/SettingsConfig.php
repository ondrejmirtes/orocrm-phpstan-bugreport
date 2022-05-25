<?php

namespace Symfony\Config\OroGoogleIntegration;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ClientIdConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ClientSecretConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'GoogleApiKeyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EnableSsoConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SsoDomainsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $clientId;
    private $clientSecret;
    private $googleApiKey;
    private $enableSso;
    private $ssoDomains;
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
    
    public function clientId(array $value = []): \Symfony\Config\OroGoogleIntegration\Settings\ClientIdConfig
    {
        if (null === $this->clientId) {
            $this->_usedProperties['clientId'] = true;
            $this->clientId = new \Symfony\Config\OroGoogleIntegration\Settings\ClientIdConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "clientId()" has already been initialized. You cannot pass values the second time you call clientId().');
        }
    
        return $this->clientId;
    }
    
    public function clientSecret(array $value = []): \Symfony\Config\OroGoogleIntegration\Settings\ClientSecretConfig
    {
        if (null === $this->clientSecret) {
            $this->_usedProperties['clientSecret'] = true;
            $this->clientSecret = new \Symfony\Config\OroGoogleIntegration\Settings\ClientSecretConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "clientSecret()" has already been initialized. You cannot pass values the second time you call clientSecret().');
        }
    
        return $this->clientSecret;
    }
    
    public function googleApiKey(array $value = []): \Symfony\Config\OroGoogleIntegration\Settings\GoogleApiKeyConfig
    {
        if (null === $this->googleApiKey) {
            $this->_usedProperties['googleApiKey'] = true;
            $this->googleApiKey = new \Symfony\Config\OroGoogleIntegration\Settings\GoogleApiKeyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "googleApiKey()" has already been initialized. You cannot pass values the second time you call googleApiKey().');
        }
    
        return $this->googleApiKey;
    }
    
    public function enableSso(array $value = []): \Symfony\Config\OroGoogleIntegration\Settings\EnableSsoConfig
    {
        if (null === $this->enableSso) {
            $this->_usedProperties['enableSso'] = true;
            $this->enableSso = new \Symfony\Config\OroGoogleIntegration\Settings\EnableSsoConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "enableSso()" has already been initialized. You cannot pass values the second time you call enableSso().');
        }
    
        return $this->enableSso;
    }
    
    public function ssoDomains(array $value = []): \Symfony\Config\OroGoogleIntegration\Settings\SsoDomainsConfig
    {
        if (null === $this->ssoDomains) {
            $this->_usedProperties['ssoDomains'] = true;
            $this->ssoDomains = new \Symfony\Config\OroGoogleIntegration\Settings\SsoDomainsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "ssoDomains()" has already been initialized. You cannot pass values the second time you call ssoDomains().');
        }
    
        return $this->ssoDomains;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('client_id', $value)) {
            $this->_usedProperties['clientId'] = true;
            $this->clientId = new \Symfony\Config\OroGoogleIntegration\Settings\ClientIdConfig($value['client_id']);
            unset($value['client_id']);
        }
    
        if (array_key_exists('client_secret', $value)) {
            $this->_usedProperties['clientSecret'] = true;
            $this->clientSecret = new \Symfony\Config\OroGoogleIntegration\Settings\ClientSecretConfig($value['client_secret']);
            unset($value['client_secret']);
        }
    
        if (array_key_exists('google_api_key', $value)) {
            $this->_usedProperties['googleApiKey'] = true;
            $this->googleApiKey = new \Symfony\Config\OroGoogleIntegration\Settings\GoogleApiKeyConfig($value['google_api_key']);
            unset($value['google_api_key']);
        }
    
        if (array_key_exists('enable_sso', $value)) {
            $this->_usedProperties['enableSso'] = true;
            $this->enableSso = new \Symfony\Config\OroGoogleIntegration\Settings\EnableSsoConfig($value['enable_sso']);
            unset($value['enable_sso']);
        }
    
        if (array_key_exists('sso_domains', $value)) {
            $this->_usedProperties['ssoDomains'] = true;
            $this->ssoDomains = new \Symfony\Config\OroGoogleIntegration\Settings\SsoDomainsConfig($value['sso_domains']);
            unset($value['sso_domains']);
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
        if (isset($this->_usedProperties['clientId'])) {
            $output['client_id'] = $this->clientId->toArray();
        }
        if (isset($this->_usedProperties['clientSecret'])) {
            $output['client_secret'] = $this->clientSecret->toArray();
        }
        if (isset($this->_usedProperties['googleApiKey'])) {
            $output['google_api_key'] = $this->googleApiKey->toArray();
        }
        if (isset($this->_usedProperties['enableSso'])) {
            $output['enable_sso'] = $this->enableSso->toArray();
        }
        if (isset($this->_usedProperties['ssoDomains'])) {
            $output['sso_domains'] = $this->ssoDomains->toArray();
        }
    
        return $output;
    }

}
