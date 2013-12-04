<?php

require_once 'const.php';
require_once CITYPHP . '__autoload.php';
require_once CITYPHP . 'route.php';

use purple\db\ModelFactory;

$wordModel = ModelFactory::get('purple\db\WordModel');

include route(array(
    null => 'word-list.php',
    'add' => 'add-word.php',
    'about' => 'about.php'),
    PURPLE . 'routes/');

include PURPLE . 'html/template4.php';

?>