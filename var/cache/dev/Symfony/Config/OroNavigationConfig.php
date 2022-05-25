<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroNavigation'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroNavigationConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $jsRoutingFilenamePrefix;
    private $settings;
    private $_usedProperties = [];
    
    /**
     * The prefix in the name of the file with a list of js routes.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function jsRoutingFilenamePrefix($value): self
    {
        $this->_usedProperties['jsRoutingFilenamePrefix'] = true;
        $this->jsRoutingFilenamePrefix = $value;
    
        return $this;
    }
    
    public function settings(array $value = []): \Symfony\Config\OroNavigation\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroNavigation\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_navigation';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('js_routing_filename_prefix', $value)) {
            $this->_usedProperties['jsRoutingFilenamePrefix'] = true;
            $this->jsRoutingFilenamePrefix = $value['js_routing_filename_prefix'];
            unset($value['js_routing_filename_prefix']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroNavigation\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['jsRoutingFilenamePrefix'])) {
            $output['js_routing_filename_prefix'] = $this->jsRoutingFilenamePrefix;
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
