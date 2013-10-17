<?php

require_once CITYPHP . 'html/input.php';
require_once CITYPHP . 'html/ulist.php';

function login($formData, $errors = array()) {
    ob_start(); ?>

<form method="post">
    <?=ulist($errors, array('class' => 'error'))?>
    <?=input(array('id' => 'username', 'value' => $formData['username']), 'Username')?>
    <?=input(array('id' => 'password', 'value' => $formData['password'], 'type' => 'password'), 'Password')?>
    <?=input(array('id' => 'remember_me', 'value' => 1, 'type' => 'checkbox', $formData['remember_me'] ? 'checked' : ''), 'Remember Me')?>
    <div><a href="<?=FORGOT_PASSWORD?>">forgot password</a></div>
    <div><input type="submit" value="Log In"/></div>
</form>

    <?php return ob_get_clean();
}

?>