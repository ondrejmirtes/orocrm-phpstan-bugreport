<?php

namespace Symfony\Config\OroMicrosoftIntegration;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ClientIdConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ClientSecretConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'TenantConfig.php';

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
    private $tenant;
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
    
    public function clientId(array $value = []): \Symfony\Config\OroMicrosoftIntegration\Settings\ClientIdConfig
    {
        if (null === $this->clientId) {
            $this->_usedProperties['clientId'] = true;
            $this->clientId = new \Symfony\Config\OroMicrosoftIntegration\Settings\ClientIdConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "clientId()" has already been initialized. You cannot pass values the second time you call clientId().');
        }
    
        return $this->clientId;
    }
    
    public function clientSecret(array $value = []): \Symfony\Config\OroMicrosoftIntegration\Settings\ClientSecretConfig
    {
        if (null === $this->clientSecret) {
            $this->_usedProperties['clientSecret'] = true;
            $this->clientSecret = new \Symfony\Config\OroMicrosoftIntegration\Settings\ClientSecretConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "clientSecret()" has already been initialized. You cannot pass values the second time you call clientSecret().');
        }
    
        return $this->clientSecret;
    }
    
    public function tenant(array $value = []): \Symfony\Config\OroMicrosoftIntegration\Settings\TenantConfig
    {
        if (null === $this->tenant) {
            $this->_usedProperties['tenant'] = true;
            $this->tenant = new \Symfony\Config\OroMicrosoftIntegration\Settings\TenantConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "tenant()" has already been initialized. You cannot pass values the second time you call tenant().');
        }
    
        return $this->tenant;
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
            $this->clientId = new \Symfony\Config\OroMicrosoftIntegration\Settings\ClientIdConfig($value['client_id']);
            unset($value['client_id']);
        }
    
        if (array_key_exists('client_secret', $value)) {
            $this->_usedProperties['clientSecret'] = true;
            $this->clientSecret = new \Symfony\Config\OroMicrosoftIntegration\Settings\ClientSecretConfig($value['client_secret']);
            unset($value['client_secret']);
        }
    
        if (array_key_exists('tenant', $value)) {
            $this->_usedProperties['tenant'] = true;
            $this->tenant = new \Symfony\Config\OroMicrosoftIntegration\Settings\TenantConfig($value['tenant']);
            unset($value['tenant']);
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
        if (isset($this->_usedProperties['tenant'])) {
            $output['tenant'] = $this->tenant->toArray();
        }
    
        return $output;
    }

}
