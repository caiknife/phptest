<?php
require_once 'zend_autoload.php';

$json = [
    'name'   => 'caiknife',
    'age'    => 18,
    'height' => '175'
];

Zend_Debug::dump(json_encode($json));

Zend_Debug::dump(Zend_Json::encode($json));