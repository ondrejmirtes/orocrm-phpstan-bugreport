<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioApiDoc'.\DIRECTORY_SEPARATOR.'MotdConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioApiDoc'.\DIRECTORY_SEPARATOR.'RequestListenerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioApiDoc'.\DIRECTORY_SEPARATOR.'SandboxConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioApiDoc'.\DIRECTORY_SEPARATOR.'SwaggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'NelmioApiDoc'.\DIRECTORY_SEPARATOR.'CacheConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class NelmioApiDocConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $name;
    private $excludeSections;
    private $defaultSectionsOpened;
    private $motd;
    private $requestListener;
    private $sandbox;
    private $swagger;
    private $cache;
    private $_usedProperties = [];
    
    /**
     * @default 'API documentation'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function excludeSections($value): self
    {
        $this->_usedProperties['excludeSections'] = true;
        $this->excludeSections = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function defaultSectionsOpened($value): self
    {
        $this->_usedProperties['defaultSectionsOpened'] = true;
        $this->defaultSectionsOpened = $value;
    
        return $this;
    }
    
    public function motd(array $value = []): \Symfony\Config\NelmioApiDoc\MotdConfig
    {
        if (null === $this->motd) {
            $this->_usedProperties['motd'] = true;
            $this->motd = new \Symfony\Config\NelmioApiDoc\MotdConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "motd()" has already been initialized. You cannot pass values the second time you call motd().');
        }
    
        return $this->motd;
    }
    
    public function requestListener(array $value = []): \Symfony\Config\NelmioApiDoc\RequestListenerConfig
    {
        if (null === $this->requestListener) {
            $this->_usedProperties['requestListener'] = true;
            $this->requestListener = new \Symfony\Config\NelmioApiDoc\RequestListenerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "requestListener()" has already been initialized. You cannot pass values the second time you call requestListener().');
        }
    
        return $this->requestListener;
    }
    
    public function sandbox(array $value = []): \Symfony\Config\NelmioApiDoc\SandboxConfig
    {
        if (null === $this->sandbox) {
            $this->_usedProperties['sandbox'] = true;
            $this->sandbox = new \Symfony\Config\NelmioApiDoc\SandboxConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sandbox()" has already been initialized. You cannot pass values the second time you call sandbox().');
        }
    
        return $this->sandbox;
    }
    
    public function swagger(array $value = []): \Symfony\Config\NelmioApiDoc\SwaggerConfig
    {
        if (null === $this->swagger) {
            $this->_usedProperties['swagger'] = true;
            $this->swagger = new \Symfony\Config\NelmioApiDoc\SwaggerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "swagger()" has already been initialized. You cannot pass values the second time you call swagger().');
        }
    
        return $this->swagger;
    }
    
    public function cache(array $value = []): \Symfony\Config\NelmioApiDoc\CacheConfig
    {
        if (null === $this->cache) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\NelmioApiDoc\CacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }
    
        return $this->cache;
    }
    
    public function getExtensionAlias(): string
    {
        return 'nelmio_api_doc';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }
    
        if (array_key_exists('exclude_sections', $value)) {
            $this->_usedProperties['excludeSections'] = true;
            $this->excludeSections = $value['exclude_sections'];
            unset($value['exclude_sections']);
        }
    
        if (array_key_exists('default_sections_opened', $value)) {
            $this->_usedProperties['defaultSectionsOpened'] = true;
            $this->defaultSectionsOpened = $value['default_sections_opened'];
            unset($value['default_sections_opened']);
        }
    
        if (array_key_exists('motd', $value)) {
            $this->_usedProperties['motd'] = true;
            $this->motd = new \Symfony\Config\NelmioApiDoc\MotdConfig($value['motd']);
            unset($value['motd']);
        }
    
        if (array_key_exists('request_listener', $value)) {
            $this->_usedProperties['requestListener'] = true;
            $this->requestListener = new \Symfony\Config\NelmioApiDoc\RequestListenerConfig($value['request_listener']);
            unset($value['request_listener']);
        }
    
        if (array_key_exists('sandbox', $value)) {
            $this->_usedProperties['sandbox'] = true;
            $this->sandbox = new \Symfony\Config\NelmioApiDoc\SandboxConfig($value['sandbox']);
            unset($value['sandbox']);
        }
    
        if (array_key_exists('swagger', $value)) {
            $this->_usedProperties['swagger'] = true;
            $this->swagger = new \Symfony\Config\NelmioApiDoc\SwaggerConfig($value['swagger']);
            unset($value['swagger']);
        }
    
        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\NelmioApiDoc\CacheConfig($value['cache']);
            unset($value['cache']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['excludeSections'])) {
            $output['exclude_sections'] = $this->excludeSections;
        }
        if (isset($this->_usedProperties['defaultSectionsOpened'])) {
            $output['default_sections_opened'] = $this->defaultSectionsOpened;
        }
        if (isset($this->_usedProperties['motd'])) {
            $output['motd'] = $this->motd->toArray();
        }
        if (isset($this->_usedProperties['requestListener'])) {
            $output['request_listener'] = $this->requestListener->toArray();
        }
        if (isset($this->_usedProperties['sandbox'])) {
            $output['sandbox'] = $this->sandbox->toArray();
        }
        if (isset($this->_usedProperties['swagger'])) {
            $output['swagger'] = $this->swagger->toArray();
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache->toArray();
        }
    
        return $output;
    }

}
