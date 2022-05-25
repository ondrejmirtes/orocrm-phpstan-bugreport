<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroCalendar'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroCalendarConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $enabledSystemCalendar;
    private $settings;
    private $_usedProperties = [];
    
    /**
     * Indicates whether Organization and/or System Calendars are enabled or not.
    Possible values:
        true         - both organization and system calendars are enabled
        false        - both organization and system calendars are disabled
        organization - only organization calendar is enabled
        system       - only system calendar is enabled
    
     * @default 'system'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabledSystemCalendar($value): self
    {
        $this->_usedProperties['enabledSystemCalendar'] = true;
        $this->enabledSystemCalendar = $value;
    
        return $this;
    }
    
    public function settings(array $value = []): \Symfony\Config\OroCalendar\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroCalendar\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_calendar';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('enabled_system_calendar', $value)) {
            $this->_usedProperties['enabledSystemCalendar'] = true;
            $this->enabledSystemCalendar = $value['enabled_system_calendar'];
            unset($value['enabled_system_calendar']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroCalendar\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabledSystemCalendar'])) {
            $output['enabled_system_calendar'] = $this->enabledSystemCalendar;
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
