<?php
/**
 * Created by PhpStorm.
 * User: CaiKnife
 * Date: 14-3-16
 * Time: 下午10:19
 */

$str = 'FooBarGoGG';
preg_match_all('/([A-Z][a-z]*)/', $str, $matches);
var_dump(strtolower(implode('_', $matches[0])));

var_dump(strtolower(preg_replace("/(?!^)(?=[A-Z])/", "_", $str)));