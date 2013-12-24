<?php
require_once 'zend_autoload.php';
require_once 'kint/Kint.class.php';

class Base {
    public function __get($name) {
        Zend_Debug::dump("you are accessing {$name}");
    }

    public function __set($name, $value) {
        Zend_Debug::dump("you are assigning {$value} to {$name}");
    }

    public function __isset($name) {
        Zend_Debug::dump("you are judging {$name}");
    }

    public function __unset($name) {
        Zend_Debug::dump("you are unsetting {$name}");
    }
}

$b = new Base();
// __set
$b->age = 20;
// __get
$b->age;
// __isset
isset($b->age);
// __isset
empty($b->age);
// unset
unset($b->age);

/*
string 'you are assigning 20 to age' (length=27)

string 'you are accessing age' (length=21)

string 'you are judging age' (length=19)

string 'you are judging age' (length=19)

string 'you are unsetting age' (length=21)
 */