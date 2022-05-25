<?php

namespace Symfony\Config\OroNavigation;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'MaxItemsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'TitleSuffixConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'TitleDelimiterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'BreadcrumbMenuConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $maxItems;
    private $titleSuffix;
    private $titleDelimiter;
    private $breadcrumbMenu;
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
    
    public function maxItems(array $value = []): \Symfony\Config\OroNavigation\Settings\MaxItemsConfig
    {
        if (null === $this->maxItems) {
            $this->_usedProperties['maxItems'] = true;
            $this->maxItems = new \Symfony\Config\OroNavigation\Settings\MaxItemsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "maxItems()" has already been initialized. You cannot pass values the second time you call maxItems().');
        }
    
        return $this->maxItems;
    }
    
    public function titleSuffix(array $value = []): \Symfony\Config\OroNavigation\Settings\TitleSuffixConfig
    {
        if (null === $this->titleSuffix) {
            $this->_usedProperties['titleSuffix'] = true;
            $this->titleSuffix = new \Symfony\Config\OroNavigation\Settings\TitleSuffixConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "titleSuffix()" has already been initialized. You cannot pass values the second time you call titleSuffix().');
        }
    
        return $this->titleSuffix;
    }
    
    public function titleDelimiter(array $value = []): \Symfony\Config\OroNavigation\Settings\TitleDelimiterConfig
    {
        if (null === $this->titleDelimiter) {
            $this->_usedProperties['titleDelimiter'] = true;
            $this->titleDelimiter = new \Symfony\Config\OroNavigation\Settings\TitleDelimiterConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "titleDelimiter()" has already been initialized. You cannot pass values the second time you call titleDelimiter().');
        }
    
        return $this->titleDelimiter;
    }
    
    public function breadcrumbMenu(array $value = []): \Symfony\Config\OroNavigation\Settings\BreadcrumbMenuConfig
    {
        if (null === $this->breadcrumbMenu) {
            $this->_usedProperties['breadcrumbMenu'] = true;
            $this->breadcrumbMenu = new \Symfony\Config\OroNavigation\Settings\BreadcrumbMenuConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "breadcrumbMenu()" has already been initialized. You cannot pass values the second time you call breadcrumbMenu().');
        }
    
        return $this->breadcrumbMenu;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('max_items', $value)) {
            $this->_usedProperties['maxItems'] = true;
            $this->maxItems = new \Symfony\Config\OroNavigation\Settings\MaxItemsConfig($value['max_items']);
            unset($value['max_items']);
        }
    
        if (array_key_exists('title_suffix', $value)) {
            $this->_usedProperties['titleSuffix'] = true;
            $this->titleSuffix = new \Symfony\Config\OroNavigation\Settings\TitleSuffixConfig($value['title_suffix']);
            unset($value['title_suffix']);
        }
    
        if (array_key_exists('title_delimiter', $value)) {
            $this->_usedProperties['titleDelimiter'] = true;
            $this->titleDelimiter = new \Symfony\Config\OroNavigation\Settings\TitleDelimiterConfig($value['title_delimiter']);
            unset($value['title_delimiter']);
        }
    
        if (array_key_exists('breadcrumb_menu', $value)) {
            $this->_usedProperties['breadcrumbMenu'] = true;
            $this->breadcrumbMenu = new \Symfony\Config\OroNavigation\Settings\BreadcrumbMenuConfig($value['breadcrumb_menu']);
            unset($value['breadcrumb_menu']);
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
        if (isset($this->_usedProperties['maxItems'])) {
            $output['max_items'] = $this->maxItems->toArray();
        }
        if (isset($this->_usedProperties['titleSuffix'])) {
            $output['title_suffix'] = $this->titleSuffix->toArray();
        }
        if (isset($this->_usedProperties['titleDelimiter'])) {
            $output['title_delimiter'] = $this->titleDelimiter->toArray();
        }
        if (isset($this->_usedProperties['breadcrumbMenu'])) {
            $output['breadcrumb_menu'] = $this->breadcrumbMenu->toArray();
        }
    
        return $output;
    }

}
