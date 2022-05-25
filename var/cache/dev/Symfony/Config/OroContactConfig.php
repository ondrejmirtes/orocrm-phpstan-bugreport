<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroContact'.\DIRECTORY_SEPARATOR.'SocialUrlFormatConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroContactConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $socialUrlFormat;
    private $_usedProperties = [];
    
    public function socialUrlFormat(array $value = []): \Symfony\Config\OroContact\SocialUrlFormatConfig
    {
        if (null === $this->socialUrlFormat) {
            $this->_usedProperties['socialUrlFormat'] = true;
            $this->socialUrlFormat = new \Symfony\Config\OroContact\SocialUrlFormatConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "socialUrlFormat()" has already been initialized. You cannot pass values the second time you call socialUrlFormat().');
        }
    
        return $this->socialUrlFormat;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_contact';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('social_url_format', $value)) {
            $this->_usedProperties['socialUrlFormat'] = true;
            $this->socialUrlFormat = new \Symfony\Config\OroContact\SocialUrlFormatConfig($value['social_url_format']);
            unset($value['social_url_format']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['socialUrlFormat'])) {
            $output['social_url_format'] = $this->socialUrlFormat->toArray();
        }
    
        return $output;
    }

}
