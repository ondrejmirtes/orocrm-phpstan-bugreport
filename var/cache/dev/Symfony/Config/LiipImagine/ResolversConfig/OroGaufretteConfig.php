<?php

namespace Symfony\Config\LiipImagine\ResolversConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroGaufretteConfig 
{
    private $fileManagerService;
    private $urlPrefix;
    private $cachePrefix;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fileManagerService($value): self
    {
        $this->_usedProperties['fileManagerService'] = true;
        $this->fileManagerService = $value;
    
        return $this;
    }
    
    /**
     * @default 'media/cache'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function urlPrefix($value): self
    {
        $this->_usedProperties['urlPrefix'] = true;
        $this->urlPrefix = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cachePrefix($value): self
    {
        $this->_usedProperties['cachePrefix'] = true;
        $this->cachePrefix = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('file_manager_service', $value)) {
            $this->_usedProperties['fileManagerService'] = true;
            $this->fileManagerService = $value['file_manager_service'];
            unset($value['file_manager_service']);
        }
    
        if (array_key_exists('url_prefix', $value)) {
            $this->_usedProperties['urlPrefix'] = true;
            $this->urlPrefix = $value['url_prefix'];
            unset($value['url_prefix']);
        }
    
        if (array_key_exists('cache_prefix', $value)) {
            $this->_usedProperties['cachePrefix'] = true;
            $this->cachePrefix = $value['cache_prefix'];
            unset($value['cache_prefix']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['fileManagerService'])) {
            $output['file_manager_service'] = $this->fileManagerService;
        }
        if (isset($this->_usedProperties['urlPrefix'])) {
            $output['url_prefix'] = $this->urlPrefix;
        }
        if (isset($this->_usedProperties['cachePrefix'])) {
            $output['cache_prefix'] = $this->cachePrefix;
        }
    
        return $output;
    }

}
