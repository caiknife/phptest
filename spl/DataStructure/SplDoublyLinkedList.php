<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 上午10:47
 */

require_once 'zend_autoload.php';

$list = new SplDoublyLinkedList();

$list->push('a');
$list->push('b');
$list->push('c');
$list->push('d');

Kint::dump(SplDoublyLinkedList::IT_MODE_FIFO, SplDoublyLinkedList::IT_MODE_LIFO,
    SplDoublyLinkedList::IT_MODE_DELETE, SplDoublyLinkedList::IT_MODE_KEEP);

Kint::dump($list->isEmpty(), $list->count(), $list->getIteratorMode(), $list->top(),
    $list->bottom());

$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

foreach ($list as $key => $item) {
    Zend_Debug::dump($item);
}

$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

foreach ($list as $key => $item) {
    Zend_Debug::dump($item);
}