<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroEntityExtendConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $backup;
    private $_usedProperties = [];
    
    /**
     * @default '%kernel.project_dir%/var/backup'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function backup($value): self
    {
        $this->_usedProperties['backup'] = true;
        $this->backup = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_entity_extend';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('backup', $value)) {
            $this->_usedProperties['backup'] = true;
            $this->backup = $value['backup'];
            unset($value['backup']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['backup'])) {
            $output['backup'] = $this->backup;
        }
    
        return $output;
    }

}
