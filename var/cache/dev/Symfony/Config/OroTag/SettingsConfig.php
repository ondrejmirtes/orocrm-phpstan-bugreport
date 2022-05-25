<?php

namespace Symfony\Config\OroTag;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'TaxonomyColorsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $taxonomyColors;
    private $_usedProperties = [];
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function resolved($value): self
    {
        $this->_usedProperties['resolved'] = true;
        $this->resolved = $value;
    
        return $this;
    }
    
    public function taxonomyColors(array $value = []): \Symfony\Config\OroTag\Settings\TaxonomyColorsConfig
    {
        if (null === $this->taxonomyColors) {
            $this->_usedProperties['taxonomyColors'] = true;
            $this->taxonomyColors = new \Symfony\Config\OroTag\Settings\TaxonomyColorsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "taxonomyColors()" has already been initialized. You cannot pass values the second time you call taxonomyColors().');
        }
    
        return $this->taxonomyColors;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('taxonomy_colors', $value)) {
            $this->_usedProperties['taxonomyColors'] = true;
            $this->taxonomyColors = new \Symfony\Config\OroTag\Settings\TaxonomyColorsConfig($value['taxonomy_colors']);
            unset($value['taxonomy_colors']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['resolved'])) {
            $output['resolved'] = $this->resolved;
        }
        if (isset($this->_usedProperties['taxonomyColors'])) {
            $output['taxonomy_colors'] = $this->taxonomyColors->toArray();
        }
    
        return $output;
    }

}
