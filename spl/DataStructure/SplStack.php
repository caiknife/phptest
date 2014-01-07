<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 上午11:00
 */
require_once 'zend_autoload.php';

$stack = new SplStack();

$stack->push('a');
$stack->push('b');
$stack->push('c');
$stack->push('d');

$stack->offsetSet(0, 'C');

foreach ($stack as $key => $item) {
    Zend_Debug::dump($item);
}