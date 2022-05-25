<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'OroAttachment'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class OroAttachmentConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $debugImages;
    private $maxsize;
    private $uploadFileMimeTypes;
    private $uploadImageMimeTypes;
    private $processorsAllowed;
    private $pngQuality;
    private $jpegQuality;
    private $webpStrategy;
    private $settings;
    private $_usedProperties = [];
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debugImages($value): self
    {
        $this->_usedProperties['debugImages'] = true;
        $this->debugImages = $value;
    
        return $this;
    }
    
    /**
     * @default 10
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxsize($value): self
    {
        $this->_usedProperties['maxsize'] = true;
        $this->maxsize = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function uploadFileMimeTypes($value): self
    {
        $this->_usedProperties['uploadFileMimeTypes'] = true;
        $this->uploadFileMimeTypes = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function uploadImageMimeTypes($value): self
    {
        $this->_usedProperties['uploadImageMimeTypes'] = true;
        $this->uploadImageMimeTypes = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function processorsAllowed($value): self
    {
        $this->_usedProperties['processorsAllowed'] = true;
        $this->processorsAllowed = $value;
    
        return $this;
    }
    
    /**
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pngQuality($value): self
    {
        $this->_usedProperties['pngQuality'] = true;
        $this->pngQuality = $value;
    
        return $this;
    }
    
    /**
     * @default 85
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function jpegQuality($value): self
    {
        $this->_usedProperties['jpegQuality'] = true;
        $this->jpegQuality = $value;
    
        return $this;
    }
    
    /**
     * Strategy for converting uploaded images to WebP format.
     * @default 'if_supported'
     * @param ParamConfigurator|'for_all'|'if_supported'|'disabled' $value
     * @return $this
     */
    public function webpStrategy($value): self
    {
        $this->_usedProperties['webpStrategy'] = true;
        $this->webpStrategy = $value;
    
        return $this;
    }
    
    public function settings(array $value = []): \Symfony\Config\OroAttachment\SettingsConfig
    {
        if (null === $this->settings) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroAttachment\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function getExtensionAlias(): string
    {
        return 'oro_attachment';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('debug_images', $value)) {
            $this->_usedProperties['debugImages'] = true;
            $this->debugImages = $value['debug_images'];
            unset($value['debug_images']);
        }
    
        if (array_key_exists('maxsize', $value)) {
            $this->_usedProperties['maxsize'] = true;
            $this->maxsize = $value['maxsize'];
            unset($value['maxsize']);
        }
    
        if (array_key_exists('upload_file_mime_types', $value)) {
            $this->_usedProperties['uploadFileMimeTypes'] = true;
            $this->uploadFileMimeTypes = $value['upload_file_mime_types'];
            unset($value['upload_file_mime_types']);
        }
    
        if (array_key_exists('upload_image_mime_types', $value)) {
            $this->_usedProperties['uploadImageMimeTypes'] = true;
            $this->uploadImageMimeTypes = $value['upload_image_mime_types'];
            unset($value['upload_image_mime_types']);
        }
    
        if (array_key_exists('processors_allowed', $value)) {
            $this->_usedProperties['processorsAllowed'] = true;
            $this->processorsAllowed = $value['processors_allowed'];
            unset($value['processors_allowed']);
        }
    
        if (array_key_exists('png_quality', $value)) {
            $this->_usedProperties['pngQuality'] = true;
            $this->pngQuality = $value['png_quality'];
            unset($value['png_quality']);
        }
    
        if (array_key_exists('jpeg_quality', $value)) {
            $this->_usedProperties['jpegQuality'] = true;
            $this->jpegQuality = $value['jpeg_quality'];
            unset($value['jpeg_quality']);
        }
    
        if (array_key_exists('webp_strategy', $value)) {
            $this->_usedProperties['webpStrategy'] = true;
            $this->webpStrategy = $value['webp_strategy'];
            unset($value['webp_strategy']);
        }
    
        if (array_key_exists('settings', $value)) {
            $this->_usedProperties['settings'] = true;
            $this->settings = new \Symfony\Config\OroAttachment\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['debugImages'])) {
            $output['debug_images'] = $this->debugImages;
        }
        if (isset($this->_usedProperties['maxsize'])) {
            $output['maxsize'] = $this->maxsize;
        }
        if (isset($this->_usedProperties['uploadFileMimeTypes'])) {
            $output['upload_file_mime_types'] = $this->uploadFileMimeTypes;
        }
        if (isset($this->_usedProperties['uploadImageMimeTypes'])) {
            $output['upload_image_mime_types'] = $this->uploadImageMimeTypes;
        }
        if (isset($this->_usedProperties['processorsAllowed'])) {
            $output['processors_allowed'] = $this->processorsAllowed;
        }
        if (isset($this->_usedProperties['pngQuality'])) {
            $output['png_quality'] = $this->pngQuality;
        }
        if (isset($this->_usedProperties['jpegQuality'])) {
            $output['jpeg_quality'] = $this->jpegQuality;
        }
        if (isset($this->_usedProperties['webpStrategy'])) {
            $output['webp_strategy'] = $this->webpStrategy;
        }
        if (isset($this->_usedProperties['settings'])) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }

}
