<?php
/**
 * Created by PhpStorm.
 * User: caiknife
 * Date: 17/5/9
 * Time: 15:41
 */
require_once 'zend_autoload.php';

$sourceArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);

function in_array_using_bisection($element, $array) {
    $firstEle = $array[0];
    $lastEle  = $array[count($array) - 1];
    $midEle   = $array[ceil(count($array) / 2)];

    if ($element > $lastEle || $element < $firstEle) {
        return false;
    }

}

$result = in_array_using_bisection(4, $sourceArray);