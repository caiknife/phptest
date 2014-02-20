<?php
require_once 'zend_autoload.php';
use Zend\Json\Json;
use Zend\Debug\Debug;
use Tracking\Traits\Singleton;

$json = [
    'name'   => 'caiknife',
    'age'    => 18,
    'height' => '175'
];

Debug::dump(json_encode($json));

Debug::dump(Zend_Json::encode($json));

Debug::dump(Json::encode($json));

Debug::dump(Json::decode(Json::encode($json), Json::TYPE_ARRAY));

class Test {
    use Singleton;
}

Kint::dump(Test::getInstance());