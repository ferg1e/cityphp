<?php

require_once(CITYPHP . 'forms/FormValidator.php');
require_once(VANILLA . 'validatePassword.php');
require_once(VANILLA . 'validateUsername.php');

class SignUpValidator extends FormValidator {
    public function __construct() {
        parent::__construct(array(
            'username' => '',
            'email' => '',
            'password' => '',
            'confirm_password' => ''));
    }

    protected function validate_username($value) {
        return validateUsername($value);
    }

    protected function validate_email($value) {
        if($value != '' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return 'Invalid email';
        }
    }

    protected function validate_password($value) {
        return validatePassword($value, 'Password');
    }

    protected function validate_confirm_password($value) {
        return validatePassword($value, 'Confirm password');
    }
}

?>
