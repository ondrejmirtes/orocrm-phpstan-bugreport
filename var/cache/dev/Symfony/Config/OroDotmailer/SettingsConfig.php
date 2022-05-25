<?php

namespace Symfony\Config\OroDotmailer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DatafieldsSyncIntervalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ForceSyncForVirtualFieldsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $datafieldsSyncInterval;
    private $forceSyncForVirtualFields;
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
    
    public function datafieldsSyncInterval(array $value = []): \Symfony\Config\OroDotmailer\Settings\DatafieldsSyncIntervalConfig
    {
        if (null === $this->datafieldsSyncInterval) {
            $this->_usedProperties['datafieldsSyncInterval'] = true;
            $this->datafieldsSyncInterval = new \Symfony\Config\OroDotmailer\Settings\DatafieldsSyncIntervalConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "datafieldsSyncInterval()" has already been initialized. You cannot pass values the second time you call datafieldsSyncInterval().');
        }
    
        return $this->datafieldsSyncInterval;
    }
    
    public function forceSyncForVirtualFields(array $value = []): \Symfony\Config\OroDotmailer\Settings\ForceSyncForVirtualFieldsConfig
    {
        if (null === $this->forceSyncForVirtualFields) {
            $this->_usedProperties['forceSyncForVirtualFields'] = true;
            $this->forceSyncForVirtualFields = new \Symfony\Config\OroDotmailer\Settings\ForceSyncForVirtualFieldsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "forceSyncForVirtualFields()" has already been initialized. You cannot pass values the second time you call forceSyncForVirtualFields().');
        }
    
        return $this->forceSyncForVirtualFields;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('datafields_sync_interval', $value)) {
            $this->_usedProperties['datafieldsSyncInterval'] = true;
            $this->datafieldsSyncInterval = new \Symfony\Config\OroDotmailer\Settings\DatafieldsSyncIntervalConfig($value['datafields_sync_interval']);
            unset($value['datafields_sync_interval']);
        }
    
        if (array_key_exists('force_sync_for_virtual_fields', $value)) {
            $this->_usedProperties['forceSyncForVirtualFields'] = true;
            $this->forceSyncForVirtualFields = new \Symfony\Config\OroDotmailer\Settings\ForceSyncForVirtualFieldsConfig($value['force_sync_for_virtual_fields']);
            unset($value['force_sync_for_virtual_fields']);
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
        if (isset($this->_usedProperties['datafieldsSyncInterval'])) {
            $output['datafields_sync_interval'] = $this->datafieldsSyncInterval->toArray();
        }
        if (isset($this->_usedProperties['forceSyncForVirtualFields'])) {
            $output['force_sync_for_virtual_fields'] = $this->forceSyncForVirtualFields->toArray();
        }
    
        return $output;
    }

}
