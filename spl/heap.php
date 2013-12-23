<?php
require_once 'zend_autoload.php';
require_once 'Kint/Kint.class.php';

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
