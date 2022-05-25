<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroEntityConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultQueryCacheLifetime;
    private $_usedProperties = [];
    
    /**
     * Default doctrine`s query cache lifetime
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function defaultQueryCacheLifetime($value): self
    {
        $this->_usedProperties['defaultQueryCacheLifetime'] = true;
        $this->defaultQueryCacheLifetime = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_entity';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('default_query_cache_lifetime', $value)) {
            $this->_usedProperties['defaultQueryCacheLifetime'] = true;
            $this->defaultQueryCacheLifetime = $value['default_query_cache_lifetime'];
            unset($value['default_query_cache_lifetime']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultQueryCacheLifetime'])) {
            $output['default_query_cache_lifetime'] = $this->defaultQueryCacheLifetime;
        }
    
        return $output;
    }

}
