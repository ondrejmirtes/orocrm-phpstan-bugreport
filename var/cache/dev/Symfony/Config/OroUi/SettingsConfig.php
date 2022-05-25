<?php

namespace Symfony\Config\OroUi;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'OrganizationNameConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ApplicationUrlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'NavbarPositionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $organizationName;
    private $applicationUrl;
    private $navbarPosition;
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
    
    public function organizationName(array $value = []): \Symfony\Config\OroUi\Settings\OrganizationNameConfig
    {
        if (null === $this->organizationName) {
            $this->_usedProperties['organizationName'] = true;
            $this->organizationName = new \Symfony\Config\OroUi\Settings\OrganizationNameConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "organizationName()" has already been initialized. You cannot pass values the second time you call organizationName().');
        }
    
        return $this->organizationName;
    }
    
    public function applicationUrl(array $value = []): \Symfony\Config\OroUi\Settings\ApplicationUrlConfig
    {
        if (null === $this->applicationUrl) {
            $this->_usedProperties['applicationUrl'] = true;
            $this->applicationUrl = new \Symfony\Config\OroUi\Settings\ApplicationUrlConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "applicationUrl()" has already been initialized. You cannot pass values the second time you call applicationUrl().');
        }
    
        return $this->applicationUrl;
    }
    
    public function navbarPosition(array $value = []): \Symfony\Config\OroUi\Settings\NavbarPositionConfig
    {
        if (null === $this->navbarPosition) {
            $this->_usedProperties['navbarPosition'] = true;
            $this->navbarPosition = new \Symfony\Config\OroUi\Settings\NavbarPositionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "navbarPosition()" has already been initialized. You cannot pass values the second time you call navbarPosition().');
        }
    
        return $this->navbarPosition;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('organization_name', $value)) {
            $this->_usedProperties['organizationName'] = true;
            $this->organizationName = new \Symfony\Config\OroUi\Settings\OrganizationNameConfig($value['organization_name']);
            unset($value['organization_name']);
        }
    
        if (array_key_exists('application_url', $value)) {
            $this->_usedProperties['applicationUrl'] = true;
            $this->applicationUrl = new \Symfony\Config\OroUi\Settings\ApplicationUrlConfig($value['application_url']);
            unset($value['application_url']);
        }
    
        if (array_key_exists('navbar_position', $value)) {
            $this->_usedProperties['navbarPosition'] = true;
            $this->navbarPosition = new \Symfony\Config\OroUi\Settings\NavbarPositionConfig($value['navbar_position']);
            unset($value['navbar_position']);
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
        if (isset($this->_usedProperties['organizationName'])) {
            $output['organization_name'] = $this->organizationName->toArray();
        }
        if (isset($this->_usedProperties['applicationUrl'])) {
            $output['application_url'] = $this->applicationUrl->toArray();
        }
        if (isset($this->_usedProperties['navbarPosition'])) {
            $output['navbar_position'] = $this->navbarPosition->toArray();
        }
    
        return $output;
    }

}
