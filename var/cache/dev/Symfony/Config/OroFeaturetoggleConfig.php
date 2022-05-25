<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroFeaturetoggleConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $strategy;
    private $allowIfAllAbstain;
    private $allowIfEqualGrantedDenied;
    private $_usedProperties = [];
    
    /**
     * @default 'unanimous'
     * @param ParamConfigurator|'affirmative'|'consensus'|'unanimous' $value
     * @return $this
     */
    public function strategy($value): self
    {
        $this->_usedProperties['strategy'] = true;
        $this->strategy = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowIfAllAbstain($value): self
    {
        $this->_usedProperties['allowIfAllAbstain'] = true;
        $this->allowIfAllAbstain = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowIfEqualGrantedDenied($value): self
    {
        $this->_usedProperties['allowIfEqualGrantedDenied'] = true;
        $this->allowIfEqualGrantedDenied = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_featuretoggle';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('strategy', $value)) {
            $this->_usedProperties['strategy'] = true;
            $this->strategy = $value['strategy'];
            unset($value['strategy']);
        }
    
        if (array_key_exists('allow_if_all_abstain', $value)) {
            $this->_usedProperties['allowIfAllAbstain'] = true;
            $this->allowIfAllAbstain = $value['allow_if_all_abstain'];
            unset($value['allow_if_all_abstain']);
        }
    
        if (array_key_exists('allow_if_equal_granted_denied', $value)) {
            $this->_usedProperties['allowIfEqualGrantedDenied'] = true;
            $this->allowIfEqualGrantedDenied = $value['allow_if_equal_granted_denied'];
            unset($value['allow_if_equal_granted_denied']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['strategy'])) {
            $output['strategy'] = $this->strategy;
        }
        if (isset($this->_usedProperties['allowIfAllAbstain'])) {
            $output['allow_if_all_abstain'] = $this->allowIfAllAbstain;
        }
        if (isset($this->_usedProperties['allowIfEqualGrantedDenied'])) {
            $output['allow_if_equal_granted_denied'] = $this->allowIfEqualGrantedDenied;
        }
    
        return $output;
    }

}
