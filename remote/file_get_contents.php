<?php
require_once 'zend_autoload.php';
require_once 'kint/Kint.class.php';

$a = null;
$b = 100;

$a = $a || $b;

Zend_Debug::dump($a);

