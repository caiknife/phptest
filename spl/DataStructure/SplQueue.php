<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 上午11:25
 */
require_once 'zend_autoload.php';

$queue = new SplQueue();

$queue->push('a');
$queue->push('b');
$queue->push('c');
$queue->push('d');

$queue->offsetSet(0, 'C');

foreach ($queue as $key => $item) {
    Zend_Debug::dump($item);
}

$queue = new SplPriorityQueue();

$queue->insert('a', 9);
$queue->insert('b', 8);
$queue->insert('c', 7);
$queue->insert('d', 6);

$queue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);

foreach ($queue as $key => $item) {
    Zend_Debug::dump($item);
}