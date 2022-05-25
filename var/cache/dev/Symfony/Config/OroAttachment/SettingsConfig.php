<?php

namespace Symfony\Config\OroAttachment;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'MaxsizeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'UploadFileMimeTypesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'UploadImageMimeTypesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ProcessorsAllowedConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'JpegQualityConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PngQualityConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'WebpQualityConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'ExternalFileAllowedUrlsRegexpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'OriginalFileNamesEnabledConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $maxsize;
    private $uploadFileMimeTypes;
    private $uploadImageMimeTypes;
    private $processorsAllowed;
    private $jpegQuality;
    private $pngQuality;
    private $webpQuality;
    private $externalFileAllowedUrlsRegexp;
    private $originalFileNamesEnabled;
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
    
    public function maxsize(array $value = []): \Symfony\Config\OroAttachment\Settings\MaxsizeConfig
    {
        if (null === $this->maxsize) {
            $this->_usedProperties['maxsize'] = true;
            $this->maxsize = new \Symfony\Config\OroAttachment\Settings\MaxsizeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "maxsize()" has already been initialized. You cannot pass values the second time you call maxsize().');
        }
    
        return $this->maxsize;
    }
    
    public function uploadFileMimeTypes(array $value = []): \Symfony\Config\OroAttachment\Settings\UploadFileMimeTypesConfig
    {
        if (null === $this->uploadFileMimeTypes) {
            $this->_usedProperties['uploadFileMimeTypes'] = true;
            $this->uploadFileMimeTypes = new \Symfony\Config\OroAttachment\Settings\UploadFileMimeTypesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "uploadFileMimeTypes()" has already been initialized. You cannot pass values the second time you call uploadFileMimeTypes().');
        }
    
        return $this->uploadFileMimeTypes;
    }
    
    public function uploadImageMimeTypes(array $value = []): \Symfony\Config\OroAttachment\Settings\UploadImageMimeTypesConfig
    {
        if (null === $this->uploadImageMimeTypes) {
            $this->_usedProperties['uploadImageMimeTypes'] = true;
            $this->uploadImageMimeTypes = new \Symfony\Config\OroAttachment\Settings\UploadImageMimeTypesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "uploadImageMimeTypes()" has already been initialized. You cannot pass values the second time you call uploadImageMimeTypes().');
        }
    
        return $this->uploadImageMimeTypes;
    }
    
    public function processorsAllowed(array $value = []): \Symfony\Config\OroAttachment\Settings\ProcessorsAllowedConfig
    {
        if (null === $this->processorsAllowed) {
            $this->_usedProperties['processorsAllowed'] = true;
            $this->processorsAllowed = new \Symfony\Config\OroAttachment\Settings\ProcessorsAllowedConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "processorsAllowed()" has already been initialized. You cannot pass values the second time you call processorsAllowed().');
        }
    
        return $this->processorsAllowed;
    }
    
    public function jpegQuality(array $value = []): \Symfony\Config\OroAttachment\Settings\JpegQualityConfig
    {
        if (null === $this->jpegQuality) {
            $this->_usedProperties['jpegQuality'] = true;
            $this->jpegQuality = new \Symfony\Config\OroAttachment\Settings\JpegQualityConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "jpegQuality()" has already been initialized. You cannot pass values the second time you call jpegQuality().');
        }
    
        return $this->jpegQuality;
    }
    
    public function pngQuality(array $value = []): \Symfony\Config\OroAttachment\Settings\PngQualityConfig
    {
        if (null === $this->pngQuality) {
            $this->_usedProperties['pngQuality'] = true;
            $this->pngQuality = new \Symfony\Config\OroAttachment\Settings\PngQualityConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "pngQuality()" has already been initialized. You cannot pass values the second time you call pngQuality().');
        }
    
        return $this->pngQuality;
    }
    
    public function webpQuality(array $value = []): \Symfony\Config\OroAttachment\Settings\WebpQualityConfig
    {
        if (null === $this->webpQuality) {
            $this->_usedProperties['webpQuality'] = true;
            $this->webpQuality = new \Symfony\Config\OroAttachment\Settings\WebpQualityConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "webpQuality()" has already been initialized. You cannot pass values the second time you call webpQuality().');
        }
    
        return $this->webpQuality;
    }
    
    public function externalFileAllowedUrlsRegexp(array $value = []): \Symfony\Config\OroAttachment\Settings\ExternalFileAllowedUrlsRegexpConfig
    {
        if (null === $this->externalFileAllowedUrlsRegexp) {
            $this->_usedProperties['externalFileAllowedUrlsRegexp'] = true;
            $this->externalFileAllowedUrlsRegexp = new \Symfony\Config\OroAttachment\Settings\ExternalFileAllowedUrlsRegexpConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "externalFileAllowedUrlsRegexp()" has already been initialized. You cannot pass values the second time you call externalFileAllowedUrlsRegexp().');
        }
    
        return $this->externalFileAllowedUrlsRegexp;
    }
    
    public function originalFileNamesEnabled(array $value = []): \Symfony\Config\OroAttachment\Settings\OriginalFileNamesEnabledConfig
    {
        if (null === $this->originalFileNamesEnabled) {
            $this->_usedProperties['originalFileNamesEnabled'] = true;
            $this->originalFileNamesEnabled = new \Symfony\Config\OroAttachment\Settings\OriginalFileNamesEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "originalFileNamesEnabled()" has already been initialized. You cannot pass values the second time you call originalFileNamesEnabled().');
        }
    
        return $this->originalFileNamesEnabled;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('maxsize', $value)) {
            $this->_usedProperties['maxsize'] = true;
            $this->maxsize = new \Symfony\Config\OroAttachment\Settings\MaxsizeConfig($value['maxsize']);
            unset($value['maxsize']);
        }
    
        if (array_key_exists('upload_file_mime_types', $value)) {
            $this->_usedProperties['uploadFileMimeTypes'] = true;
            $this->uploadFileMimeTypes = new \Symfony\Config\OroAttachment\Settings\UploadFileMimeTypesConfig($value['upload_file_mime_types']);
            unset($value['upload_file_mime_types']);
        }
    
        if (array_key_exists('upload_image_mime_types', $value)) {
            $this->_usedProperties['uploadImageMimeTypes'] = true;
            $this->uploadImageMimeTypes = new \Symfony\Config\OroAttachment\Settings\UploadImageMimeTypesConfig($value['upload_image_mime_types']);
            unset($value['upload_image_mime_types']);
        }
    
        if (array_key_exists('processors_allowed', $value)) {
            $this->_usedProperties['processorsAllowed'] = true;
            $this->processorsAllowed = new \Symfony\Config\OroAttachment\Settings\ProcessorsAllowedConfig($value['processors_allowed']);
            unset($value['processors_allowed']);
        }
    
        if (array_key_exists('jpeg_quality', $value)) {
            $this->_usedProperties['jpegQuality'] = true;
            $this->jpegQuality = new \Symfony\Config\OroAttachment\Settings\JpegQualityConfig($value['jpeg_quality']);
            unset($value['jpeg_quality']);
        }
    
        if (array_key_exists('png_quality', $value)) {
            $this->_usedProperties['pngQuality'] = true;
            $this->pngQuality = new \Symfony\Config\OroAttachment\Settings\PngQualityConfig($value['png_quality']);
            unset($value['png_quality']);
        }
    
        if (array_key_exists('webp_quality', $value)) {
            $this->_usedProperties['webpQuality'] = true;
            $this->webpQuality = new \Symfony\Config\OroAttachment\Settings\WebpQualityConfig($value['webp_quality']);
            unset($value['webp_quality']);
        }
    
        if (array_key_exists('external_file_allowed_urls_regexp', $value)) {
            $this->_usedProperties['externalFileAllowedUrlsRegexp'] = true;
            $this->externalFileAllowedUrlsRegexp = new \Symfony\Config\OroAttachment\Settings\ExternalFileAllowedUrlsRegexpConfig($value['external_file_allowed_urls_regexp']);
            unset($value['external_file_allowed_urls_regexp']);
        }
    
        if (array_key_exists('original_file_names_enabled', $value)) {
            $this->_usedProperties['originalFileNamesEnabled'] = true;
            $this->originalFileNamesEnabled = new \Symfony\Config\OroAttachment\Settings\OriginalFileNamesEnabledConfig($value['original_file_names_enabled']);
            unset($value['original_file_names_enabled']);
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
        if (isset($this->_usedProperties['maxsize'])) {
            $output['maxsize'] = $this->maxsize->toArray();
        }
        if (isset($this->_usedProperties['uploadFileMimeTypes'])) {
            $output['upload_file_mime_types'] = $this->uploadFileMimeTypes->toArray();
        }
        if (isset($this->_usedProperties['uploadImageMimeTypes'])) {
            $output['upload_image_mime_types'] = $this->uploadImageMimeTypes->toArray();
        }
        if (isset($this->_usedProperties['processorsAllowed'])) {
            $output['processors_allowed'] = $this->processorsAllowed->toArray();
        }
        if (isset($this->_usedProperties['jpegQuality'])) {
            $output['jpeg_quality'] = $this->jpegQuality->toArray();
        }
        if (isset($this->_usedProperties['pngQuality'])) {
            $output['png_quality'] = $this->pngQuality->toArray();
        }
        if (isset($this->_usedProperties['webpQuality'])) {
            $output['webp_quality'] = $this->webpQuality->toArray();
        }
        if (isset($this->_usedProperties['externalFileAllowedUrlsRegexp'])) {
            $output['external_file_allowed_urls_regexp'] = $this->externalFileAllowedUrlsRegexp->toArray();
        }
        if (isset($this->_usedProperties['originalFileNamesEnabled'])) {
            $output['original_file_names_enabled'] = $this->originalFileNamesEnabled->toArray();
        }
    
        return $output;
    }

}
