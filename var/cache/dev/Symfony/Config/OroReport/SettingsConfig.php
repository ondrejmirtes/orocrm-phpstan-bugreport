<?php

namespace Symfony\Config\OroReport;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DisplaySqlQueryConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $displaySqlQuery;
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
    
    public function displaySqlQuery(array $value = []): \Symfony\Config\OroReport\Settings\DisplaySqlQueryConfig
    {
        if (null === $this->displaySqlQuery) {
            $this->_usedProperties['displaySqlQuery'] = true;
            $this->displaySqlQuery = new \Symfony\Config\OroReport\Settings\DisplaySqlQueryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "displaySqlQuery()" has already been initialized. You cannot pass values the second time you call displaySqlQuery().');
        }
    
        return $this->displaySqlQuery;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('display_sql_query', $value)) {
            $this->_usedProperties['displaySqlQuery'] = true;
            $this->displaySqlQuery = new \Symfony\Config\OroReport\Settings\DisplaySqlQueryConfig($value['display_sql_query']);
            unset($value['display_sql_query']);
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
        if (isset($this->_usedProperties['displaySqlQuery'])) {
            $output['display_sql_query'] = $this->displaySqlQuery->toArray();
        }
    
        return $output;
    }

}
