<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-8
 * Time: 上午11:00
 */
require_once 'zend_autoload.php';

$iter = new GlobIterator(__DIR__ . '/*.php', GlobIterator::KEY_AS_FILENAME);

Kint::dump($iter);

foreach ($iter as $key => $item) {
    Kint::dump($key, $item->getPathname());
}