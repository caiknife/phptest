<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-1-7
 * Time: 下午12:14
 */

require_once 'zend_autoload.php';

$f = new SplFileInfo(__FILE__);

Kint::dump($f->getATime(), $f->getBasename(), $f->getCTime(), $f->getExtension(),
    $f->getFilename(), $f->getGroup(), $f->getInode(), $f->getLinkTarget(),
    $f->getMTime(), $f->getOwner(), $f->getPath(), $f->getPathname(), $f->getPerms(),
    $f->getRealPath(), $f->getSize(), $f->getType());

$f = new SplFileInfo(__DIR__);
Kint::dump($f->getATime(), $f->getBasename(), $f->getCTime(), $f->getExtension(),
    $f->getFilename(), $f->getGroup(), $f->getInode(), $f->getLinkTarget(),
    $f->getMTime(), $f->getOwner(), $f->getPath(), $f->getPathname(), $f->getPerms(),
    $f->getRealPath(), $f->getSize(), $f->getType());