<?php

namespace Symfony\Config\OroImap;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EnableGoogleImapConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EnableMicrosoftImapConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $enableGoogleImap;
    private $enableMicrosoftImap;
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
    
    public function enableGoogleImap(array $value = []): \Symfony\Config\OroImap\Settings\EnableGoogleImapConfig
    {
        if (null === $this->enableGoogleImap) {
            $this->_usedProperties['enableGoogleImap'] = true;
            $this->enableGoogleImap = new \Symfony\Config\OroImap\Settings\EnableGoogleImapConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "enableGoogleImap()" has already been initialized. You cannot pass values the second time you call enableGoogleImap().');
        }
    
        return $this->enableGoogleImap;
    }
    
    public function enableMicrosoftImap(array $value = []): \Symfony\Config\OroImap\Settings\EnableMicrosoftImapConfig
    {
        if (null === $this->enableMicrosoftImap) {
            $this->_usedProperties['enableMicrosoftImap'] = true;
            $this->enableMicrosoftImap = new \Symfony\Config\OroImap\Settings\EnableMicrosoftImapConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "enableMicrosoftImap()" has already been initialized. You cannot pass values the second time you call enableMicrosoftImap().');
        }
    
        return $this->enableMicrosoftImap;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('enable_google_imap', $value)) {
            $this->_usedProperties['enableGoogleImap'] = true;
            $this->enableGoogleImap = new \Symfony\Config\OroImap\Settings\EnableGoogleImapConfig($value['enable_google_imap']);
            unset($value['enable_google_imap']);
        }
    
        if (array_key_exists('enable_microsoft_imap', $value)) {
            $this->_usedProperties['enableMicrosoftImap'] = true;
            $this->enableMicrosoftImap = new \Symfony\Config\OroImap\Settings\EnableMicrosoftImapConfig($value['enable_microsoft_imap']);
            unset($value['enable_microsoft_imap']);
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
        if (isset($this->_usedProperties['enableGoogleImap'])) {
            $output['enable_google_imap'] = $this->enableGoogleImap->toArray();
        }
        if (isset($this->_usedProperties['enableMicrosoftImap'])) {
            $output['enable_microsoft_imap'] = $this->enableMicrosoftImap->toArray();
        }
    
        return $output;
    }

}
