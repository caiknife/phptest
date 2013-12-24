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

    public static function __set_state($property) {
        Zend_Debug::dump("calling from var_export()");
        Zend_Debug::dump($property);
        return new self();
    }

    public function __clone() {
        Zend_Debug::dump("calling from clone");
        $this->id = strrev($this->id);
    }
}

$b = new Base();
$a = var_export($b, true);
Zend_Debug::dump($a);

eval('$s = '.$a.';');
Zend_Debug::dump($s);

$c = clone $b;
Zend_Debug::dump($b);
Zend_Debug::dump($c);

/*
string 'Base::__set_state(array(
   'id' => '12345',
   'name' => 'caiknife',
))' (length=72)
string 'calling from var_export()' (length=25)
array (size=2)
  'id' => string '12345' (length=5)
  'name' => string 'caiknife' (length=8)
object(Base)[3]
  protected 'id' => string '12345' (length=5)
  protected 'name' => string 'caiknife' (length=8)
string 'calling from clone' (length=18)
object(Base)[2]
  protected 'id' => string '12345' (length=5)
  protected 'name' => string 'caiknife' (length=8)
object(Base)[4]
  protected 'id' => string '54321' (length=5)
  protected 'name' => string 'caiknife' (length=8)
 */