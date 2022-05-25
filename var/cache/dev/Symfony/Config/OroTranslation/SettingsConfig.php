<?php

namespace Symfony\Config\OroTranslation;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'InstalledTranslationMetaConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $installedTranslationMeta;
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
    
    public function installedTranslationMeta(array $value = []): \Symfony\Config\OroTranslation\Settings\InstalledTranslationMetaConfig
    {
        if (null === $this->installedTranslationMeta) {
            $this->_usedProperties['installedTranslationMeta'] = true;
            $this->installedTranslationMeta = new \Symfony\Config\OroTranslation\Settings\InstalledTranslationMetaConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "installedTranslationMeta()" has already been initialized. You cannot pass values the second time you call installedTranslationMeta().');
        }
    
        return $this->installedTranslationMeta;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('installed_translation_meta', $value)) {
            $this->_usedProperties['installedTranslationMeta'] = true;
            $this->installedTranslationMeta = new \Symfony\Config\OroTranslation\Settings\InstalledTranslationMetaConfig($value['installed_translation_meta']);
            unset($value['installed_translation_meta']);
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
        if (isset($this->_usedProperties['installedTranslationMeta'])) {
            $output['installed_translation_meta'] = $this->installedTranslationMeta->toArray();
        }
    
        return $output;
    }

}
