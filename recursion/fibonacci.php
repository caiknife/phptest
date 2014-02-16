<?php
/**
 * 节省内存空间的做法
 *
 * @param $n
 * @return bool|int
 */
function fibonacci($n) {
    list($f0, $f1, $result) = array(0, 1, 1);
    if ($n < 0) {
        return false;
    }
    if ($n < 2) {
        return 1;
    }
    for ($i = 2; $i <= $n; ++$i) {
        $result = $f0 + $f1;
        $f0 = $f1;
        $f1 = $result;
    }
    return $result;
}

echo fibonacci(1000);
