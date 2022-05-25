<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroTaskConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $myTasksInCalendar;
    private $_usedProperties = [];
    
    /**
     * Indicates whether My Tasks should be visible in My Calendar or not
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function myTasksInCalendar($value): self
    {
        $this->_usedProperties['myTasksInCalendar'] = true;
        $this->myTasksInCalendar = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_task';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('my_tasks_in_calendar', $value)) {
            $this->_usedProperties['myTasksInCalendar'] = true;
            $this->myTasksInCalendar = $value['my_tasks_in_calendar'];
            unset($value['my_tasks_in_calendar']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['myTasksInCalendar'])) {
            $output['my_tasks_in_calendar'] = $this->myTasksInCalendar;
        }
    
        return $output;
    }

}
