<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroLocale'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroLocaleConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $formattingCode;
    private $language;
    private $settings;
    private $_usedProperties = [];
    
    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formattingCode($value): self
    {
        $this->_usedProperties['formattingCode'] = true;
        $this->formattingCode = $value;
    
        return $this;
    }
    
    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function language($value): self
    {
        $this->_usedProperties['language'] = true;
        $this->language = $value;
    
        return $this;
    }
    
    public function settings(array $value = []): \Symfony\Config\OroLocale\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroLocale\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_locale';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('formatting_code', $value)) {
            $this->_usedProperties['formattingCode'] = true;
            $this->formattingCode = $value['formatting_code'];
            unset($value['formatting_code']);
        }
    
        if (array_key_exists('language', $value)) {
            $this->_usedProperties['language'] = true;
            $this->language = $value['language'];
            unset($value['language']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroLocale\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['formattingCode'])) {
            $output['formatting_code'] = $this->formattingCode;
        }
        if (isset($this->_usedProperties['language'])) {
            $output['language'] = $this->language;
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
