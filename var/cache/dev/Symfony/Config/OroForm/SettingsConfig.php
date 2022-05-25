<?php

namespace Symfony\Config\OroForm;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'WysiwygEnabledConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $wysiwygEnabled;
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
    
    public function wysiwygEnabled(array $value = []): \Symfony\Config\OroForm\Settings\WysiwygEnabledConfig
    {
        if (null === $this->wysiwygEnabled) {
            $this->_usedProperties['wysiwygEnabled'] = true;
            $this->wysiwygEnabled = new \Symfony\Config\OroForm\Settings\WysiwygEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "wysiwygEnabled()" has already been initialized. You cannot pass values the second time you call wysiwygEnabled().');
        }
    
        return $this->wysiwygEnabled;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('wysiwyg_enabled', $value)) {
            $this->_usedProperties['wysiwygEnabled'] = true;
            $this->wysiwygEnabled = new \Symfony\Config\OroForm\Settings\WysiwygEnabledConfig($value['wysiwyg_enabled']);
            unset($value['wysiwyg_enabled']);
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
        if (isset($this->_usedProperties['wysiwygEnabled'])) {
            $output['wysiwyg_enabled'] = $this->wysiwygEnabled->toArray();
        }
    
        return $output;
    }

}
