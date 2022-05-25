<?php

namespace Symfony\Config\Httplug\ClientConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'AuthenticationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'CookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HistoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'DecoderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'LoggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'RedirectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'RetryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'StopwatchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ReferenceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'AddHostConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'AddPathConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'BaseUriConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'ContentTypeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderAppendConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderDefaultsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderSetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'HeaderRemoveConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'QueryDefaultsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PluginConfig'.\DIRECTORY_SEPARATOR.'VcrConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class PluginConfig 
{
    private $authentication;
    private $cache;
    private $cookie;
    private $history;
    private $decoder;
    private $logger;
    private $redirect;
    private $retry;
    private $stopwatch;
    private $reference;
    private $addHost;
    private $addPath;
    private $baseUri;
    private $contentType;
    private $headerAppend;
    private $headerDefaults;
    private $headerSet;
    private $headerRemove;
    private $queryDefaults;
    private $vcr;
    private $_usedProperties = [];
    
    public function authentication(string $name, array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\AuthenticationConfig
    {
        if (!isset($this->authentication[$name])) {
            $this->_usedProperties['authentication'] = true;
    
            return $this->authentication[$name] = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AuthenticationConfig($value);
        }
        if ([] === $value) {
            return $this->authentication[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "authentication()" has already been initialized. You cannot pass values the second time you call authentication().');
    }
    
    public function cache(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig
    {
        if (null === $this->cache) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }
    
        return $this->cache;
    }
    
    public function cookie(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig
    {
        if (null === $this->cookie) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cookie()" has already been initialized. You cannot pass values the second time you call cookie().');
        }
    
        return $this->cookie;
    }
    
    public function history(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig
    {
        if (null === $this->history) {
            $this->_usedProperties['history'] = true;
            $this->history = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "history()" has already been initialized. You cannot pass values the second time you call history().');
        }
    
        return $this->history;
    }
    
    public function decoder(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig
    {
        if (null === $this->decoder) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "decoder()" has already been initialized. You cannot pass values the second time you call decoder().');
        }
    
        return $this->decoder;
    }
    
    public function logger(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig
    {
        if (null === $this->logger) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "logger()" has already been initialized. You cannot pass values the second time you call logger().');
        }
    
        return $this->logger;
    }
    
    public function redirect(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig
    {
        if (null === $this->redirect) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "redirect()" has already been initialized. You cannot pass values the second time you call redirect().');
        }
    
        return $this->redirect;
    }
    
    public function retry(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig
    {
        if (null === $this->retry) {
            $this->_usedProperties['retry'] = true;
            $this->retry = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "retry()" has already been initialized. You cannot pass values the second time you call retry().');
        }
    
        return $this->retry;
    }
    
    public function stopwatch(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig
    {
        if (null === $this->stopwatch) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "stopwatch()" has already been initialized. You cannot pass values the second time you call stopwatch().');
        }
    
        return $this->stopwatch;
    }
    
    public function reference(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig
    {
        if (null === $this->reference) {
            $this->_usedProperties['reference'] = true;
            $this->reference = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "reference()" has already been initialized. You cannot pass values the second time you call reference().');
        }
    
        return $this->reference;
    }
    
    public function addHost(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig
    {
        if (null === $this->addHost) {
            $this->_usedProperties['addHost'] = true;
            $this->addHost = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "addHost()" has already been initialized. You cannot pass values the second time you call addHost().');
        }
    
        return $this->addHost;
    }
    
    public function addPath(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig
    {
        if (null === $this->addPath) {
            $this->_usedProperties['addPath'] = true;
            $this->addPath = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "addPath()" has already been initialized. You cannot pass values the second time you call addPath().');
        }
    
        return $this->addPath;
    }
    
    public function baseUri(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig
    {
        if (null === $this->baseUri) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "baseUri()" has already been initialized. You cannot pass values the second time you call baseUri().');
        }
    
        return $this->baseUri;
    }
    
    public function contentType(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig
    {
        if (null === $this->contentType) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "contentType()" has already been initialized. You cannot pass values the second time you call contentType().');
        }
    
        return $this->contentType;
    }
    
    public function headerAppend(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig
    {
        if (null === $this->headerAppend) {
            $this->_usedProperties['headerAppend'] = true;
            $this->headerAppend = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "headerAppend()" has already been initialized. You cannot pass values the second time you call headerAppend().');
        }
    
        return $this->headerAppend;
    }
    
    public function headerDefaults(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig
    {
        if (null === $this->headerDefaults) {
            $this->_usedProperties['headerDefaults'] = true;
            $this->headerDefaults = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "headerDefaults()" has already been initialized. You cannot pass values the second time you call headerDefaults().');
        }
    
        return $this->headerDefaults;
    }
    
    public function headerSet(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig
    {
        if (null === $this->headerSet) {
            $this->_usedProperties['headerSet'] = true;
            $this->headerSet = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "headerSet()" has already been initialized. You cannot pass values the second time you call headerSet().');
        }
    
        return $this->headerSet;
    }
    
    public function headerRemove(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig
    {
        if (null === $this->headerRemove) {
            $this->_usedProperties['headerRemove'] = true;
            $this->headerRemove = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "headerRemove()" has already been initialized. You cannot pass values the second time you call headerRemove().');
        }
    
        return $this->headerRemove;
    }
    
    public function queryDefaults(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig
    {
        if (null === $this->queryDefaults) {
            $this->_usedProperties['queryDefaults'] = true;
            $this->queryDefaults = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "queryDefaults()" has already been initialized. You cannot pass values the second time you call queryDefaults().');
        }
    
        return $this->queryDefaults;
    }
    
    public function vcr(array $value = []): \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig
    {
        if (null === $this->vcr) {
            $this->_usedProperties['vcr'] = true;
            $this->vcr = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "vcr()" has already been initialized. You cannot pass values the second time you call vcr().');
        }
    
        return $this->vcr;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('authentication', $value)) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication = array_map(function ($v) { return new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AuthenticationConfig($v); }, $value['authentication']);
            unset($value['authentication']);
        }
    
        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CacheConfig($value['cache']);
            unset($value['cache']);
        }
    
        if (array_key_exists('cookie', $value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\CookieConfig($value['cookie']);
            unset($value['cookie']);
        }
    
        if (array_key_exists('history', $value)) {
            $this->_usedProperties['history'] = true;
            $this->history = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HistoryConfig($value['history']);
            unset($value['history']);
        }
    
        if (array_key_exists('decoder', $value)) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\DecoderConfig($value['decoder']);
            unset($value['decoder']);
        }
    
        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\LoggerConfig($value['logger']);
            unset($value['logger']);
        }
    
        if (array_key_exists('redirect', $value)) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RedirectConfig($value['redirect']);
            unset($value['redirect']);
        }
    
        if (array_key_exists('retry', $value)) {
            $this->_usedProperties['retry'] = true;
            $this->retry = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\RetryConfig($value['retry']);
            unset($value['retry']);
        }
    
        if (array_key_exists('stopwatch', $value)) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\StopwatchConfig($value['stopwatch']);
            unset($value['stopwatch']);
        }
    
        if (array_key_exists('reference', $value)) {
            $this->_usedProperties['reference'] = true;
            $this->reference = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ReferenceConfig($value['reference']);
            unset($value['reference']);
        }
    
        if (array_key_exists('add_host', $value)) {
            $this->_usedProperties['addHost'] = true;
            $this->addHost = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddHostConfig($value['add_host']);
            unset($value['add_host']);
        }
    
        if (array_key_exists('add_path', $value)) {
            $this->_usedProperties['addPath'] = true;
            $this->addPath = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\AddPathConfig($value['add_path']);
            unset($value['add_path']);
        }
    
        if (array_key_exists('base_uri', $value)) {
            $this->_usedProperties['baseUri'] = true;
            $this->baseUri = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\BaseUriConfig($value['base_uri']);
            unset($value['base_uri']);
        }
    
        if (array_key_exists('content_type', $value)) {
            $this->_usedProperties['contentType'] = true;
            $this->contentType = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\ContentTypeConfig($value['content_type']);
            unset($value['content_type']);
        }
    
        if (array_key_exists('header_append', $value)) {
            $this->_usedProperties['headerAppend'] = true;
            $this->headerAppend = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderAppendConfig($value['header_append']);
            unset($value['header_append']);
        }
    
        if (array_key_exists('header_defaults', $value)) {
            $this->_usedProperties['headerDefaults'] = true;
            $this->headerDefaults = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderDefaultsConfig($value['header_defaults']);
            unset($value['header_defaults']);
        }
    
        if (array_key_exists('header_set', $value)) {
            $this->_usedProperties['headerSet'] = true;
            $this->headerSet = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderSetConfig($value['header_set']);
            unset($value['header_set']);
        }
    
        if (array_key_exists('header_remove', $value)) {
            $this->_usedProperties['headerRemove'] = true;
            $this->headerRemove = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\HeaderRemoveConfig($value['header_remove']);
            unset($value['header_remove']);
        }
    
        if (array_key_exists('query_defaults', $value)) {
            $this->_usedProperties['queryDefaults'] = true;
            $this->queryDefaults = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\QueryDefaultsConfig($value['query_defaults']);
            unset($value['query_defaults']);
        }
    
        if (array_key_exists('vcr', $value)) {
            $this->_usedProperties['vcr'] = true;
            $this->vcr = new \Symfony\Config\Httplug\ClientConfig\PluginConfig\VcrConfig($value['vcr']);
            unset($value['vcr']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['authentication'])) {
            $output['authentication'] = array_map(function ($v) { return $v->toArray(); }, $this->authentication);
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache->toArray();
        }
        if (isset($this->_usedProperties['cookie'])) {
            $output['cookie'] = $this->cookie->toArray();
        }
        if (isset($this->_usedProperties['history'])) {
            $output['history'] = $this->history->toArray();
        }
        if (isset($this->_usedProperties['decoder'])) {
            $output['decoder'] = $this->decoder->toArray();
        }
        if (isset($this->_usedProperties['logger'])) {
            $output['logger'] = $this->logger->toArray();
        }
        if (isset($this->_usedProperties['redirect'])) {
            $output['redirect'] = $this->redirect->toArray();
        }
        if (isset($this->_usedProperties['retry'])) {
            $output['retry'] = $this->retry->toArray();
        }
        if (isset($this->_usedProperties['stopwatch'])) {
            $output['stopwatch'] = $this->stopwatch->toArray();
        }
        if (isset($this->_usedProperties['reference'])) {
            $output['reference'] = $this->reference->toArray();
        }
        if (isset($this->_usedProperties['addHost'])) {
            $output['add_host'] = $this->addHost->toArray();
        }
        if (isset($this->_usedProperties['addPath'])) {
            $output['add_path'] = $this->addPath->toArray();
        }
        if (isset($this->_usedProperties['baseUri'])) {
            $output['base_uri'] = $this->baseUri->toArray();
        }
        if (isset($this->_usedProperties['contentType'])) {
            $output['content_type'] = $this->contentType->toArray();
        }
        if (isset($this->_usedProperties['headerAppend'])) {
            $output['header_append'] = $this->headerAppend->toArray();
        }
        if (isset($this->_usedProperties['headerDefaults'])) {
            $output['header_defaults'] = $this->headerDefaults->toArray();
        }
        if (isset($this->_usedProperties['headerSet'])) {
            $output['header_set'] = $this->headerSet->toArray();
        }
        if (isset($this->_usedProperties['headerRemove'])) {
            $output['header_remove'] = $this->headerRemove->toArray();
        }
        if (isset($this->_usedProperties['queryDefaults'])) {
            $output['query_defaults'] = $this->queryDefaults->toArray();
        }
        if (isset($this->_usedProperties['vcr'])) {
            $output['vcr'] = $this->vcr->toArray();
        }
    
        return $output;
    }

}
