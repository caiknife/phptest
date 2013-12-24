<?php
require_once 'zend_autoload.php';
require_once 'kint/Kint.class.php';

class Base {
    protected $id;
    protected $name;

    public function __construct() {
        $this->id = '12345';
        $this->name = 'caiknife';
    }

    public function __sleep() {
        Zend_Debug::dump("calling from serialize()");
        return array('id', 'name');
    }

    public function __wakeup() {
        Zend_Debug::dump("calling from unserialize()");
        $this->id = '54321';
    }

    public function __toString() {
        Zend_Debug::dump("calling __toString()");
        return $this->name;
    }

    public function __invoke() {
        Zend_Debug::dump("calling __invoke()");
    }
}

$b = new Base();
Zend_Debug::dump($b);
// __sleep
$s = serialize($b);
Zend_Debug::dump($s);
// __wakeup
$c = unserialize($s);
Zend_Debug::dump($c);
// __toString
echo $b;
// __invoke
$b();

/*
object(Base)[2]
  protected 'id' => string '12345' (length=5)
  protected 'name' => string 'caiknife' (length=8)

string 'calling from serialize()' (length=24)

string 'O:4:"Base":2:{s:5:"�*�id";s:5:"12345";s:7:"�*�name";s:8:"caiknife";}' (length=68)

string 'calling from unserialize()' (length=26)

object(Base)[3]
  protected 'id' => string '54321' (length=5)
  protected 'name' => string 'caiknife' (length=8)

string 'calling __toString()' (length=20)

caiknife

string 'calling __invoke()' (length=18)
 */