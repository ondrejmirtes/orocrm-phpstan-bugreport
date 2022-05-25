<?php

namespace Symfony\Config\OroEmail;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class FlashNotificationConfig 
{
    private $maxEmailsDisplay;
    private $_usedProperties = [];
    
    /**
     * @default 4
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxEmailsDisplay($value): self
    {
        $this->_usedProperties['maxEmailsDisplay'] = true;
        $this->maxEmailsDisplay = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('max_emails_display', $value)) {
            $this->_usedProperties['maxEmailsDisplay'] = true;
            $this->maxEmailsDisplay = $value['max_emails_display'];
            unset($value['max_emails_display']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['maxEmailsDisplay'])) {
            $output['max_emails_display'] = $this->maxEmailsDisplay;
        }
    
        return $output;
    }

}
