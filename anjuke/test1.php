<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-2-19
 * Time: 下午2:31
 */

//global $a, $b;
$a = 1;
$b = 2;

function test() {
    global $a, $b;
    $b = $a + $b;
}

test();

echo $b;
