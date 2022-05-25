<?php

namespace Symfony\Config\Security\FirewallConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Wsse'.\DIRECTORY_SEPARATOR.'EncoderConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class WsseConfig 
{
    private $provider;
    private $realm;
    private $profile;
    private $lifetime;
    private $dateFormat;
    private $encoder;
    private $nonceCacheServiceId;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): self
    {
        $this->_usedProperties['provider'] = true;
        $this->provider = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function realm($value): self
    {
        $this->_usedProperties['realm'] = true;
        $this->realm = $value;
    
        return $this;
    }
    
    /**
     * @default 'UsernameToken'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function profile($value): self
    {
        $this->_usedProperties['profile'] = true;
        $this->profile = $value;
    
        return $this;
    }
    
    /**
     * @default 300
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function lifetime($value): self
    {
        $this->_usedProperties['lifetime'] = true;
        $this->lifetime = $value;
    
        return $this;
    }
    
    /**
     * @default '/^([\\+-]?\\d{4}(?!\\d{2}\\b))((-?)((0[1-9]|1[0-2])(\\3([12]\\d|0[1-9]|3[01]))?|W([0-4]\\d|5[0-2])(-?[1-7])?|(00[1-9]|0[1-9]\\d|[12]\\d{2}|3([0-5]\\d|6[1-6])))([T\\s]((([01]\\d|2[0-3])((:?)[0-5]\\d)?|24\\:?00)([\\.,]\\d+(?!:))?)?(\\17[0-5]\\d([\\.,]\\d+)?)?([zZ]|([\\+-])([01]\\d|2[0-3]):?([0-5]\\d)?)?)?)?$/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dateFormat($value): self
    {
        $this->_usedProperties['dateFormat'] = true;
        $this->dateFormat = $value;
    
        return $this;
    }
    
    public function encoder(array $value = []): \Symfony\Config\Security\FirewallConfig\Wsse\EncoderConfig
    {
        if (null === $this->encoder) {
            $this->_usedProperties['encoder'] = true;
            $this->encoder = new \Symfony\Config\Security\FirewallConfig\Wsse\EncoderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "encoder()" has already been initialized. You cannot pass values the second time you call encoder().');
        }
    
        return $this->encoder;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function nonceCacheServiceId($value): self
    {
        $this->_usedProperties['nonceCacheServiceId'] = true;
        $this->nonceCacheServiceId = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('provider', $value)) {
            $this->_usedProperties['provider'] = true;
            $this->provider = $value['provider'];
            unset($value['provider']);
        }
    
        if (array_key_exists('realm', $value)) {
            $this->_usedProperties['realm'] = true;
            $this->realm = $value['realm'];
            unset($value['realm']);
        }
    
        if (array_key_exists('profile', $value)) {
            $this->_usedProperties['profile'] = true;
            $this->profile = $value['profile'];
            unset($value['profile']);
        }
    
        if (array_key_exists('lifetime', $value)) {
            $this->_usedProperties['lifetime'] = true;
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }
    
        if (array_key_exists('date_format', $value)) {
            $this->_usedProperties['dateFormat'] = true;
            $this->dateFormat = $value['date_format'];
            unset($value['date_format']);
        }
    
        if (array_key_exists('encoder', $value)) {
            $this->_usedProperties['encoder'] = true;
            $this->encoder = new \Symfony\Config\Security\FirewallConfig\Wsse\EncoderConfig($value['encoder']);
            unset($value['encoder']);
        }
    
        if (array_key_exists('nonce_cache_service_id', $value)) {
            $this->_usedProperties['nonceCacheServiceId'] = true;
            $this->nonceCacheServiceId = $value['nonce_cache_service_id'];
            unset($value['nonce_cache_service_id']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['provider'])) {
            $output['provider'] = $this->provider;
        }
        if (isset($this->_usedProperties['realm'])) {
            $output['realm'] = $this->realm;
        }
        if (isset($this->_usedProperties['profile'])) {
            $output['profile'] = $this->profile;
        }
        if (isset($this->_usedProperties['lifetime'])) {
            $output['lifetime'] = $this->lifetime;
        }
        if (isset($this->_usedProperties['dateFormat'])) {
            $output['date_format'] = $this->dateFormat;
        }
        if (isset($this->_usedProperties['encoder'])) {
            $output['encoder'] = $this->encoder->toArray();
        }
        if (isset($this->_usedProperties['nonceCacheServiceId'])) {
            $output['nonce_cache_service_id'] = $this->nonceCacheServiceId;
        }
    
        return $output;
    }

}
