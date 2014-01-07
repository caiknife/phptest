<?php
require_once 'zend_autoload.php';

class Base {
    protected function test() {
        Zend_Debug::dump("test!");
    }

    protected static function staticTest() {
        Zend_Debug::dump("static test!");
    }

    public function __call($name, $params) {
        Zend_Debug::dump("You are calling normal method {$name} with params:");
        Zend_Debug::dump($params);
        $this->{$name}();
    }

    public function __callStatic($name, $params) {
        Zend_Debug::dump("You are calling static method {$name} with params:");
        Zend_Debug::dump($params);
        self::{$name}();
    }
}

$b = new Base();
$b->test();
$b->test(1, 2, 3);

Base::staticTest();
Base::staticTest(1, 2, 3);

/*
string 'You are calling normal method test with params:' (length=47)array (size=0)
  empty

string 'test!' (length=5)

string 'You are calling normal method test with params:' (length=47)

array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3

string 'test!' (length=5)

string 'You are calling static method staticTest with params:' (length=53)

array (size=0)
  empty

string 'static test!' (length=12)

string 'You are calling static method staticTest with params:' (length=53)

array (size=3)
  0 => int 1
  1 => int 2
  2 => int 3

string 'static test!' (length=12)
 */