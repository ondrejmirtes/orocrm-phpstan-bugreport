<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroTranslation'.\DIRECTORY_SEPARATOR.'JsTranslationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroTranslation'.\DIRECTORY_SEPARATOR.'TranslationServiceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroTranslation'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroTranslationConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $jsTranslation;
    private $translationService;
    private $packageNames;
    private $debugTranslator;
    private $locales;
    private $defaultRequired;
    private $managerRegistry;
    private $templating;
    private $settings;
    private $_usedProperties = [];
    
    public function jsTranslation(array $value = []): \Symfony\Config\OroTranslation\JsTranslationConfig
    {
        if (null === $this->jsTranslation) {
            $this->_usedProperties['jsTranslation'] = true;
            $this->jsTranslation = new \Symfony\Config\OroTranslation\JsTranslationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "jsTranslation()" has already been initialized. You cannot pass values the second time you call jsTranslation().');
        }
    
        return $this->jsTranslation;
    }
    
    public function translationService(array $value = []): \Symfony\Config\OroTranslation\TranslationServiceConfig
    {
        if (null === $this->translationService) {
            $this->_usedProperties['translationService'] = true;
            $this->translationService = new \Symfony\Config\OroTranslation\TranslationServiceConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "translationService()" has already been initialized. You cannot pass values the second time you call translationService().');
        }
    
        return $this->translationService;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function packageNames($value): self
    {
        $this->_usedProperties['packageNames'] = true;
        $this->packageNames = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function debugTranslator($value): self
    {
        $this->_usedProperties['debugTranslator'] = true;
        $this->debugTranslator = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function locales($value): self
    {
        $this->_usedProperties['locales'] = true;
        $this->locales = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function defaultRequired($value): self
    {
        $this->_usedProperties['defaultRequired'] = true;
        $this->defaultRequired = $value;
    
        return $this;
    }
    
    /**
     * @default 'doctrine'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function managerRegistry($value): self
    {
        $this->_usedProperties['managerRegistry'] = true;
        $this->managerRegistry = $value;
    
        return $this;
    }
    
    /**
     * @default '@OroTranslation/default.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function templating($value): self
    {
        $this->_usedProperties['templating'] = true;
        $this->templating = $value;
    
        return $this;
    }
    
    public function settings(array $value = []): \Symfony\Config\OroTranslation\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroTranslation\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_translation';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('js_translation', $value)) {
            $this->_usedProperties['jsTranslation'] = true;
            $this->jsTranslation = new \Symfony\Config\OroTranslation\JsTranslationConfig($value['js_translation']);
            unset($value['js_translation']);
        }
    
        if (array_key_exists('translation_service', $value)) {
            $this->_usedProperties['translationService'] = true;
            $this->translationService = new \Symfony\Config\OroTranslation\TranslationServiceConfig($value['translation_service']);
            unset($value['translation_service']);
        }
    
        if (array_key_exists('package_names', $value)) {
            $this->_usedProperties['packageNames'] = true;
            $this->packageNames = $value['package_names'];
            unset($value['package_names']);
        }
    
        if (array_key_exists('debug_translator', $value)) {
            $this->_usedProperties['debugTranslator'] = true;
            $this->debugTranslator = $value['debug_translator'];
            unset($value['debug_translator']);
        }
    
        if (array_key_exists('locales', $value)) {
            $this->_usedProperties['locales'] = true;
            $this->locales = $value['locales'];
            unset($value['locales']);
        }
    
        if (array_key_exists('default_required', $value)) {
            $this->_usedProperties['defaultRequired'] = true;
            $this->defaultRequired = $value['default_required'];
            unset($value['default_required']);
        }
    
        if (array_key_exists('manager_registry', $value)) {
            $this->_usedProperties['managerRegistry'] = true;
            $this->managerRegistry = $value['manager_registry'];
            unset($value['manager_registry']);
        }
    
        if (array_key_exists('templating', $value)) {
            $this->_usedProperties['templating'] = true;
            $this->templating = $value['templating'];
            unset($value['templating']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroTranslation\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['jsTranslation'])) {
            $output['js_translation'] = $this->jsTranslation->toArray();
        }
        if (isset($this->_usedProperties['translationService'])) {
            $output['translation_service'] = $this->translationService->toArray();
        }
        if (isset($this->_usedProperties['packageNames'])) {
            $output['package_names'] = $this->packageNames;
        }
        if (isset($this->_usedProperties['debugTranslator'])) {
            $output['debug_translator'] = $this->debugTranslator;
        }
        if (isset($this->_usedProperties['locales'])) {
            $output['locales'] = $this->locales;
        }
        if (isset($this->_usedProperties['defaultRequired'])) {
            $output['default_required'] = $this->defaultRequired;
        }
        if (isset($this->_usedProperties['managerRegistry'])) {
            $output['manager_registry'] = $this->managerRegistry;
        }
        if (isset($this->_usedProperties['templating'])) {
            $output['templating'] = $this->templating;
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
