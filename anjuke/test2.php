<?php
/**
 * Created by PhpStorm.
 * User: zcai
 * Date: 14-2-19
 * Time: 下午2:39
 */

function test() {
    static $a = 0;
    $a++;
    return $a;
}

for ($i = 0; $i <= 5; $i++) {
    $r = test();
}

echo $r;
