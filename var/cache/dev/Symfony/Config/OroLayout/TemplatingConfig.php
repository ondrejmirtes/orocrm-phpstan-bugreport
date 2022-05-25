<?php

namespace Symfony\Config\OroLayout;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'TwigConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class TemplatingConfig 
{
    private $default;
    private $twig;
    private $_usedProperties = [];
    
    /**
     * @default 'twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function default($value): self
    {
        $this->_usedProperties['default'] = true;
        $this->default = $value;
    
        return $this;
    }
    
    public function twig(array $value = []): \Symfony\Config\OroLayout\Templating\TwigConfig
    {
        if (null === $this->twig) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\OroLayout\Templating\TwigConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "twig()" has already been initialized. You cannot pass values the second time you call twig().');
        }
    
        return $this->twig;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('default', $value)) {
            $this->_usedProperties['default'] = true;
            $this->default = $value['default'];
            unset($value['default']);
        }
    
        if (array_key_exists('twig', $value)) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\OroLayout\Templating\TwigConfig($value['twig']);
            unset($value['twig']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['default'])) {
            $output['default'] = $this->default;
        }
        if (isset($this->_usedProperties['twig'])) {
            $output['twig'] = $this->twig->toArray();
        }
    
        return $output;
    }

}
