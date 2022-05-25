<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroTheme'.\DIRECTORY_SEPARATOR.'ThemesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroThemeConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $themes;
    private $activeTheme;
    private $_usedProperties = [];
    
    public function themes(string $name, array $value = []): \Symfony\Config\OroTheme\ThemesConfig
    {
        if (!isset($this->themes[$name])) {
            $this->_usedProperties['themes'] = true;
    
            return $this->themes[$name] = new \Symfony\Config\OroTheme\ThemesConfig($value);
        }
        if ([] === $value) {
            return $this->themes[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "themes()" has already been initialized. You cannot pass values the second time you call themes().');
    }
    
    /**
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
        return 'oro_theme';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('themes', $value)) {
            $this->_usedProperties['themes'] = true;
            $this->themes = array_map(function ($v) { return new \Symfony\Config\OroTheme\ThemesConfig($v); }, $value['themes']);
            unset($value['themes']);
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
        if (isset($this->_usedProperties['themes'])) {
            $output['themes'] = array_map(function ($v) { return $v->toArray(); }, $this->themes);
        }
        if (isset($this->_usedProperties['activeTheme'])) {
            $output['active_theme'] = $this->activeTheme;
        }
    
        return $output;
    }

}
