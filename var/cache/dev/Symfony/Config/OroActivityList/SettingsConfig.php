<?php

namespace Symfony\Config\OroActivityList;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SortingFieldConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SortingDirectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PerPageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'GroupingConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $sortingField;
    private $sortingDirection;
    private $perPage;
    private $grouping;
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
    
    public function sortingField(array $value = []): \Symfony\Config\OroActivityList\Settings\SortingFieldConfig
    {
        if (null === $this->sortingField) {
            $this->_usedProperties['sortingField'] = true;
            $this->sortingField = new \Symfony\Config\OroActivityList\Settings\SortingFieldConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sortingField()" has already been initialized. You cannot pass values the second time you call sortingField().');
        }
    
        return $this->sortingField;
    }
    
    public function sortingDirection(array $value = []): \Symfony\Config\OroActivityList\Settings\SortingDirectionConfig
    {
        if (null === $this->sortingDirection) {
            $this->_usedProperties['sortingDirection'] = true;
            $this->sortingDirection = new \Symfony\Config\OroActivityList\Settings\SortingDirectionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sortingDirection()" has already been initialized. You cannot pass values the second time you call sortingDirection().');
        }
    
        return $this->sortingDirection;
    }
    
    public function perPage(array $value = []): \Symfony\Config\OroActivityList\Settings\PerPageConfig
    {
        if (null === $this->perPage) {
            $this->_usedProperties['perPage'] = true;
            $this->perPage = new \Symfony\Config\OroActivityList\Settings\PerPageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "perPage()" has already been initialized. You cannot pass values the second time you call perPage().');
        }
    
        return $this->perPage;
    }
    
    public function grouping(array $value = []): \Symfony\Config\OroActivityList\Settings\GroupingConfig
    {
        if (null === $this->grouping) {
            $this->_usedProperties['grouping'] = true;
            $this->grouping = new \Symfony\Config\OroActivityList\Settings\GroupingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "grouping()" has already been initialized. You cannot pass values the second time you call grouping().');
        }
    
        return $this->grouping;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('sorting_field', $value)) {
            $this->_usedProperties['sortingField'] = true;
            $this->sortingField = new \Symfony\Config\OroActivityList\Settings\SortingFieldConfig($value['sorting_field']);
            unset($value['sorting_field']);
        }
    
        if (array_key_exists('sorting_direction', $value)) {
            $this->_usedProperties['sortingDirection'] = true;
            $this->sortingDirection = new \Symfony\Config\OroActivityList\Settings\SortingDirectionConfig($value['sorting_direction']);
            unset($value['sorting_direction']);
        }
    
        if (array_key_exists('per_page', $value)) {
            $this->_usedProperties['perPage'] = true;
            $this->perPage = new \Symfony\Config\OroActivityList\Settings\PerPageConfig($value['per_page']);
            unset($value['per_page']);
        }
    
        if (array_key_exists('grouping', $value)) {
            $this->_usedProperties['grouping'] = true;
            $this->grouping = new \Symfony\Config\OroActivityList\Settings\GroupingConfig($value['grouping']);
            unset($value['grouping']);
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
        if (isset($this->_usedProperties['sortingField'])) {
            $output['sorting_field'] = $this->sortingField->toArray();
        }
        if (isset($this->_usedProperties['sortingDirection'])) {
            $output['sorting_direction'] = $this->sortingDirection->toArray();
        }
        if (isset($this->_usedProperties['perPage'])) {
            $output['per_page'] = $this->perPage->toArray();
        }
        if (isset($this->_usedProperties['grouping'])) {
            $output['grouping'] = $this->grouping->toArray();
        }
    
        return $output;
    }

}
