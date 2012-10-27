<?php

require_once(VANILLA . 'html/error.php');
require_once(VANILLA . 'html/input.php');

function resetPassword($formData, $error = '') {
    return sprintf('<form method="post">%s%s%s'
        . '<div><input type="submit" value="Reset"/></div></form>',
        error($error),
        input('New Password', 'password', $formData['password'], 'password'),
        input('Confirm New Password',
            'confirm_password',
            $formData['confirm_password'],
            'password'));
}

?>