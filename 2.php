<?php
require_once 'zend_autoload.php';
require_once 'Kint/Kint.class.php';

var_dump('Hello, world!');
var_dump(memory_get_usage());

$a = ['caiknife', 'caiknife', 'caiknife'];

var_dump(memory_get_usage());

unset($a);

var_dump(memory_get_usage());

class RedisClient {
    protected $_redis;

    public function __construct() {
        $this->_redis = new Redis();
    }

    public function __call($method, $args) {
        call_user_func_array(array($this->_redis, $method), $args);
    }
}