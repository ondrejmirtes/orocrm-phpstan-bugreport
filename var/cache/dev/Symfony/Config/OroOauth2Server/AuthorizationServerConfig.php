<?php

namespace Symfony\Config\OroOauth2Server;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AuthorizationServer'.\DIRECTORY_SEPARATOR.'CorsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class AuthorizationServerConfig 
{
    private $accessTokenLifetime;
    private $refreshTokenLifetime;
    private $authCodeLifetime;
    private $enableRefreshToken;
    private $enableAuthCode;
    private $privateKey;
    private $encryptionKey;
    private $cors;
    private $_usedProperties = [];
    
    /**
     * The lifetime in seconds of the access token.
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function accessTokenLifetime($value): self
    {
        $this->_usedProperties['accessTokenLifetime'] = true;
        $this->accessTokenLifetime = $value;
    
        return $this;
    }
    
    /**
     * The lifetime in seconds of the refresh token.
     * @default 18144000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function refreshTokenLifetime($value): self
    {
        $this->_usedProperties['refreshTokenLifetime'] = true;
        $this->refreshTokenLifetime = $value;
    
        return $this;
    }
    
    /**
     * The lifetime in seconds of the authorization code.
     * @default 600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function authCodeLifetime($value): self
    {
        $this->_usedProperties['authCodeLifetime'] = true;
        $this->authCodeLifetime = $value;
    
        return $this;
    }
    
    /**
     * Determines if the refresh token grant is enabled.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableRefreshToken($value): self
    {
        $this->_usedProperties['enableRefreshToken'] = true;
        $this->enableRefreshToken = $value;
    
        return $this;
    }
    
    /**
     * Determines if the authorization code grant is enabled.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableAuthCode($value): self
    {
        $this->_usedProperties['enableAuthCode'] = true;
        $this->enableAuthCode = $value;
    
        return $this;
    }
    
    /**
     * The full path to the private key file that is used to sign JWT tokens. How to generate a private key: https://oauth2.thephpleague.com/installation/#generating-public-and-private-keys.
     * @example /var/oauth/private.key
     * @default '%kernel.project_dir%/var/oauth_private.key'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function privateKey($value): self
    {
        $this->_usedProperties['privateKey'] = true;
        $this->privateKey = $value;
    
        return $this;
    }
    
    /**
     * The string that is used to encrypt refresh token and authorization token payload. How to generate an encryption key: https://oauth2.thephpleague.com/installation/#string-password.
     * @default '%secret%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function encryptionKey($value): self
    {
        $this->_usedProperties['encryptionKey'] = true;
        $this->encryptionKey = $value;
    
        return $this;
    }
    
    public function cors(array $value = []): \Symfony\Config\OroOauth2Server\AuthorizationServer\CorsConfig
    {
        if (null === $this->cors) {
            $this->_usedProperties['cors'] = true;
            $this->cors = new \Symfony\Config\OroOauth2Server\AuthorizationServer\CorsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cors()" has already been initialized. You cannot pass values the second time you call cors().');
        }
    
        return $this->cors;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('access_token_lifetime', $value)) {
            $this->_usedProperties['accessTokenLifetime'] = true;
            $this->accessTokenLifetime = $value['access_token_lifetime'];
            unset($value['access_token_lifetime']);
        }
    
        if (array_key_exists('refresh_token_lifetime', $value)) {
            $this->_usedProperties['refreshTokenLifetime'] = true;
            $this->refreshTokenLifetime = $value['refresh_token_lifetime'];
            unset($value['refresh_token_lifetime']);
        }
    
        if (array_key_exists('auth_code_lifetime', $value)) {
            $this->_usedProperties['authCodeLifetime'] = true;
            $this->authCodeLifetime = $value['auth_code_lifetime'];
            unset($value['auth_code_lifetime']);
        }
    
        if (array_key_exists('enable_refresh_token', $value)) {
            $this->_usedProperties['enableRefreshToken'] = true;
            $this->enableRefreshToken = $value['enable_refresh_token'];
            unset($value['enable_refresh_token']);
        }
    
        if (array_key_exists('enable_auth_code', $value)) {
            $this->_usedProperties['enableAuthCode'] = true;
            $this->enableAuthCode = $value['enable_auth_code'];
            unset($value['enable_auth_code']);
        }
    
        if (array_key_exists('private_key', $value)) {
            $this->_usedProperties['privateKey'] = true;
            $this->privateKey = $value['private_key'];
            unset($value['private_key']);
        }
    
        if (array_key_exists('encryption_key', $value)) {
            $this->_usedProperties['encryptionKey'] = true;
            $this->encryptionKey = $value['encryption_key'];
            unset($value['encryption_key']);
        }
    
        if (array_key_exists('cors', $value)) {
            $this->_usedProperties['cors'] = true;
            $this->cors = new \Symfony\Config\OroOauth2Server\AuthorizationServer\CorsConfig($value['cors']);
            unset($value['cors']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['accessTokenLifetime'])) {
            $output['access_token_lifetime'] = $this->accessTokenLifetime;
        }
        if (isset($this->_usedProperties['refreshTokenLifetime'])) {
            $output['refresh_token_lifetime'] = $this->refreshTokenLifetime;
        }
        if (isset($this->_usedProperties['authCodeLifetime'])) {
            $output['auth_code_lifetime'] = $this->authCodeLifetime;
        }
        if (isset($this->_usedProperties['enableRefreshToken'])) {
            $output['enable_refresh_token'] = $this->enableRefreshToken;
        }
        if (isset($this->_usedProperties['enableAuthCode'])) {
            $output['enable_auth_code'] = $this->enableAuthCode;
        }
        if (isset($this->_usedProperties['privateKey'])) {
            $output['private_key'] = $this->privateKey;
        }
        if (isset($this->_usedProperties['encryptionKey'])) {
            $output['encryption_key'] = $this->encryptionKey;
        }
        if (isset($this->_usedProperties['cors'])) {
            $output['cors'] = $this->cors->toArray();
        }
    
        return $output;
    }

}
