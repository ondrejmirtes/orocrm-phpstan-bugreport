<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroLayout'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroLayout'.\DIRECTORY_SEPARATOR.'ViewConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroLayout'.\DIRECTORY_SEPARATOR.'TemplatingConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroLayoutConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $settings;
    private $view;
    private $enabledThemes;
    private $templating;
    private $debug;
    private $activeTheme;
    private $_usedProperties = [];
    
    public function settings(array $value = []): \Symfony\Config\OroLayout\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroLayout\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function view(array $value = []): \Symfony\Config\OroLayout\ViewConfig
    {
        if (null === $this->view) {
            $this->_usedProperties['view'] = true;
            $this->view = new \Symfony\Config\OroLayout\ViewConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "view()" has already been initialized. You cannot pass values the second time you call view().');
        }
    
        return $this->view;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function enabledThemes($value): self
    {
        $this->_usedProperties['enabledThemes'] = true;
        $this->enabledThemes = $value;
    
        return $this;
    }
    
    public function templating(array $value = []): \Symfony\Config\OroLayout\TemplatingConfig
    {
        if (null === $this->templating) {
            $this->_usedProperties['templating'] = true;
            $this->templating = new \Symfony\Config\OroLayout\TemplatingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "templating()" has already been initialized. You cannot pass values the second time you call templating().');
        }
    
        return $this->templating;
    }
    
    /**
     * Enable layout debug mode. Allows to switch theme using request parameter _theme.
     * @default '%kernel.debug%'
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): self
    {
        $this->_usedProperties['debug'] = true;
        $this->debug = $value;
    
        return $this;
    }
    
    /**
     * The identifier of the theme that should be used by default
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function activeTheme($value): self
    {
        $this->_usedProperties['activeTheme'] = true;
        $this->activeTheme = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_layout';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroLayout\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if (array_key_exists('view', $value)) {
            $this->_usedProperties['view'] = true;
            $this->view = new \Symfony\Config\OroLayout\ViewConfig($value['view']);
            unset($value['view']);
        }
    
        if (array_key_exists('enabled_themes', $value)) {
            $this->_usedProperties['enabledThemes'] = true;
            $this->enabledThemes = $value['enabled_themes'];
            unset($value['enabled_themes']);
        }
    
        if (array_key_exists('templating', $value)) {
            $this->_usedProperties['templating'] = true;
            $this->templating = new \Symfony\Config\OroLayout\TemplatingConfig($value['templating']);
            unset($value['templating']);
        }
    
        if (array_key_exists('debug', $value)) {
            $this->_usedProperties['debug'] = true;
            $this->debug = $value['debug'];
            unset($value['debug']);
        }
    
        if (array_key_exists('active_theme', $value)) {
            $this->_usedProperties['activeTheme'] = true;
            $this->activeTheme = $value['active_theme'];
            unset($value['active_theme']);
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
        if (isset($this->_usedProperties['view'])) {
            $output['view'] = $this->view->toArray();
        }
        if (isset($this->_usedProperties['enabledThemes'])) {
            $output['enabled_themes'] = $this->enabledThemes;
        }
        if (isset($this->_usedProperties['templating'])) {
            $output['templating'] = $this->templating->toArray();
        }
        if (isset($this->_usedProperties['debug'])) {
            $output['debug'] = $this->debug;
        }
        if (isset($this->_usedProperties['activeTheme'])) {
            $output['active_theme'] = $this->activeTheme;
        }
    
        return $output;
    }

}
