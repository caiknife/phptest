<?php
/**
 * Created by PhpStorm.
 * User: caiknife
 * Date: 17/5/9
 * Time: 15:12
 */

require_once 'zend_autoload.php';

$fileA = '/x/y/m/a.txt';
$fileB = '/x/y/n/b.txt';

function getRelatedPath($foo, $bar) {
    $barPathinfo = pathinfo($bar);
    $pathStack   = array();
    $dirStack    = array();
    $fooDirname  = $foo;
    $barDirname  = $bar;
    while (true) {
        $fooDirname  = getDirname($fooDirname);
        $barDirname  = getDirname($barDirname);
        $barBasename = getBasename($barDirname);
        if ($fooDirname != $barDirname) {
            $pathStack[] = '..';
            $dirStack[]  = $barBasename;
        } else {
            break;
        }
    }

    return implode('/', $pathStack) . '/' . implode('/', $dirStack) . '/' . $barPathinfo['basename'];
}

function getDirname($path) {
    $pathInfo = pathinfo($path);
    if (isset($pathInfo['dirname'])) {
        return $pathInfo['dirname'];
    } else {
        return null;
    }
}

function getBasename($path) {
    $pathInfo = pathinfo($path);
    if (isset($pathInfo['basename'])) {
        return $pathInfo['basename'];
    } else {
        return null;
    }
}


$relatedPath = getRelatedPath($fileB, $fileA);
Zend_Debug::dump($relatedPath);