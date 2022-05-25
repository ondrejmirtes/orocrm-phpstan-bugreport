<?php

namespace Symfony\Config\OroSecurity;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SymfonyProfilerCollectionOfVoterDecisionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $symfonyProfilerCollectionOfVoterDecisions;
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
    
    public function symfonyProfilerCollectionOfVoterDecisions(array $value = []): \Symfony\Config\OroSecurity\Settings\SymfonyProfilerCollectionOfVoterDecisionsConfig
    {
        if (null === $this->symfonyProfilerCollectionOfVoterDecisions) {
            $this->_usedProperties['symfonyProfilerCollectionOfVoterDecisions'] = true;
            $this->symfonyProfilerCollectionOfVoterDecisions = new \Symfony\Config\OroSecurity\Settings\SymfonyProfilerCollectionOfVoterDecisionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "symfonyProfilerCollectionOfVoterDecisions()" has already been initialized. You cannot pass values the second time you call symfonyProfilerCollectionOfVoterDecisions().');
        }
    
        return $this->symfonyProfilerCollectionOfVoterDecisions;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('symfony_profiler_collection_of_voter_decisions', $value)) {
            $this->_usedProperties['symfonyProfilerCollectionOfVoterDecisions'] = true;
            $this->symfonyProfilerCollectionOfVoterDecisions = new \Symfony\Config\OroSecurity\Settings\SymfonyProfilerCollectionOfVoterDecisionsConfig($value['symfony_profiler_collection_of_voter_decisions']);
            unset($value['symfony_profiler_collection_of_voter_decisions']);
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
        if (isset($this->_usedProperties['symfonyProfilerCollectionOfVoterDecisions'])) {
            $output['symfony_profiler_collection_of_voter_decisions'] = $this->symfonyProfilerCollectionOfVoterDecisions->toArray();
        }
    
        return $output;
    }

}
