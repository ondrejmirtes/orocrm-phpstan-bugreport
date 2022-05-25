<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroAsset'.\DIRECTORY_SEPARATOR.'WebpackDevServerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroAssetConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $disableBabel;
    private $nodejsPath;
    private $npmPath;
    private $buildTimeout;
    private $npmInstallTimeout;
    private $webpackDevServer;
    private $_usedProperties = [];
    
    /**
     * Permanently disable Babel
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableBabel($value): self
    {
        $this->_usedProperties['disableBabel'] = true;
        $this->disableBabel = $value;
    
        return $this;
    }
    
    /**
     * Path to NodeJs executable
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function nodejsPath($value): self
    {
        $this->_usedProperties['nodejsPath'] = true;
        $this->nodejsPath = $value;
    
        return $this;
    }
    
    /**
     * Path to NPM executable
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function npmPath($value): self
    {
        $this->_usedProperties['npmPath'] = true;
        $this->npmPath = $value;
    
        return $this;
    }
    
    /**
     * Assets build timeout in seconds, null to disable timeout
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function buildTimeout($value): self
    {
        $this->_usedProperties['buildTimeout'] = true;
        $this->buildTimeout = $value;
    
        return $this;
    }
    
    /**
     * Npm installation timeout in seconds, null to disable timeout
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function npmInstallTimeout($value): self
    {
        $this->_usedProperties['npmInstallTimeout'] = true;
        $this->npmInstallTimeout = $value;
    
        return $this;
    }
    
    public function webpackDevServer(array $value = []): \Symfony\Config\OroAsset\WebpackDevServerConfig
    {
        if (null === $this->webpackDevServer) {
            $this->_usedProperties['webpackDevServer'] = true;
            $this->webpackDevServer = new \Symfony\Config\OroAsset\WebpackDevServerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "webpackDevServer()" has already been initialized. You cannot pass values the second time you call webpackDevServer().');
        }
    
        return $this->webpackDevServer;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_asset';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('disable_babel', $value)) {
            $this->_usedProperties['disableBabel'] = true;
            $this->disableBabel = $value['disable_babel'];
            unset($value['disable_babel']);
        }
    
        if (array_key_exists('nodejs_path', $value)) {
            $this->_usedProperties['nodejsPath'] = true;
            $this->nodejsPath = $value['nodejs_path'];
            unset($value['nodejs_path']);
        }
    
        if (array_key_exists('npm_path', $value)) {
            $this->_usedProperties['npmPath'] = true;
            $this->npmPath = $value['npm_path'];
            unset($value['npm_path']);
        }
    
        if (array_key_exists('build_timeout', $value)) {
            $this->_usedProperties['buildTimeout'] = true;
            $this->buildTimeout = $value['build_timeout'];
            unset($value['build_timeout']);
        }
    
        if (array_key_exists('npm_install_timeout', $value)) {
            $this->_usedProperties['npmInstallTimeout'] = true;
            $this->npmInstallTimeout = $value['npm_install_timeout'];
            unset($value['npm_install_timeout']);
        }
    
        if (array_key_exists('webpack_dev_server', $value)) {
            $this->_usedProperties['webpackDevServer'] = true;
            $this->webpackDevServer = new \Symfony\Config\OroAsset\WebpackDevServerConfig($value['webpack_dev_server']);
            unset($value['webpack_dev_server']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['disableBabel'])) {
            $output['disable_babel'] = $this->disableBabel;
        }
        if (isset($this->_usedProperties['nodejsPath'])) {
            $output['nodejs_path'] = $this->nodejsPath;
        }
        if (isset($this->_usedProperties['npmPath'])) {
            $output['npm_path'] = $this->npmPath;
        }
        if (isset($this->_usedProperties['buildTimeout'])) {
            $output['build_timeout'] = $this->buildTimeout;
        }
        if (isset($this->_usedProperties['npmInstallTimeout'])) {
            $output['npm_install_timeout'] = $this->npmInstallTimeout;
        }
        if (isset($this->_usedProperties['webpackDevServer'])) {
            $output['webpack_dev_server'] = $this->webpackDevServer->toArray();
        }
    
        return $output;
    }

}
