<?php

namespace Symfony\Config\OroApi;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiDocViewsConfig'.\DIRECTORY_SEPARATOR.'HeadersConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class ApiDocViewsConfig 
{
    private $label;
    private $default;
    private $underlyingView;
    private $requestType;
    private $documentationPath;
    private $htmlFormatter;
    private $sandbox;
    private $headers;
    private $dataTypes;
    private $_usedProperties = [];
    
    /**
     * The view label.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function label($value): self
    {
        $this->_usedProperties['label'] = true;
        $this->label = $value;
    
        return $this;
    }
    
    /**
     * Whether this view is default one.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function default($value): self
    {
        $this->_usedProperties['default'] = true;
        $this->default = $value;
    
        return $this;
    }
    
    /**
     * The name of the underlying view.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function underlyingView($value): self
    {
        $this->_usedProperties['underlyingView'] = true;
        $this->underlyingView = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function requestType($value): self
    {
        $this->_usedProperties['requestType'] = true;
        $this->requestType = $value;
    
        return $this;
    }
    
    /**
     * The URL to the API documentation for this view.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function documentationPath($value): self
    {
        $this->_usedProperties['documentationPath'] = true;
        $this->documentationPath = $value;
    
        return $this;
    }
    
    /**
     * The HTML formatter that should be used by this view.
     * @default 'oro_api.api_doc.formatter.html_formatter'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function htmlFormatter($value): self
    {
        $this->_usedProperties['htmlFormatter'] = true;
        $this->htmlFormatter = $value;
    
        return $this;
    }
    
    /**
     * Whether the sandbox should have a link to this view.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sandbox($value): self
    {
        $this->_usedProperties['sandbox'] = true;
        $this->sandbox = $value;
    
        return $this;
    }
    
    public function headers(string $name, array $value = []): \Symfony\Config\OroApi\ApiDocViewsConfig\HeadersConfig
    {
        if (!isset($this->headers[$name])) {
            $this->_usedProperties['headers'] = true;
    
            return $this->headers[$name] = new \Symfony\Config\OroApi\ApiDocViewsConfig\HeadersConfig($value);
        }
        if ([] === $value) {
            return $this->headers[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "headers()" has already been initialized. You cannot pass values the second time you call headers().');
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dataTypes(string $name, $value): self
    {
        $this->_usedProperties['dataTypes'] = true;
        $this->dataTypes[$name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('label', $value)) {
            $this->_usedProperties['label'] = true;
            $this->label = $value['label'];
            unset($value['label']);
        }
    
        if (array_key_exists('default', $value)) {
            $this->_usedProperties['default'] = true;
            $this->default = $value['default'];
            unset($value['default']);
        }
    
        if (array_key_exists('underlying_view', $value)) {
            $this->_usedProperties['underlyingView'] = true;
            $this->underlyingView = $value['underlying_view'];
            unset($value['underlying_view']);
        }
    
        if (array_key_exists('request_type', $value)) {
            $this->_usedProperties['requestType'] = true;
            $this->requestType = $value['request_type'];
            unset($value['request_type']);
        }
    
        if (array_key_exists('documentation_path', $value)) {
            $this->_usedProperties['documentationPath'] = true;
            $this->documentationPath = $value['documentation_path'];
            unset($value['documentation_path']);
        }
    
        if (array_key_exists('html_formatter', $value)) {
            $this->_usedProperties['htmlFormatter'] = true;
            $this->htmlFormatter = $value['html_formatter'];
            unset($value['html_formatter']);
        }
    
        if (array_key_exists('sandbox', $value)) {
            $this->_usedProperties['sandbox'] = true;
            $this->sandbox = $value['sandbox'];
            unset($value['sandbox']);
        }
    
        if (array_key_exists('headers', $value)) {
            $this->_usedProperties['headers'] = true;
            $this->headers = array_map(function ($v) { return new \Symfony\Config\OroApi\ApiDocViewsConfig\HeadersConfig($v); }, $value['headers']);
            unset($value['headers']);
        }
    
        if (array_key_exists('data_types', $value)) {
            $this->_usedProperties['dataTypes'] = true;
            $this->dataTypes = $value['data_types'];
            unset($value['data_types']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['label'])) {
            $output['label'] = $this->label;
        }
        if (isset($this->_usedProperties['default'])) {
            $output['default'] = $this->default;
        }
        if (isset($this->_usedProperties['underlyingView'])) {
            $output['underlying_view'] = $this->underlyingView;
        }
        if (isset($this->_usedProperties['requestType'])) {
            $output['request_type'] = $this->requestType;
        }
        if (isset($this->_usedProperties['documentationPath'])) {
            $output['documentation_path'] = $this->documentationPath;
        }
        if (isset($this->_usedProperties['htmlFormatter'])) {
            $output['html_formatter'] = $this->htmlFormatter;
        }
        if (isset($this->_usedProperties['sandbox'])) {
            $output['sandbox'] = $this->sandbox;
        }
        if (isset($this->_usedProperties['headers'])) {
            $output['headers'] = array_map(function ($v) { return $v->toArray(); }, $this->headers);
        }
        if (isset($this->_usedProperties['dataTypes'])) {
            $output['data_types'] = $this->dataTypes;
        }
    
        return $output;
    }

}
