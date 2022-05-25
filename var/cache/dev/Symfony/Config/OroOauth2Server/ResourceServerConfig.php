<?php

namespace Symfony\Config\OroOauth2Server;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ResourceServerConfig 
{
    private $publicKey;
    private $oauthFirewalls;
    private $_usedProperties = [];
    
    /**
     * The full path to the public key file that is used to verify JWT tokens. How to generate a public key: https://oauth2.thephpleague.com/installation/#generating-public-and-private-keys.
     * @example /var/oauth/public.key
     * @default '%kernel.project_dir%/var/oauth_public.key'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function publicKey($value): self
    {
        $this->_usedProperties['publicKey'] = true;
        $this->publicKey = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function oauthFirewalls($value): self
    {
        $this->_usedProperties['oauthFirewalls'] = true;
        $this->oauthFirewalls = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('public_key', $value)) {
            $this->_usedProperties['publicKey'] = true;
            $this->publicKey = $value['public_key'];
            unset($value['public_key']);
        }
    
        if (array_key_exists('oauth_firewalls', $value)) {
            $this->_usedProperties['oauthFirewalls'] = true;
            $this->oauthFirewalls = $value['oauth_firewalls'];
            unset($value['oauth_firewalls']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['publicKey'])) {
            $output['public_key'] = $this->publicKey;
        }
        if (isset($this->_usedProperties['oauthFirewalls'])) {
            $output['oauth_firewalls'] = $this->oauthFirewalls;
        }
    
        return $output;
    }

}
