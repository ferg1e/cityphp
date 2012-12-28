<?php

require_once(CITYPHP . 'html/autofocus.php');
require_once(VANILLA . 'forms/ForgotPasswordValidator.php');
require_once(VANILLA . 'html/forgotPassword.php');

$validator = new ForgotPasswordValidator();

if(list($formData, $errors) = $validator->validate()) {
    if($errors) {
        $content = forgotPassword($formData, current($errors));
    }
    else {
        $resetPasswordModel = ModelFactory::get('ResetPasswordModel');
        $resetPasswordModel->createToken($formData['email']);
        $content = sprintf("If the email address you entered, %s,
            is associated with a user account, then you will receive
            an email with directions for resetting your password. If
            you don't receive this email then please check your junk mail folder.",
            $formData['email']);
    }
}
else {
    $autofocus = autofocus('email');
    $content = forgotPassword($validator->values());
}

$head = '<title>Forgot Password</title>';

?>
