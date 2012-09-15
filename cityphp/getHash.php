<?php

function getHash($input, $salt = NULL) {
    if(is_null($salt)) {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ./';
        $numChars = strlen($chars);
        $salt = CRYPT_BLOWFISH ? '$2a$12$' : '$1$';

        for($i = 0; $i < 22; ++$i) {
            $salt .= $chars[mt_rand(0, $numChars - 1)];
        }
    }

    return crypt($input, $salt);
}

?>