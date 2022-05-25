<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroSecurity'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroSecurity'.\DIRECTORY_SEPARATOR.'CsrfCookieConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroSecurityConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $settings;
    private $csrfCookie;
    private $loginTargetPathExcludes;
    private $_usedProperties = [];
    
    public function settings(array $value = []): \Symfony\Config\OroSecurity\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroSecurity\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function csrfCookie(array $value = []): \Symfony\Config\OroSecurity\CsrfCookieConfig
    {
        if (null === $this->csrfCookie) {
            $this->_usedProperties['csrfCookie'] = true;
            $this->csrfCookie = new \Symfony\Config\OroSecurity\CsrfCookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "csrfCookie()" has already been initialized. You cannot pass values the second time you call csrfCookie().');
        }
    
        return $this->csrfCookie;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function loginTargetPathExcludes($value): self
    {
        $this->_usedProperties['loginTargetPathExcludes'] = true;
        $this->loginTargetPathExcludes = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_security';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroSecurity\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if (array_key_exists('csrf_cookie', $value)) {
            $this->_usedProperties['csrfCookie'] = true;
            $this->csrfCookie = new \Symfony\Config\OroSecurity\CsrfCookieConfig($value['csrf_cookie']);
            unset($value['csrf_cookie']);
        }
    
        if (array_key_exists('login_target_path_excludes', $value)) {
            $this->_usedProperties['loginTargetPathExcludes'] = true;
            $this->loginTargetPathExcludes = $value['login_target_path_excludes'];
            unset($value['login_target_path_excludes']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
        if (isset($this->_usedProperties['csrfCookie'])) {
            $output['csrf_cookie'] = $this->csrfCookie->toArray();
        }
        if (isset($this->_usedProperties['loginTargetPathExcludes'])) {
            $output['login_target_path_excludes'] = $this->loginTargetPathExcludes;
        }
    
        return $output;
    }

}
