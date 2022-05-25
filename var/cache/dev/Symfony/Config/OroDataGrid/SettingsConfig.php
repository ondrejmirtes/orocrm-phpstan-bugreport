<?php

namespace Symfony\Config\OroDataGrid;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DefaultPerPageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'FullScreenLayoutEnabledConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'RowLinkEnabledConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $defaultPerPage;
    private $fullScreenLayoutEnabled;
    private $rowLinkEnabled;
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
    
    public function defaultPerPage(array $value = []): \Symfony\Config\OroDataGrid\Settings\DefaultPerPageConfig
    {
        if (null === $this->defaultPerPage) {
            $this->_usedProperties['defaultPerPage'] = true;
            $this->defaultPerPage = new \Symfony\Config\OroDataGrid\Settings\DefaultPerPageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaultPerPage()" has already been initialized. You cannot pass values the second time you call defaultPerPage().');
        }
    
        return $this->defaultPerPage;
    }
    
    public function fullScreenLayoutEnabled(array $value = []): \Symfony\Config\OroDataGrid\Settings\FullScreenLayoutEnabledConfig
    {
        if (null === $this->fullScreenLayoutEnabled) {
            $this->_usedProperties['fullScreenLayoutEnabled'] = true;
            $this->fullScreenLayoutEnabled = new \Symfony\Config\OroDataGrid\Settings\FullScreenLayoutEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "fullScreenLayoutEnabled()" has already been initialized. You cannot pass values the second time you call fullScreenLayoutEnabled().');
        }
    
        return $this->fullScreenLayoutEnabled;
    }
    
    public function rowLinkEnabled(array $value = []): \Symfony\Config\OroDataGrid\Settings\RowLinkEnabledConfig
    {
        if (null === $this->rowLinkEnabled) {
            $this->_usedProperties['rowLinkEnabled'] = true;
            $this->rowLinkEnabled = new \Symfony\Config\OroDataGrid\Settings\RowLinkEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "rowLinkEnabled()" has already been initialized. You cannot pass values the second time you call rowLinkEnabled().');
        }
    
        return $this->rowLinkEnabled;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('default_per_page', $value)) {
            $this->_usedProperties['defaultPerPage'] = true;
            $this->defaultPerPage = new \Symfony\Config\OroDataGrid\Settings\DefaultPerPageConfig($value['default_per_page']);
            unset($value['default_per_page']);
        }
    
        if (array_key_exists('full_screen_layout_enabled', $value)) {
            $this->_usedProperties['fullScreenLayoutEnabled'] = true;
            $this->fullScreenLayoutEnabled = new \Symfony\Config\OroDataGrid\Settings\FullScreenLayoutEnabledConfig($value['full_screen_layout_enabled']);
            unset($value['full_screen_layout_enabled']);
        }
    
        if (array_key_exists('row_link_enabled', $value)) {
            $this->_usedProperties['rowLinkEnabled'] = true;
            $this->rowLinkEnabled = new \Symfony\Config\OroDataGrid\Settings\RowLinkEnabledConfig($value['row_link_enabled']);
            unset($value['row_link_enabled']);
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
        if (isset($this->_usedProperties['defaultPerPage'])) {
            $output['default_per_page'] = $this->defaultPerPage->toArray();
        }
        if (isset($this->_usedProperties['fullScreenLayoutEnabled'])) {
            $output['full_screen_layout_enabled'] = $this->fullScreenLayoutEnabled->toArray();
        }
        if (isset($this->_usedProperties['rowLinkEnabled'])) {
            $output['row_link_enabled'] = $this->rowLinkEnabled->toArray();
        }
    
        return $output;
    }

}
