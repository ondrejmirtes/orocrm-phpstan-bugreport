<?php

namespace Symfony\Config\Security\FirewallConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class Oauth2Config 
{
    private $anonymousCustomerUser;
    private $_usedProperties = [];
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function anonymousCustomerUser($value): self
    {
        $this->_usedProperties['anonymousCustomerUser'] = true;
        $this->anonymousCustomerUser = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('anonymous_customer_user', $value)) {
            $this->_usedProperties['anonymousCustomerUser'] = true;
            $this->anonymousCustomerUser = $value['anonymous_customer_user'];
            unset($value['anonymous_customer_user']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['anonymousCustomerUser'])) {
            $output['anonymous_customer_user'] = $this->anonymousCustomerUser;
        }
    
        return $output;
    }

}
