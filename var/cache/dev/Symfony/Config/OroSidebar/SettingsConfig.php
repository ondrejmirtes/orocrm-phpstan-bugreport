<?php

namespace Symfony\Config\OroSidebar;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SidebarLeftActiveConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SidebarRightActiveConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $sidebarLeftActive;
    private $sidebarRightActive;
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
    
    public function sidebarLeftActive(array $value = []): \Symfony\Config\OroSidebar\Settings\SidebarLeftActiveConfig
    {
        if (null === $this->sidebarLeftActive) {
            $this->_usedProperties['sidebarLeftActive'] = true;
            $this->sidebarLeftActive = new \Symfony\Config\OroSidebar\Settings\SidebarLeftActiveConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sidebarLeftActive()" has already been initialized. You cannot pass values the second time you call sidebarLeftActive().');
        }
    
        return $this->sidebarLeftActive;
    }
    
    public function sidebarRightActive(array $value = []): \Symfony\Config\OroSidebar\Settings\SidebarRightActiveConfig
    {
        if (null === $this->sidebarRightActive) {
            $this->_usedProperties['sidebarRightActive'] = true;
            $this->sidebarRightActive = new \Symfony\Config\OroSidebar\Settings\SidebarRightActiveConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sidebarRightActive()" has already been initialized. You cannot pass values the second time you call sidebarRightActive().');
        }
    
        return $this->sidebarRightActive;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('sidebar_left_active', $value)) {
            $this->_usedProperties['sidebarLeftActive'] = true;
            $this->sidebarLeftActive = new \Symfony\Config\OroSidebar\Settings\SidebarLeftActiveConfig($value['sidebar_left_active']);
            unset($value['sidebar_left_active']);
        }
    
        if (array_key_exists('sidebar_right_active', $value)) {
            $this->_usedProperties['sidebarRightActive'] = true;
            $this->sidebarRightActive = new \Symfony\Config\OroSidebar\Settings\SidebarRightActiveConfig($value['sidebar_right_active']);
            unset($value['sidebar_right_active']);
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
        if (isset($this->_usedProperties['sidebarLeftActive'])) {
            $output['sidebar_left_active'] = $this->sidebarLeftActive->toArray();
        }
        if (isset($this->_usedProperties['sidebarRightActive'])) {
            $output['sidebar_right_active'] = $this->sidebarRightActive->toArray();
        }
    
        return $output;
    }

}
