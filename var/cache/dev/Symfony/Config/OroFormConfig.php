<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroForm'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroForm'.\DIRECTORY_SEPARATOR.'HtmlPurifierModesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroFormConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $settings;
    private $htmlPurifierModes;
    private $_usedProperties = [];
    
    public function settings(array $value = []): \Symfony\Config\OroForm\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroForm\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function htmlPurifierModes(string $default, array $value = []): \Symfony\Config\OroForm\HtmlPurifierModesConfig
    {
        if (!isset($this->htmlPurifierModes[$default])) {
            $this->_usedProperties['htmlPurifierModes'] = true;
    
            return $this->htmlPurifierModes[$default] = new \Symfony\Config\OroForm\HtmlPurifierModesConfig($value);
        }
        if ([] === $value) {
            return $this->htmlPurifierModes[$default];
        }
    
        throw new InvalidConfigurationException('The node created by "htmlPurifierModes()" has already been initialized. You cannot pass values the second time you call htmlPurifierModes().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_form';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroForm\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if (array_key_exists('html_purifier_modes', $value)) {
            $this->_usedProperties['htmlPurifierModes'] = true;
            $this->htmlPurifierModes = array_map(function ($v) { return new \Symfony\Config\OroForm\HtmlPurifierModesConfig($v); }, $value['html_purifier_modes']);
            unset($value['html_purifier_modes']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
        if (isset($this->_usedProperties['htmlPurifierModes'])) {
            $output['html_purifier_modes'] = array_map(function ($v) { return $v->toArray(); }, $this->htmlPurifierModes);
        }
    
        return $output;
    }

}
