<?php

namespace Symfony\Config\OroUser;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PasswordMinLengthConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PasswordLowerCaseConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PasswordUpperCaseConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PasswordNumbersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'PasswordSpecialCharsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'SendPasswordInInvitationEmailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Settings'.\DIRECTORY_SEPARATOR.'CaseInsensitiveEmailAddressesEnabledConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SettingsConfig 
{
    private $resolved;
    private $passwordMinLength;
    private $passwordLowerCase;
    private $passwordUpperCase;
    private $passwordNumbers;
    private $passwordSpecialChars;
    private $sendPasswordInInvitationEmail;
    private $caseInsensitiveEmailAddressesEnabled;
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
    
    public function passwordMinLength(array $value = []): \Symfony\Config\OroUser\Settings\PasswordMinLengthConfig
    {
        if (null === $this->passwordMinLength) {
            $this->_usedProperties['passwordMinLength'] = true;
            $this->passwordMinLength = new \Symfony\Config\OroUser\Settings\PasswordMinLengthConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "passwordMinLength()" has already been initialized. You cannot pass values the second time you call passwordMinLength().');
        }
    
        return $this->passwordMinLength;
    }
    
    public function passwordLowerCase(array $value = []): \Symfony\Config\OroUser\Settings\PasswordLowerCaseConfig
    {
        if (null === $this->passwordLowerCase) {
            $this->_usedProperties['passwordLowerCase'] = true;
            $this->passwordLowerCase = new \Symfony\Config\OroUser\Settings\PasswordLowerCaseConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "passwordLowerCase()" has already been initialized. You cannot pass values the second time you call passwordLowerCase().');
        }
    
        return $this->passwordLowerCase;
    }
    
    public function passwordUpperCase(array $value = []): \Symfony\Config\OroUser\Settings\PasswordUpperCaseConfig
    {
        if (null === $this->passwordUpperCase) {
            $this->_usedProperties['passwordUpperCase'] = true;
            $this->passwordUpperCase = new \Symfony\Config\OroUser\Settings\PasswordUpperCaseConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "passwordUpperCase()" has already been initialized. You cannot pass values the second time you call passwordUpperCase().');
        }
    
        return $this->passwordUpperCase;
    }
    
    public function passwordNumbers(array $value = []): \Symfony\Config\OroUser\Settings\PasswordNumbersConfig
    {
        if (null === $this->passwordNumbers) {
            $this->_usedProperties['passwordNumbers'] = true;
            $this->passwordNumbers = new \Symfony\Config\OroUser\Settings\PasswordNumbersConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "passwordNumbers()" has already been initialized. You cannot pass values the second time you call passwordNumbers().');
        }
    
        return $this->passwordNumbers;
    }
    
    public function passwordSpecialChars(array $value = []): \Symfony\Config\OroUser\Settings\PasswordSpecialCharsConfig
    {
        if (null === $this->passwordSpecialChars) {
            $this->_usedProperties['passwordSpecialChars'] = true;
            $this->passwordSpecialChars = new \Symfony\Config\OroUser\Settings\PasswordSpecialCharsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "passwordSpecialChars()" has already been initialized. You cannot pass values the second time you call passwordSpecialChars().');
        }
    
        return $this->passwordSpecialChars;
    }
    
    public function sendPasswordInInvitationEmail(array $value = []): \Symfony\Config\OroUser\Settings\SendPasswordInInvitationEmailConfig
    {
        if (null === $this->sendPasswordInInvitationEmail) {
            $this->_usedProperties['sendPasswordInInvitationEmail'] = true;
            $this->sendPasswordInInvitationEmail = new \Symfony\Config\OroUser\Settings\SendPasswordInInvitationEmailConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sendPasswordInInvitationEmail()" has already been initialized. You cannot pass values the second time you call sendPasswordInInvitationEmail().');
        }
    
        return $this->sendPasswordInInvitationEmail;
    }
    
