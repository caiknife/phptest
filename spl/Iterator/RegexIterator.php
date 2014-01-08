<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-8
 * Time: 下午2:09
 */
require_once 'zend_autoload.php';

$a = array('Album', 'Book', 'Cook', 'Duke', 'Electric', 'Foot', 'Game');
$a = new ArrayIterator($a);

$i = new RegexIterator($a, '/^[d-fD-F]/i', RegexIterator::MATCH);

Kint::dump($i);

foreach ($i as $key => $item) {
    Kint::dump($key, $item);
}