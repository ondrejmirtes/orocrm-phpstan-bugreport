<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'ClassConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'ClientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'SessionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'DoctrineConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'MonologConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'SwiftmailerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SncRedis'.\DIRECTORY_SEPARATOR.'ProfilerStorageConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SncRedisConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $class;
    private $clients;
    private $session;
    private $doctrine;
    private $monolog;
    private $swiftmailer;
    private $profilerStorage;
    private $_usedProperties = [];
    
    public function class(array $value = []): \Symfony\Config\SncRedis\ClassConfig
    {
        if (null === $this->class) {
            $this->_usedProperties['class'] = true;
            $this->class = new \Symfony\Config\SncRedis\ClassConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "class()" has already been initialized. You cannot pass values the second time you call class().');
        }
    
        return $this->class;
    }
    
    public function client(string $alias, array $value = []): \Symfony\Config\SncRedis\ClientConfig
    {
        if (!isset($this->clients[$alias])) {
            $this->_usedProperties['clients'] = true;
    
            return $this->clients[$alias] = new \Symfony\Config\SncRedis\ClientConfig($value);
        }
        if ([] === $value) {
            return $this->clients[$alias];
        }
    
        throw new InvalidConfigurationException('The node created by "client()" has already been initialized. You cannot pass values the second time you call client().');
    }
    
    public function session(array $value = []): \Symfony\Config\SncRedis\SessionConfig
    {
        if (null === $this->session) {
            $this->_usedProperties['session'] = true;
            $this->session = new \Symfony\Config\SncRedis\SessionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "session()" has already been initialized. You cannot pass values the second time you call session().');
        }
    
        return $this->session;
    }
    
    public function doctrine(array $value = []): \Symfony\Config\SncRedis\DoctrineConfig
    {
        if (null === $this->doctrine) {
            $this->_usedProperties['doctrine'] = true;
            $this->doctrine = new \Symfony\Config\SncRedis\DoctrineConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrine()" has already been initialized. You cannot pass values the second time you call doctrine().');
        }
    
        return $this->doctrine;
    }
    
    public function monolog(array $value = []): \Symfony\Config\SncRedis\MonologConfig
    {
        if (null === $this->monolog) {
            $this->_usedProperties['monolog'] = true;
            $this->monolog = new \Symfony\Config\SncRedis\MonologConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "monolog()" has already been initialized. You cannot pass values the second time you call monolog().');
        }
    
        return $this->monolog;
    }
    
    public function swiftmailer(array $value = []): \Symfony\Config\SncRedis\SwiftmailerConfig
    {
        if (null === $this->swiftmailer) {
            $this->_usedProperties['swiftmailer'] = true;
            $this->swiftmailer = new \Symfony\Config\SncRedis\SwiftmailerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "swiftmailer()" has already been initialized. You cannot pass values the second time you call swiftmailer().');
        }
    
        return $this->swiftmailer;
    }
    
    public function profilerStorage(array $value = []): \Symfony\Config\SncRedis\ProfilerStorageConfig
    {
        if (null === $this->profilerStorage) {
            $this->_usedProperties['profilerStorage'] = true;
            $this->profilerStorage = new \Symfony\Config\SncRedis\ProfilerStorageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "profilerStorage()" has already been initialized. You cannot pass values the second time you call profilerStorage().');
        }
    
        return $this->profilerStorage;
    }
    
    public function getExtensionAlias(): string
    {
        return 'snc_redis';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('class', $value)) {
            $this->_usedProperties['class'] = true;
            $this->class = new \Symfony\Config\SncRedis\ClassConfig($value['class']);
            unset($value['class']);
        }
    
        if (array_key_exists('clients', $value)) {
            $this->_usedProperties['clients'] = true;
            $this->clients = array_map(function ($v) { return new \Symfony\Config\SncRedis\ClientConfig($v); }, $value['clients']);
            unset($value['clients']);
        }
    
        if (array_key_exists('session', $value)) {
            $this->_usedProperties['session'] = true;
            $this->session = new \Symfony\Config\SncRedis\SessionConfig($value['session']);
            unset($value['session']);
        }
    
        if (array_key_exists('doctrine', $value)) {
            $this->_usedProperties['doctrine'] = true;
            $this->doctrine = new \Symfony\Config\SncRedis\DoctrineConfig($value['doctrine']);
            unset($value['doctrine']);
        }
    
        if (array_key_exists('monolog', $value)) {
            $this->_usedProperties['monolog'] = true;
            $this->monolog = new \Symfony\Config\SncRedis\MonologConfig($value['monolog']);
            unset($value['monolog']);
        }
    
        if (array_key_exists('swiftmailer', $value)) {
            $this->_usedProperties['swiftmailer'] = true;
            $this->swiftmailer = new \Symfony\Config\SncRedis\SwiftmailerConfig($value['swiftmailer']);
            unset($value['swiftmailer']);
        }
    
        if (array_key_exists('profiler_storage', $value)) {
            $this->_usedProperties['profilerStorage'] = true;
            $this->profilerStorage = new \Symfony\Config\SncRedis\ProfilerStorageConfig($value['profiler_storage']);
            unset($value['profiler_storage']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class->toArray();
        }
        if (isset($this->_usedProperties['clients'])) {
            $output['clients'] = array_map(function ($v) { return $v->toArray(); }, $this->clients);
        }
        if (isset($this->_usedProperties['session'])) {
            $output['session'] = $this->session->toArray();
        }
        if (isset($this->_usedProperties['doctrine'])) {
            $output['doctrine'] = $this->doctrine->toArray();
        }
        if (isset($this->_usedProperties['monolog'])) {
            $output['monolog'] = $this->monolog->toArray();
        }
        if (isset($this->_usedProperties['swiftmailer'])) {
            $output['swiftmailer'] = $this->swiftmailer->toArray();
        }
        if (isset($this->_usedProperties['profilerStorage'])) {
            $output['profiler_storage'] = $this->profilerStorage->toArray();
        }
    
        return $output;
    }

}