    public function caseInsensitiveEmailAddressesEnabled(array $value = []): \Symfony\Config\OroUser\Settings\CaseInsensitiveEmailAddressesEnabledConfig
    {
        if (null === $this->caseInsensitiveEmailAddressesEnabled) {
            $this->_usedProperties['caseInsensitiveEmailAddressesEnabled'] = true;
            $this->caseInsensitiveEmailAddressesEnabled = new \Symfony\Config\OroUser\Settings\CaseInsensitiveEmailAddressesEnabledConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "caseInsensitiveEmailAddressesEnabled()" has already been initialized. You cannot pass values the second time you call caseInsensitiveEmailAddressesEnabled().');
        }
    
        return $this->caseInsensitiveEmailAddressesEnabled;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('resolved', $value)) {
            $this->_usedProperties['resolved'] = true;
            $this->resolved = $value['resolved'];
            unset($value['resolved']);
        }
    
        if (array_key_exists('password_min_length', $value)) {
            $this->_usedProperties['passwordMinLength'] = true;
            $this->passwordMinLength = new \Symfony\Config\OroUser\Settings\PasswordMinLengthConfig($value['password_min_length']);
            unset($value['password_min_length']);
        }
    
        if (array_key_exists('password_lower_case', $value)) {
            $this->_usedProperties['passwordLowerCase'] = true;
            $this->passwordLowerCase = new \Symfony\Config\OroUser\Settings\PasswordLowerCaseConfig($value['password_lower_case']);
            unset($value['password_lower_case']);
        }
    
        if (array_key_exists('password_upper_case', $value)) {
            $this->_usedProperties['passwordUpperCase'] = true;
            $this->passwordUpperCase = new \Symfony\Config\OroUser\Settings\PasswordUpperCaseConfig($value['password_upper_case']);
            unset($value['password_upper_case']);
        }
    
        if (array_key_exists('password_numbers', $value)) {
            $this->_usedProperties['passwordNumbers'] = true;
            $this->passwordNumbers = new \Symfony\Config\OroUser\Settings\PasswordNumbersConfig($value['password_numbers']);
            unset($value['password_numbers']);
        }
    
        if (array_key_exists('password_special_chars', $value)) {
            $this->_usedProperties['passwordSpecialChars'] = true;
            $this->passwordSpecialChars = new \Symfony\Config\OroUser\Settings\PasswordSpecialCharsConfig($value['password_special_chars']);
            unset($value['password_special_chars']);
        }
    
        if (array_key_exists('send_password_in_invitation_email', $value)) {
            $this->_usedProperties['sendPasswordInInvitationEmail'] = true;
            $this->sendPasswordInInvitationEmail = new \Symfony\Config\OroUser\Settings\SendPasswordInInvitationEmailConfig($value['send_password_in_invitation_email']);
            unset($value['send_password_in_invitation_email']);
        }
    
        if (array_key_exists('case_insensitive_email_addresses_enabled', $value)) {
            $this->_usedProperties['caseInsensitiveEmailAddressesEnabled'] = true;
            $this->caseInsensitiveEmailAddressesEnabled = new \Symfony\Config\OroUser\Settings\CaseInsensitiveEmailAddressesEnabledConfig($value['case_insensitive_email_addresses_enabled']);
            unset($value['case_insensitive_email_addresses_enabled']);
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
        if (isset($this->_usedProperties['passwordMinLength'])) {
            $output['password_min_length'] = $this->passwordMinLength->toArray();
        }
        if (isset($this->_usedProperties['passwordLowerCase'])) {
            $output['password_lower_case'] = $this->passwordLowerCase->toArray();
        }
        if (isset($this->_usedProperties['passwordUpperCase'])) {
            $output['password_upper_case'] = $this->passwordUpperCase->toArray();
        }
        if (isset($this->_usedProperties['passwordNumbers'])) {
            $output['password_numbers'] = $this->passwordNumbers->toArray();
        }
        if (isset($this->_usedProperties['passwordSpecialChars'])) {
            $output['password_special_chars'] = $this->passwordSpecialChars->toArray();
        }
        if (isset($this->_usedProperties['sendPasswordInInvitationEmail'])) {
            $output['send_password_in_invitation_email'] = $this->sendPasswordInInvitationEmail->toArray();
        }
        if (isset($this->_usedProperties['caseInsensitiveEmailAddressesEnabled'])) {
            $output['case_insensitive_email_addresses_enabled'] = $this->caseInsensitiveEmailAddressesEnabled->toArray();
        }
    
        return $output;
    }

}
