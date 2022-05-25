<?php

namespace Symfony\Config\NelmioApiDoc;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Sandbox'.\DIRECTORY_SEPARATOR.'BodyFormatConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Sandbox'.\DIRECTORY_SEPARATOR.'RequestFormatConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Sandbox'.\DIRECTORY_SEPARATOR.'AuthenticationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SandboxConfig 
{
    private $enabled;
    private $endpoint;
    private $acceptType;
    private $bodyFormat;
    private $requestFormat;
    private $authentication;
    private $entityToChoice;
    private $_usedProperties = [];
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function endpoint($value): self
    {
        $this->_usedProperties['endpoint'] = true;
        $this->endpoint = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function acceptType($value): self
    {
        $this->_usedProperties['acceptType'] = true;
        $this->acceptType = $value;
    
        return $this;
    }
    
    public function bodyFormat(array $value = []): \Symfony\Config\NelmioApiDoc\Sandbox\BodyFormatConfig
    {
        if (null === $this->bodyFormat) {
            $this->_usedProperties['bodyFormat'] = true;
            $this->bodyFormat = new \Symfony\Config\NelmioApiDoc\Sandbox\BodyFormatConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "bodyFormat()" has already been initialized. You cannot pass values the second time you call bodyFormat().');
        }
    
        return $this->bodyFormat;
    }
    
    public function requestFormat(array $value = []): \Symfony\Config\NelmioApiDoc\Sandbox\RequestFormatConfig
    {
        if (null === $this->requestFormat) {
            $this->_usedProperties['requestFormat'] = true;
            $this->requestFormat = new \Symfony\Config\NelmioApiDoc\Sandbox\RequestFormatConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "requestFormat()" has already been initialized. You cannot pass values the second time you call requestFormat().');
        }
    
        return $this->requestFormat;
    }
    
    public function authentication(array $value = []): \Symfony\Config\NelmioApiDoc\Sandbox\AuthenticationConfig
    {
        if (null === $this->authentication) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication = new \Symfony\Config\NelmioApiDoc\Sandbox\AuthenticationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "authentication()" has already been initialized. You cannot pass values the second time you call authentication().');
        }
    
        return $this->authentication;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function entityToChoice($value): self
    {
        $this->_usedProperties['entityToChoice'] = true;
        $this->entityToChoice = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (array_key_exists('endpoint', $value)) {
            $this->_usedProperties['endpoint'] = true;
            $this->endpoint = $value['endpoint'];
            unset($value['endpoint']);
        }
    
        if (array_key_exists('accept_type', $value)) {
            $this->_usedProperties['acceptType'] = true;
            $this->acceptType = $value['accept_type'];
            unset($value['accept_type']);
        }
    
        if (array_key_exists('body_format', $value)) {
            $this->_usedProperties['bodyFormat'] = true;
            $this->bodyFormat = new \Symfony\Config\NelmioApiDoc\Sandbox\BodyFormatConfig($value['body_format']);
            unset($value['body_format']);
        }
    
        if (array_key_exists('request_format', $value)) {
            $this->_usedProperties['requestFormat'] = true;
            $this->requestFormat = new \Symfony\Config\NelmioApiDoc\Sandbox\RequestFormatConfig($value['request_format']);
            unset($value['request_format']);
        }
    
        if (array_key_exists('authentication', $value)) {
            $this->_usedProperties['authentication'] = true;
            $this->authentication = new \Symfony\Config\NelmioApiDoc\Sandbox\AuthenticationConfig($value['authentication']);
            unset($value['authentication']);
        }
    
        if (array_key_exists('entity_to_choice', $value)) {
            $this->_usedProperties['entityToChoice'] = true;
            $this->entityToChoice = $value['entity_to_choice'];
            unset($value['entity_to_choice']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['endpoint'])) {
            $output['endpoint'] = $this->endpoint;
        }
        if (isset($this->_usedProperties['acceptType'])) {
            $output['accept_type'] = $this->acceptType;
        }
        if (isset($this->_usedProperties['bodyFormat'])) {
            $output['body_format'] = $this->bodyFormat->toArray();
        }
        if (isset($this->_usedProperties['requestFormat'])) {
            $output['request_format'] = $this->requestFormat->toArray();
        }
        if (isset($this->_usedProperties['authentication'])) {
            $output['authentication'] = $this->authentication->toArray();
        }
        if (isset($this->_usedProperties['entityToChoice'])) {
            $output['entity_to_choice'] = $this->entityToChoice;
        }
    
        return $output;
    }

}
