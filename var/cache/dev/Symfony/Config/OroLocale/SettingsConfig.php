<?php

namespace Symfony\Config\OroLocale;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'CountryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'CurrencyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'TimezoneConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'FormatAddressByAddressCountryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'QwertyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'QuarterStartConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'TemperatureUnitConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'WindSpeedUnitConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'EnabledLocalizationsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'DefaultLocalizationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $country;
    private $currency;
    private $timezone;
    private $formatAddressByAddressCountry;
    private $qwerty;
    private $quarterStart;
    private $temperatureUnit;
    private $windSpeedUnit;
    private $enabledLocalizations;
    private $defaultLocalization;
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
    
    public function country(array $value = []): \Symfony\Config\OroLocale\Settings\CountryConfig
    {
        if (null === $this->country) {
            $this->_usedProperties['country'] = true;
            $this->country = new \Symfony\Config\OroLocale\Settings\CountryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "country()" has already been initialized. You cannot pass values the second time you call country().');
        }
    
        return $this->country;
    }
    
    public function currency(array $value = []): \Symfony\Config\OroLocale\Settings\CurrencyConfig
    {
        if (null === $this->currency) {
            $this->_usedProperties['currency'] = true;
            $this->currency = new \Symfony\Config\OroLocale\Settings\CurrencyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "currency()" has already been initialized. You cannot pass values the second time you call currency().');
        }
    
        return $this->currency;
    }
    
    public function timezone(array $value = []): \Symfony\Config\OroLocale\Settings\TimezoneConfig
    {
        if (null === $this->timezone) {
            $this->_usedProperties['timezone'] = true;
            $this->timezone = new \Symfony\Config\OroLocale\Settings\TimezoneConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "timezone()" has already been initialized. You cannot pass values the second time you call timezone().');
        }
    
        return $this->timezone;
    }
    
    public function formatAddressByAddressCountry(array $value = []): \Symfony\Config\OroLocale\Settings\FormatAddressByAddressCountryConfig
    {
        if (null === $this->formatAddressByAddressCountry) {
            $this->_usedProperties['formatAddressByAddressCountry'] = true;
            $this->formatAddressByAddressCountry = new \Symfony\Config\OroLocale\Settings\FormatAddressByAddressCountryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "formatAddressByAddressCountry()" has already been initialized. You cannot pass values the second time you call formatAddressByAddressCountry().');
        }
    
        return $this->formatAddressByAddressCountry;
    }
    
    public function qwerty(array $value = []): \Symfony\Config\OroLocale\Settings\QwertyConfig
    {
        if (null === $this->qwerty) {
            $this->_usedProperties['qwerty'] = true;
            $this->qwerty = new \Symfony\Config\OroLocale\Settings\QwertyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "qwerty()" has already been initialized. You cannot pass values the second time you call qwerty().');
        }
    
        return $this->qwerty;
    }
    
    public function quarterStart(array $value = []): \Symfony\Config\OroLocale\Settings\QuarterStartConfig
    {
        if (null === $this->quarterStart) {
            $this->_usedProperties['quarterStart'] = true;
            $this->quarterStart = new \Symfony\Config\OroLocale\Settings\QuarterStartConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "quarterStart()" has already been initialized. You cannot pass values the second time you call quarterStart().');
        }
    
        return $this->quarterStart;
    }
    
    public function temperatureUnit(array $value = []): \Symfony\Config\OroLocale\Settings\TemperatureUnitConfig
    {
        if (null === $this->temperatureUnit) {
            $this->_usedProperties['temperatureUnit'] = true;
            $this->temperatureUnit = new \Symfony\Config\OroLocale\Settings\TemperatureUnitConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "temperatureUnit()" has already been initialized. You cannot pass values the second time you call temperatureUnit().');
        }
    
        return $this->temperatureUnit;
    }
    
    public function windSpeedUnit(array $value = []): \Symfony\Config\OroLocale\Settings\WindSpeedUnitConfig
    {
        if (null === $this->windSpeedUnit) {
            $this->_usedProperties['windSpeedUnit'] = true;
            $this->windSpeedUnit = new \Symfony\Config\OroLocale\Settings\WindSpeedUnitConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "windSpeedUnit()" has already been initialized. You cannot pass values the second time you call windSpeedUnit().');
        }
    
        return $this->windSpeedUnit;
    }
    
    public function enabledLocalizations(array $value = []): \Symfony\Config\OroLocale\Settings\EnabledLocalizationsConfig
    {
        if (null === $this->enabledLocalizations) {
            $this->_usedProperties['enabledLocalizations'] = true;
            $this->enabledLocalizations = new \Symfony\Config\OroLocale\Settings\EnabledLocalizationsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "enabledLocalizations()" has already been initialized. You cannot pass values the second time you call enabledLocalizations().');
        }
    
        return $this->enabledLocalizations;
    }
    
    public function defaultLocalization(array $value = []): \Symfony\Config\OroLocale\Settings\DefaultLocalizationConfig
    {
        if (null === $this->defaultLocalization) {
            $this->_usedProperties['defaultLocalization'] = true;
            $this->defaultLocalization = new \Symfony\Config\OroLocale\Settings\DefaultLocalizationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaultLocalization()" has already been initialized. You cannot pass values the second time you call defaultLocalization().');
        }
    
        return $this->defaultLocalization;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('country', $value)) {
            $this->_usedProperties['country'] = true;
            $this->country = new \Symfony\Config\OroLocale\Settings\CountryConfig($value['country']);
            unset($value['country']);
        }
    
        if (array_key_exists('currency', $value)) {
            $this->_usedProperties['currency'] = true;
            $this->currency = new \Symfony\Config\OroLocale\Settings\CurrencyConfig($value['currency']);
            unset($value['currency']);
        }
    
        if (array_key_exists('timezone', $value)) {
            $this->_usedProperties['timezone'] = true;
            $this->timezone = new \Symfony\Config\OroLocale\Settings\TimezoneConfig($value['timezone']);
            unset($value['timezone']);
        }
    
        if (array_key_exists('format_address_by_address_country', $value)) {
            $this->_usedProperties['formatAddressByAddressCountry'] = true;
            $this->formatAddressByAddressCountry = new \Symfony\Config\OroLocale\Settings\FormatAddressByAddressCountryConfig($value['format_address_by_address_country']);
            unset($value['format_address_by_address_country']);
        }
    
        if (array_key_exists('qwerty', $value)) {
            $this->_usedProperties['qwerty'] = true;
            $this->qwerty = new \Symfony\Config\OroLocale\Settings\QwertyConfig($value['qwerty']);
            unset($value['qwerty']);
        }
    
        if (array_key_exists('quarter_start', $value)) {
            $this->_usedProperties['quarterStart'] = true;
            $this->quarterStart = new \Symfony\Config\OroLocale\Settings\QuarterStartConfig($value['quarter_start']);
            unset($value['quarter_start']);
        }
    
        if (array_key_exists('temperature_unit', $value)) {
            $this->_usedProperties['temperatureUnit'] = true;
            $this->temperatureUnit = new \Symfony\Config\OroLocale\Settings\TemperatureUnitConfig($value['temperature_unit']);
            unset($value['temperature_unit']);
        }
    
        if (array_key_exists('wind_speed_unit', $value)) {
            $this->_usedProperties['windSpeedUnit'] = true;
            $this->windSpeedUnit = new \Symfony\Config\OroLocale\Settings\WindSpeedUnitConfig($value['wind_speed_unit']);
            unset($value['wind_speed_unit']);
        }
    
        if (array_key_exists('enabled_localizations', $value)) {
            $this->_usedProperties['enabledLocalizations'] = true;
            $this->enabledLocalizations = new \Symfony\Config\OroLocale\Settings\EnabledLocalizationsConfig($value['enabled_localizations']);
            unset($value['enabled_localizations']);
        }
    
        if (array_key_exists('default_localization', $value)) {
            $this->_usedProperties['defaultLocalization'] = true;
            $this->defaultLocalization = new \Symfony\Config\OroLocale\Settings\DefaultLocalizationConfig($value['default_localization']);
            unset($value['default_localization']);
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
        if (isset($this->_usedProperties['country'])) {
            $output['country'] = $this->country->toArray();
        }
        if (isset($this->_usedProperties['currency'])) {
            $output['currency'] = $this->currency->toArray();
        }
        if (isset($this->_usedProperties['timezone'])) {
            $output['timezone'] = $this->timezone->toArray();
        }
        if (isset($this->_usedProperties['formatAddressByAddressCountry'])) {
            $output['format_address_by_address_country'] = $this->formatAddressByAddressCountry->toArray();
        }
        if (isset($this->_usedProperties['qwerty'])) {
            $output['qwerty'] = $this->qwerty->toArray();
        }
        if (isset($this->_usedProperties['quarterStart'])) {
            $output['quarter_start'] = $this->quarterStart->toArray();
        }
        if (isset($this->_usedProperties['temperatureUnit'])) {
            $output['temperature_unit'] = $this->temperatureUnit->toArray();
        }
        if (isset($this->_usedProperties['windSpeedUnit'])) {
            $output['wind_speed_unit'] = $this->windSpeedUnit->toArray();
        }
        if (isset($this->_usedProperties['enabledLocalizations'])) {
            $output['enabled_localizations'] = $this->enabledLocalizations->toArray();
        }
        if (isset($this->_usedProperties['defaultLocalization'])) {
            $output['default_localization'] = $this->defaultLocalization->toArray();
        }
    
        return $output;
    }

}
