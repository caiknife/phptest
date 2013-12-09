<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance();

$minHeap = new SplMinHeap();
$maxHeap = new SplMaxHeap();

for ($i=1; $i<=10; $i++) {
    $minHeap->insert(rand(1, 1000));
    $maxHeap->insert(rand(1, 1000));
}


Zend_Debug::dump("min heap!");
Zend_Debug::dump($minHeap);
foreach ($minHeap as $value) {
    Zend_Debug::dump($value);
}

Zend_Debug::dump("max heap!");
Zend_Debug::dump($maxHeap);
foreach ($maxHeap as $value) {
    Zend_Debug::dump($value);
}
