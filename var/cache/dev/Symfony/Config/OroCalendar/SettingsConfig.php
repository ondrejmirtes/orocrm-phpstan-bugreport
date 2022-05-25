<?php

namespace Symfony\Config\OroCalendar;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'CalendarColorsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EventColorsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $calendarColors;
    private $eventColors;
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
    
    public function calendarColors(array $value = []): \Symfony\Config\OroCalendar\Settings\CalendarColorsConfig
    {
        if (null === $this->calendarColors) {
            $this->_usedProperties['calendarColors'] = true;
            $this->calendarColors = new \Symfony\Config\OroCalendar\Settings\CalendarColorsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "calendarColors()" has already been initialized. You cannot pass values the second time you call calendarColors().');
        }
    
        return $this->calendarColors;
    }
    
    public function eventColors(array $value = []): \Symfony\Config\OroCalendar\Settings\EventColorsConfig
    {
        if (null === $this->eventColors) {
            $this->_usedProperties['eventColors'] = true;
            $this->eventColors = new \Symfony\Config\OroCalendar\Settings\EventColorsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "eventColors()" has already been initialized. You cannot pass values the second time you call eventColors().');
        }
    
        return $this->eventColors;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('calendar_colors', $value)) {
            $this->_usedProperties['calendarColors'] = true;
            $this->calendarColors = new \Symfony\Config\OroCalendar\Settings\CalendarColorsConfig($value['calendar_colors']);
            unset($value['calendar_colors']);
        }
    
        if (array_key_exists('event_colors', $value)) {
            $this->_usedProperties['eventColors'] = true;
            $this->eventColors = new \Symfony\Config\OroCalendar\Settings\EventColorsConfig($value['event_colors']);
            unset($value['event_colors']);
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
        if (isset($this->_usedProperties['calendarColors'])) {
            $output['calendar_colors'] = $this->calendarColors->toArray();
        }
        if (isset($this->_usedProperties['eventColors'])) {
            $output['event_colors'] = $this->eventColors->toArray();
        }
    
        return $output;
    }

}
