<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroOauth2Server'.\DIRECTORY_SEPARATOR.'AuthorizationServerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroOauth2Server'.\DIRECTORY_SEPARATOR.'ResourceServerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroOauth2ServerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $authorizationServer;
    private $resourceServer;
    private $_usedProperties = [];
    
    public function authorizationServer(array $value = []): \Symfony\Config\OroOauth2Server\AuthorizationServerConfig
    {
        if (null === $this->authorizationServer) {
            $this->_usedProperties['authorizationServer'] = true;
            $this->authorizationServer = new \Symfony\Config\OroOauth2Server\AuthorizationServerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "authorizationServer()" has already been initialized. You cannot pass values the second time you call authorizationServer().');
        }
    
        return $this->authorizationServer;
    }
    
    public function resourceServer(array $value = []): \Symfony\Config\OroOauth2Server\ResourceServerConfig
    {
        if (null === $this->resourceServer) {
            $this->_usedProperties['resourceServer'] = true;
            $this->resourceServer = new \Symfony\Config\OroOauth2Server\ResourceServerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "resourceServer()" has already been initialized. You cannot pass values the second time you call resourceServer().');
        }
    
        return $this->resourceServer;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_oauth2_server';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('authorization_server', $value)) {
            $this->_usedProperties['authorizationServer'] = true;
            $this->authorizationServer = new \Symfony\Config\OroOauth2Server\AuthorizationServerConfig($value['authorization_server']);
            unset($value['authorization_server']);
        }
    
        if (array_key_exists('resource_server', $value)) {
            $this->_usedProperties['resourceServer'] = true;
            $this->resourceServer = new \Symfony\Config\OroOauth2Server\ResourceServerConfig($value['resource_server']);
            unset($value['resource_server']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['authorizationServer'])) {
            $output['authorization_server'] = $this->authorizationServer->toArray();
        }
        if (isset($this->_usedProperties['resourceServer'])) {
            $output['resource_server'] = $this->resourceServer->toArray();
        }
    
        return $output;
    }

}
