<?php
require_once 'zend_autoload.php';

$a = null;
$b = 100;

$a = $a || $b;

Zend_Debug::dump($a);

