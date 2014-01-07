<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 下午2:17
 */
require_once 'zend_autoload.php';

$temp = new SplTempFileObject();

$temp->fwrite("This is the first line.");
$temp->fwrite("\n");
$temp->fwrite("This is the second line.");

Zend_Debug::dump(Zend_Debug::getSapi());

Zend_Debug::dump("Write {$temp->ftell()} bytes to temp file.");

$temp->rewind();

foreach ($temp as $line) {
    Zend_Debug::dump(trim($line));
}