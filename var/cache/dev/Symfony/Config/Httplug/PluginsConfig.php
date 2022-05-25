<?php

namespace Symfony\Config\Httplug;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'AuthenticationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'CacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'CookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'HistoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'DecoderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'LoggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'RedirectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'RetryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Plugins'.\DIRECTORY_SEPARATOR.'StopwatchConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class PluginsConfig 
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
    private $_usedProperties = [];
    
    public function authentication(string $name, array $value = []): \Symfony\Config\Httplug\Plugins\AuthenticationConfig
    {
        if (!isset($this->authentication[$name])) {
            $this->_usedProperties['authentication'] = true;
    
            return $this->authentication[$name] = new \Symfony\Config\Httplug\Plugins\AuthenticationConfig($value);
        }
        if ([] === $value) {
            return $this->authentication[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "authentication()" has already been initialized. You cannot pass values the second time you call authentication().');
    }
    
    public function cache(array $value = []): \Symfony\Config\Httplug\Plugins\CacheConfig
    {
        if (null === $this->cache) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Httplug\Plugins\CacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cache()" has already been initialized. You cannot pass values the second time you call cache().');
        }
    
        return $this->cache;
    }
    
    public function cookie(array $value = []): \Symfony\Config\Httplug\Plugins\CookieConfig
    {
        if (null === $this->cookie) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\Httplug\Plugins\CookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cookie()" has already been initialized. You cannot pass values the second time you call cookie().');
        }
    
        return $this->cookie;
    }
    
    public function history(array $value = []): \Symfony\Config\Httplug\Plugins\HistoryConfig
    {
        if (null === $this->history) {
            $this->_usedProperties['history'] = true;
            $this->history = new \Symfony\Config\Httplug\Plugins\HistoryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "history()" has already been initialized. You cannot pass values the second time you call history().');
        }
    
        return $this->history;
    }
    
    public function decoder(array $value = []): \Symfony\Config\Httplug\Plugins\DecoderConfig
    {
        if (null === $this->decoder) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = new \Symfony\Config\Httplug\Plugins\DecoderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "decoder()" has already been initialized. You cannot pass values the second time you call decoder().');
        }
    
        return $this->decoder;
    }
    
    public function logger(array $value = []): \Symfony\Config\Httplug\Plugins\LoggerConfig
    {
        if (null === $this->logger) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Httplug\Plugins\LoggerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "logger()" has already been initialized. You cannot pass values the second time you call logger().');
        }
    
        return $this->logger;
    }
    
    public function redirect(array $value = []): \Symfony\Config\Httplug\Plugins\RedirectConfig
    {
        if (null === $this->redirect) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\Httplug\Plugins\RedirectConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "redirect()" has already been initialized. You cannot pass values the second time you call redirect().');
        }
    
        return $this->redirect;
    }
    
    public function retry(array $value = []): \Symfony\Config\Httplug\Plugins\RetryConfig
    {
        if (null === $this->retry) {
            $this->_usedProperties['retry'] = true;
            $this->retry = new \Symfony\Config\Httplug\Plugins\RetryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "retry()" has already been initialized. You cannot pass values the second time you call retry().');
        }
    
        return $this->retry;
    }
    
    public function stopwatch(array $value = []): \Symfony\Config\Httplug\Plugins\StopwatchConfig
    {
        if (null === $this->stopwatch) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = new \Symfony\Config\Httplug\Plugins\StopwatchConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "stopwatch()" has already been initialized. You cannot pass values the second time you call stopwatch().');
        }
    
        return $this->stopwatch;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('authentication', $value)) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication = array_map(function ($v) { return new \Symfony\Config\Httplug\Plugins\AuthenticationConfig($v); }, $value['authentication']);
            unset($value['authentication']);
        }
    
        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = new \Symfony\Config\Httplug\Plugins\CacheConfig($value['cache']);
            unset($value['cache']);
        }
    
        if (array_key_exists('cookie', $value)) {
            $this->_usedProperties['cookie'] = true;
            $this->cookie = new \Symfony\Config\Httplug\Plugins\CookieConfig($value['cookie']);
            unset($value['cookie']);
        }
    
        if (array_key_exists('history', $value)) {
            $this->_usedProperties['history'] = true;
            $this->history = new \Symfony\Config\Httplug\Plugins\HistoryConfig($value['history']);
            unset($value['history']);
        }
    
        if (array_key_exists('decoder', $value)) {
            $this->_usedProperties['decoder'] = true;
            $this->decoder = new \Symfony\Config\Httplug\Plugins\DecoderConfig($value['decoder']);
            unset($value['decoder']);
        }
    
        if (array_key_exists('logger', $value)) {
            $this->_usedProperties['logger'] = true;
            $this->logger = new \Symfony\Config\Httplug\Plugins\LoggerConfig($value['logger']);
            unset($value['logger']);
        }
    
        if (array_key_exists('redirect', $value)) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\Httplug\Plugins\RedirectConfig($value['redirect']);
            unset($value['redirect']);
        }
    
        if (array_key_exists('retry', $value)) {
            $this->_usedProperties['retry'] = true;
            $this->retry = new \Symfony\Config\Httplug\Plugins\RetryConfig($value['retry']);
            unset($value['retry']);
        }
    
        if (array_key_exists('stopwatch', $value)) {
            $this->_usedProperties['stopwatch'] = true;
            $this->stopwatch = new \Symfony\Config\Httplug\Plugins\StopwatchConfig($value['stopwatch']);
            unset($value['stopwatch']);
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
    
        return $output;
    }

}
