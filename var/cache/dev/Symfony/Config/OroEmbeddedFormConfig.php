<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroEmbeddedFormConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $sessionIdFieldName;
    private $csrfTokenLifetime;
    private $csrfTokenCacheServiceId;
    private $_usedProperties = [];
    
    /**
     * The name of the hidden field that should be used to pass the session id to third party site. This allows to use the embedded form even if a web browser blocks third-party cookies.
     * @default '_embedded_form_sid'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sessionIdFieldName($value): self
    {
        $this->_usedProperties['sessionIdFieldName'] = true;
        $this->sessionIdFieldName = $value;
    
        return $this;
    }
    
    /**
     * The number of seconds the CSRF token should live for.
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function csrfTokenLifetime($value): self
    {
        $this->_usedProperties['csrfTokenLifetime'] = true;
        $this->csrfTokenLifetime = $value;
    
        return $this;
    }
    
    /**
     * The service id that is used to cache CSRF tokens.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfTokenCacheServiceId($value): self
    {
        $this->_usedProperties['csrfTokenCacheServiceId'] = true;
        $this->csrfTokenCacheServiceId = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_embedded_form';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('session_id_field_name', $value)) {
            $this->_usedProperties['sessionIdFieldName'] = true;
            $this->sessionIdFieldName = $value['session_id_field_name'];
            unset($value['session_id_field_name']);
        }
    
        if (array_key_exists('csrf_token_lifetime', $value)) {
            $this->_usedProperties['csrfTokenLifetime'] = true;
            $this->csrfTokenLifetime = $value['csrf_token_lifetime'];
            unset($value['csrf_token_lifetime']);
        }
    
        if (array_key_exists('csrf_token_cache_service_id', $value)) {
            $this->_usedProperties['csrfTokenCacheServiceId'] = true;
            $this->csrfTokenCacheServiceId = $value['csrf_token_cache_service_id'];
            unset($value['csrf_token_cache_service_id']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['sessionIdFieldName'])) {
            $output['session_id_field_name'] = $this->sessionIdFieldName;
        }
        if (isset($this->_usedProperties['csrfTokenLifetime'])) {
            $output['csrf_token_lifetime'] = $this->csrfTokenLifetime;
        }
        if (isset($this->_usedProperties['csrfTokenCacheServiceId'])) {
            $output['csrf_token_cache_service_id'] = $this->csrfTokenCacheServiceId;
        }
    
        return $output;
    }

}
