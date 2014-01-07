<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 下午1:50
 */
require_once 'zend_autoload.php';

$f = new SplFileObject(__FILE__);

foreach ($f as $line) {
    Zend_Debug::dump($line);
}