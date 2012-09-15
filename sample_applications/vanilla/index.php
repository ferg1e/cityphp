<?php

session_start();

require_once('./constants.php');
require_once(CITYPHP . 'getRoute.php');
require_once(VANILLA . 'database/MyModelFactory.php');
require_once(VANILLA . 'html/navItems.php');

$userModel = MyModelFactory::getModel('UserModel');
$user = $userModel->getLoggedInUser();

include(getRoute(array(
    null => 'home.php',
    'signup' => 'signup.php',
    'login' => 'login.php',
    'settings' => 'settings.php',
    'user' => 'user.php')));

$navItems = navItems($user);
include(VANILLA . 'html/template.php');

?>