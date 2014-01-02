<?php
require_once 'zend_autoload.php';
use Zend\Json\Json;

$json = [
    'name'   => 'caiknife',
    'age'    => 18,
    'height' => '175'
];

Zend_Debug::dump(json_encode($json));

Zend_Debug::dump(Zend_Json::encode($json));

Zend_Debug::dump(Json::encode($json));

Zend_Debug::dump(Json::decode(Json::encode($json), Json::TYPE_ARRAY));