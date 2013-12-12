<?php

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

$a = null;
$b = 100;

$a = $a || $b;

Zend_Debug::dump($a);

