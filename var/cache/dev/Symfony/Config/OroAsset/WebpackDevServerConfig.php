<?php

namespace Symfony\Config\OroAsset;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class WebpackDevServerConfig 
{
    private $enableHmr;
    private $host;
    private $port;
    private $https;
    private $_usedProperties = [];
    
    /**
     * Enable Webpack Hot Module Replacement. To activate HMR run `oro:assets:build --hot`
     * @default '%kernel.debug%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enableHmr($value): self
    {
        $this->_usedProperties['enableHmr'] = true;
        $this->enableHmr = $value;
    
        return $this;
    }
    
    /**
     * By Default `localhost` is used
     * @default 'localhost'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->_usedProperties['host'] = true;
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default 8081
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function port($value): self
    {
        $this->_usedProperties['port'] = true;
        $this->port = $value;
    
        return $this;
    }
    
    /**
     * By default dev-server will be served over HTTP. It can optionally be served over HTTP/2 with HTTPS
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function https($value): self
    {
        $this->_usedProperties['https'] = true;
        $this->https = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('enable_hmr', $value)) {
            $this->_usedProperties['enableHmr'] = true;
            $this->enableHmr = $value['enable_hmr'];
            unset($value['enable_hmr']);
        }
    
        if (array_key_exists('host', $value)) {
            $this->_usedProperties['host'] = true;
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (array_key_exists('port', $value)) {
            $this->_usedProperties['port'] = true;
            $this->port = $value['port'];
            unset($value['port']);
        }
    
        if (array_key_exists('https', $value)) {
            $this->_usedProperties['https'] = true;
            $this->https = $value['https'];
            unset($value['https']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enableHmr'])) {
            $output['enable_hmr'] = $this->enableHmr;
        }
        if (isset($this->_usedProperties['host'])) {
            $output['host'] = $this->host;
        }
        if (isset($this->_usedProperties['port'])) {
            $output['port'] = $this->port;
        }
        if (isset($this->_usedProperties['https'])) {
            $output['https'] = $this->https;
        }
    
        return $output;
    }

}
