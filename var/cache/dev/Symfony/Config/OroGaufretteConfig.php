<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroGaufrette'.\DIRECTORY_SEPARATOR.'StreamWrapperConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroGaufretteConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $streamWrapper;
    private $_usedProperties = [];
    
    public function streamWrapper(array $value = []): \Symfony\Config\OroGaufrette\StreamWrapperConfig
    {
        if (null === $this->streamWrapper) {
            $this->_usedProperties['streamWrapper'] = true;
            $this->streamWrapper = new \Symfony\Config\OroGaufrette\StreamWrapperConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "streamWrapper()" has already been initialized. You cannot pass values the second time you call streamWrapper().');
        }
    
        return $this->streamWrapper;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_gaufrette';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('stream_wrapper', $value)) {
            $this->_usedProperties['streamWrapper'] = true;
            $this->streamWrapper = new \Symfony\Config\OroGaufrette\StreamWrapperConfig($value['stream_wrapper']);
            unset($value['stream_wrapper']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['streamWrapper'])) {
            $output['stream_wrapper'] = $this->streamWrapper->toArray();
        }
    
        return $output;
    }

}
