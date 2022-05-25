<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'ConfigFilesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'ApiDocCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'ApiDocViewsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'ActionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'FiltersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'FormTypeGuessesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'CorsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'ApiFirewallsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'OroApi'.\DIRECTORY_SEPARATOR.'BatchApiConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroApiConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $settings;
    private $restApiPrefix;
    private $restApiPattern;
    private $configMaxNestingLevel;
    private $defaultPageSize;
    private $maxEntities;
    private $maxRelatedEntities;
    private $maxDeleteEntities;
    private $configFiles;
    private $configExtensions;
    private $apiDocCache;
    private $apiDocViews;
    private $documentationPath;
    private $apiDocDataTypes;
    private $actions;
    private $filters;
    private $filterOperators;
    private $formTypes;
    private $formTypeExtensions;
    private $formTypeGuessers;
    private $formTypeGuesses;
    private $errorTitleOverrides;
    private $cors;
    private $apiFirewalls;
    private $batchApi;
    private $_usedProperties = [];
    
    public function settings(array $value = []): \Symfony\Config\OroApi\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroApi\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    /**
     * The prefix of REST API URLs.
     * @default '/api/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function restApiPrefix($value): self
    {
        $this->_usedProperties['restApiPrefix'] = true;
        $this->restApiPrefix = $value;
    
        return $this;
    }
    
    /**
     * The regular expression pattern to which REST API URLs are matched.
     * @default '^/api/(?!(rest|doc)($|/.*))'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function restApiPattern($value): self
    {
        $this->_usedProperties['restApiPattern'] = true;
        $this->restApiPattern = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of nesting target entities that can be specified in "Resources/config/oro/api.yml".
     * @default 3
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function configMaxNestingLevel($value): self
    {
        $this->_usedProperties['configMaxNestingLevel'] = true;
        $this->configMaxNestingLevel = $value;
    
        return $this;
    }
    
    /**
     * The default page size. It is used when the page size is not specified in a request explicitly.
     * @default 10
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function defaultPageSize($value): self
    {
        $this->_usedProperties['defaultPageSize'] = true;
        $this->defaultPageSize = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of primary entities that can be retrieved by a request.
     * @default -1
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxEntities($value): self
    {
        $this->_usedProperties['maxEntities'] = true;
        $this->maxEntities = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of related entities that can be retrieved by a request.
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxRelatedEntities($value): self
    {
        $this->_usedProperties['maxRelatedEntities'] = true;
        $this->maxRelatedEntities = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of entities that can be deleted by one request.
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxDeleteEntities($value): self
    {
        $this->_usedProperties['maxDeleteEntities'] = true;
        $this->maxDeleteEntities = $value;
    
        return $this;
    }
    
    public function configFiles(string $name, array $value = []): \Symfony\Config\OroApi\ConfigFilesConfig
    {
        if (!isset($this->configFiles[$name])) {
            $this->_usedProperties['configFiles'] = true;
    
            return $this->configFiles[$name] = new \Symfony\Config\OroApi\ConfigFilesConfig($value);
        }
        if ([] === $value) {
            return $this->configFiles[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "configFiles()" has already been initialized. You cannot pass values the second time you call configFiles().');
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function configExtensions($value): self
    {
        $this->_usedProperties['configExtensions'] = true;
        $this->configExtensions = $value;
    
        return $this;
    }
    
    public function apiDocCache(array $value = []): \Symfony\Config\OroApi\ApiDocCacheConfig
    {
        if (null === $this->apiDocCache) {
            $this->_usedProperties['apiDocCache'] = true;
            $this->apiDocCache = new \Symfony\Config\OroApi\ApiDocCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "apiDocCache()" has already been initialized. You cannot pass values the second time you call apiDocCache().');
        }
    
        return $this->apiDocCache;
    }
    
    public function apiDocViews(string $name, array $value = []): \Symfony\Config\OroApi\ApiDocViewsConfig
    {
        if (!isset($this->apiDocViews[$name])) {
            $this->_usedProperties['apiDocViews'] = true;
    
            return $this->apiDocViews[$name] = new \Symfony\Config\OroApi\ApiDocViewsConfig($value);
        }
        if ([] === $value) {
            return $this->apiDocViews[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "apiDocViews()" has already been initialized. You cannot pass values the second time you call apiDocViews().');
    }
    
    /**
     * The URL to the API documentation that should be used for API views that does not have own documentation.
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
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiDocDataTypes(string $name, $value): self
    {
        $this->_usedProperties['apiDocDataTypes'] = true;
        $this->apiDocDataTypes[$name] = $value;
    
        return $this;
    }
    
    public function actions(string $name, array $value = []): \Symfony\Config\OroApi\ActionsConfig
    {
        if (!isset($this->actions[$name])) {
            $this->_usedProperties['actions'] = true;
    
            return $this->actions[$name] = new \Symfony\Config\OroApi\ActionsConfig($value);
        }
        if ([] === $value) {
            return $this->actions[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "actions()" has already been initialized. You cannot pass values the second time you call actions().');
    }
    
    public function filters(string $name, array $value = []): \Symfony\Config\OroApi\FiltersConfig
    {
        if (!isset($this->filters[$name])) {
            $this->_usedProperties['filters'] = true;
    
            return $this->filters[$name] = new \Symfony\Config\OroApi\FiltersConfig($value);
        }
        if ([] === $value) {
            return $this->filters[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "filters()" has already been initialized. You cannot pass values the second time you call filters().');
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterOperators(string $name, $value): self
    {
        $this->_usedProperties['filterOperators'] = true;
        $this->filterOperators[$name] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function formTypes($value): self
    {
        $this->_usedProperties['formTypes'] = true;
        $this->formTypes = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function formTypeExtensions($value): self
    {
        $this->_usedProperties['formTypeExtensions'] = true;
        $this->formTypeExtensions = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function formTypeGuessers($value): self
    {
        $this->_usedProperties['formTypeGuessers'] = true;
        $this->formTypeGuessers = $value;
    
        return $this;
    }
    
    public function formTypeGuesses(string $name, array $value = []): \Symfony\Config\OroApi\FormTypeGuessesConfig
    {
        if (!isset($this->formTypeGuesses[$name])) {
            $this->_usedProperties['formTypeGuesses'] = true;
    
            return $this->formTypeGuesses[$name] = new \Symfony\Config\OroApi\FormTypeGuessesConfig($value);
        }
        if ([] === $value) {
            return $this->formTypeGuesses[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "formTypeGuesses()" has already been initialized. You cannot pass values the second time you call formTypeGuesses().');
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function errorTitleOverrides(string $name, $value): self
    {
        $this->_usedProperties['errorTitleOverrides'] = true;
        $this->errorTitleOverrides[$name] = $value;
    
        return $this;
    }
    
    public function cors(array $value = []): \Symfony\Config\OroApi\CorsConfig
    {
        if (null === $this->cors) {
            $this->_usedProperties['cors'] = true;
            $this->cors = new \Symfony\Config\OroApi\CorsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cors()" has already been initialized. You cannot pass values the second time you call cors().');
        }
    
        return $this->cors;
    }
    
    public function apiFirewalls(string $name, array $value = []): \Symfony\Config\OroApi\ApiFirewallsConfig
    {
        if (!isset($this->apiFirewalls[$name])) {
            $this->_usedProperties['apiFirewalls'] = true;
    
            return $this->apiFirewalls[$name] = new \Symfony\Config\OroApi\ApiFirewallsConfig($value);
        }
        if ([] === $value) {
            return $this->apiFirewalls[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "apiFirewalls()" has already been initialized. You cannot pass values the second time you call apiFirewalls().');
    }
    
    public function batchApi(array $value = []): \Symfony\Config\OroApi\BatchApiConfig
    {
        if (null === $this->batchApi) {
            $this->_usedProperties['batchApi'] = true;
            $this->batchApi = new \Symfony\Config\OroApi\BatchApiConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "batchApi()" has already been initialized. You cannot pass values the second time you call batchApi().');
        }
    
        return $this->batchApi;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_api';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroApi\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if (array_key_exists('rest_api_prefix', $value)) {
            $this->_usedProperties['restApiPrefix'] = true;
            $this->restApiPrefix = $value['rest_api_prefix'];
            unset($value['rest_api_prefix']);
        }
    
        if (array_key_exists('rest_api_pattern', $value)) {
            $this->_usedProperties['restApiPattern'] = true;
            $this->restApiPattern = $value['rest_api_pattern'];
            unset($value['rest_api_pattern']);
        }
    
        if (array_key_exists('config_max_nesting_level', $value)) {
            $this->_usedProperties['configMaxNestingLevel'] = true;
            $this->configMaxNestingLevel = $value['config_max_nesting_level'];
            unset($value['config_max_nesting_level']);
        }
    
        if (array_key_exists('default_page_size', $value)) {
            $this->_usedProperties['defaultPageSize'] = true;
            $this->defaultPageSize = $value['default_page_size'];
            unset($value['default_page_size']);
        }
    
        if (array_key_exists('max_entities', $value)) {
            $this->_usedProperties['maxEntities'] = true;
            $this->maxEntities = $value['max_entities'];
            unset($value['max_entities']);
        }
    
        if (array_key_exists('max_related_entities', $value)) {
            $this->_usedProperties['maxRelatedEntities'] = true;
            $this->maxRelatedEntities = $value['max_related_entities'];
            unset($value['max_related_entities']);
        }
    
        if (array_key_exists('max_delete_entities', $value)) {
            $this->_usedProperties['maxDeleteEntities'] = true;
            $this->maxDeleteEntities = $value['max_delete_entities'];
            unset($value['max_delete_entities']);
        }
    
        if (array_key_exists('config_files', $value)) {
            $this->_usedProperties['configFiles'] = true;
            $this->configFiles = array_map(function ($v) { return new \Symfony\Config\OroApi\ConfigFilesConfig($v); }, $value['config_files']);
            unset($value['config_files']);
        }
    
        if (array_key_exists('config_extensions', $value)) {
            $this->_usedProperties['configExtensions'] = true;
            $this->configExtensions = $value['config_extensions'];
            unset($value['config_extensions']);
        }
    
        if (array_key_exists('api_doc_cache', $value)) {
            $this->_usedProperties['apiDocCache'] = true;
            $this->apiDocCache = new \Symfony\Config\OroApi\ApiDocCacheConfig($value['api_doc_cache']);
            unset($value['api_doc_cache']);
        }
    
        if (array_key_exists('api_doc_views', $value)) {
            $this->_usedProperties['apiDocViews'] = true;
            $this->apiDocViews = array_map(function ($v) { return new \Symfony\Config\OroApi\ApiDocViewsConfig($v); }, $value['api_doc_views']);
            unset($value['api_doc_views']);
        }
    
        if (array_key_exists('documentation_path', $value)) {
            $this->_usedProperties['documentationPath'] = true;
            $this->documentationPath = $value['documentation_path'];
            unset($value['documentation_path']);
        }
    
        if (array_key_exists('api_doc_data_types', $value)) {
            $this->_usedProperties['apiDocDataTypes'] = true;
            $this->apiDocDataTypes = $value['api_doc_data_types'];
            unset($value['api_doc_data_types']);
        }
    
        if (array_key_exists('actions', $value)) {
            $this->_usedProperties['actions'] = true;
            $this->actions = array_map(function ($v) { return new \Symfony\Config\OroApi\ActionsConfig($v); }, $value['actions']);
            unset($value['actions']);
        }
    
        if (array_key_exists('filters', $value)) {
            $this->_usedProperties['filters'] = true;
            $this->filters = array_map(function ($v) { return new \Symfony\Config\OroApi\FiltersConfig($v); }, $value['filters']);
            unset($value['filters']);
        }
    
        if (array_key_exists('filter_operators', $value)) {
            $this->_usedProperties['filterOperators'] = true;
            $this->filterOperators = $value['filter_operators'];
            unset($value['filter_operators']);
        }
    
        if (array_key_exists('form_types', $value)) {
            $this->_usedProperties['formTypes'] = true;
            $this->formTypes = $value['form_types'];
            unset($value['form_types']);
        }
    
        if (array_key_exists('form_type_extensions', $value)) {
            $this->_usedProperties['formTypeExtensions'] = true;
            $this->formTypeExtensions = $value['form_type_extensions'];
            unset($value['form_type_extensions']);
        }
    
        if (array_key_exists('form_type_guessers', $value)) {
            $this->_usedProperties['formTypeGuessers'] = true;
            $this->formTypeGuessers = $value['form_type_guessers'];
            unset($value['form_type_guessers']);
        }
    
        if (array_key_exists('form_type_guesses', $value)) {
            $this->_usedProperties['formTypeGuesses'] = true;
            $this->formTypeGuesses = array_map(function ($v) { return new \Symfony\Config\OroApi\FormTypeGuessesConfig($v); }, $value['form_type_guesses']);
            unset($value['form_type_guesses']);
        }
    
        if (array_key_exists('error_title_overrides', $value)) {
            $this->_usedProperties['errorTitleOverrides'] = true;
            $this->errorTitleOverrides = $value['error_title_overrides'];
            unset($value['error_title_overrides']);
        }
    
        if (array_key_exists('cors', $value)) {
            $this->_usedProperties['cors'] = true;
            $this->cors = new \Symfony\Config\OroApi\CorsConfig($value['cors']);
            unset($value['cors']);
        }
    
        if (array_key_exists('api_firewalls', $value)) {
            $this->_usedProperties['apiFirewalls'] = true;
            $this->apiFirewalls = array_map(function ($v) { return new \Symfony\Config\OroApi\ApiFirewallsConfig($v); }, $value['api_firewalls']);
            unset($value['api_firewalls']);
        }
    
        if (array_key_exists('batch_api', $value)) {
            $this->_usedProperties['batchApi'] = true;
            $this->batchApi = new \Symfony\Config\OroApi\BatchApiConfig($value['batch_api']);
            unset($value['batch_api']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
        if (isset($this->_usedProperties['restApiPrefix'])) {
            $output['rest_api_prefix'] = $this->restApiPrefix;
        }
        if (isset($this->_usedProperties['restApiPattern'])) {
            $output['rest_api_pattern'] = $this->restApiPattern;
        }
        if (isset($this->_usedProperties['configMaxNestingLevel'])) {
            $output['config_max_nesting_level'] = $this->configMaxNestingLevel;
        }
        if (isset($this->_usedProperties['defaultPageSize'])) {
            $output['default_page_size'] = $this->defaultPageSize;
        }
        if (isset($this->_usedProperties['maxEntities'])) {
            $output['max_entities'] = $this->maxEntities;
        }
        if (isset($this->_usedProperties['maxRelatedEntities'])) {
            $output['max_related_entities'] = $this->maxRelatedEntities;
        }
        if (isset($this->_usedProperties['maxDeleteEntities'])) {
            $output['max_delete_entities'] = $this->maxDeleteEntities;
        }
        if (isset($this->_usedProperties['configFiles'])) {
            $output['config_files'] = array_map(function ($v) { return $v->toArray(); }, $this->configFiles);
        }
        if (isset($this->_usedProperties['configExtensions'])) {
            $output['config_extensions'] = $this->configExtensions;
        }
        if (isset($this->_usedProperties['apiDocCache'])) {
            $output['api_doc_cache'] = $this->apiDocCache->toArray();
        }
        if (isset($this->_usedProperties['apiDocViews'])) {
            $output['api_doc_views'] = array_map(function ($v) { return $v->toArray(); }, $this->apiDocViews);
        }
        if (isset($this->_usedProperties['documentationPath'])) {
            $output['documentation_path'] = $this->documentationPath;
        }
        if (isset($this->_usedProperties['apiDocDataTypes'])) {
            $output['api_doc_data_types'] = $this->apiDocDataTypes;
        }
        if (isset($this->_usedProperties['actions'])) {
            $output['actions'] = array_map(function ($v) { return $v->toArray(); }, $this->actions);
        }
        if (isset($this->_usedProperties['filters'])) {
            $output['filters'] = array_map(function ($v) { return $v->toArray(); }, $this->filters);
        }
        if (isset($this->_usedProperties['filterOperators'])) {
            $output['filter_operators'] = $this->filterOperators;
        }
        if (isset($this->_usedProperties['formTypes'])) {
            $output['form_types'] = $this->formTypes;
        }
        if (isset($this->_usedProperties['formTypeExtensions'])) {
            $output['form_type_extensions'] = $this->formTypeExtensions;
        }
        if (isset($this->_usedProperties['formTypeGuessers'])) {
            $output['form_type_guessers'] = $this->formTypeGuessers;
        }
        if (isset($this->_usedProperties['formTypeGuesses'])) {
            $output['form_type_guesses'] = array_map(function ($v) { return $v->toArray(); }, $this->formTypeGuesses);
        }
        if (isset($this->_usedProperties['errorTitleOverrides'])) {
            $output['error_title_overrides'] = $this->errorTitleOverrides;
        }
        if (isset($this->_usedProperties['cors'])) {
            $output['cors'] = $this->cors->toArray();
        }
        if (isset($this->_usedProperties['apiFirewalls'])) {
            $output['api_firewalls'] = array_map(function ($v) { return $v->toArray(); }, $this->apiFirewalls);
        }
        if (isset($this->_usedProperties['batchApi'])) {
            $output['batch_api'] = $this->batchApi->toArray();
        }
    
        return $output;
    }

}
