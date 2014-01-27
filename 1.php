<?php
require_once 'zend_autoload.php';

const NAME = 'caiknife';

class A {
    public static function create() {
        return new static();
    }

    public function getName() {
        return NAME;
    }
}

class B extends A {

}

$b = B::create();
Kint::dump(get_class($b));

Kint::dump($b->getName());


$model = 'ArticleModel';
$call = "\\Common\\Model\\{$model}";

call_user_func_array(array($call, 'save'), array(123123));