<?php

namespace Symfony\Config\OroCurrency;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DefaultCurrencyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'CurrencyDisplayConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $defaultCurrency;
    private $currencyDisplay;
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
    
    public function defaultCurrency(array $value = []): \Symfony\Config\OroCurrency\Settings\DefaultCurrencyConfig
    {
        if (null === $this->defaultCurrency) {
            $this->_usedProperties['defaultCurrency'] = true;
            $this->defaultCurrency = new \Symfony\Config\OroCurrency\Settings\DefaultCurrencyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaultCurrency()" has already been initialized. You cannot pass values the second time you call defaultCurrency().');
        }
    
        return $this->defaultCurrency;
    }
    
    public function currencyDisplay(array $value = []): \Symfony\Config\OroCurrency\Settings\CurrencyDisplayConfig
    {
        if (null === $this->currencyDisplay) {
            $this->_usedProperties['currencyDisplay'] = true;
            $this->currencyDisplay = new \Symfony\Config\OroCurrency\Settings\CurrencyDisplayConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "currencyDisplay()" has already been initialized. You cannot pass values the second time you call currencyDisplay().');
        }
    
        return $this->currencyDisplay;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('default_currency', $value)) {
            $this->_usedProperties['defaultCurrency'] = true;
            $this->defaultCurrency = new \Symfony\Config\OroCurrency\Settings\DefaultCurrencyConfig($value['default_currency']);
            unset($value['default_currency']);
        }
    
        if (array_key_exists('currency_display', $value)) {
            $this->_usedProperties['currencyDisplay'] = true;
            $this->currencyDisplay = new \Symfony\Config\OroCurrency\Settings\CurrencyDisplayConfig($value['currency_display']);
            unset($value['currency_display']);
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
        if (isset($this->_usedProperties['defaultCurrency'])) {
            $output['default_currency'] = $this->defaultCurrency->toArray();
        }
        if (isset($this->_usedProperties['currencyDisplay'])) {
            $output['currency_display'] = $this->currencyDisplay->toArray();
        }
    
        return $output;
    }

}
