<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroActivity'.\DIRECTORY_SEPARATOR.'ApiConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroActivityConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $api;
    private $_usedProperties = [];
    
    public function api(array $value = []): \Symfony\Config\OroActivity\ApiConfig
    {
        if (null === $this->api) {
            $this->_usedProperties['api'] = true;
            $this->api = new \Symfony\Config\OroActivity\ApiConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "api()" has already been initialized. You cannot pass values the second time you call api().');
        }
    
        return $this->api;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_activity';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('api', $value)) {
            $this->_usedProperties['api'] = true;
            $this->api = new \Symfony\Config\OroActivity\ApiConfig($value['api']);
            unset($value['api']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['api'])) {
            $output['api'] = $this->api->toArray();
        }
    
        return $output;
    }

}
