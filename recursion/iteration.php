<?php
/**
 * 使用迭代的 fibonacci 数列
 *
 * @param $n
 * @return bool|int
 */
function fibonacci_with_iteration($n) {
    if ($n < 0) {
        return false;
    }
    $fibo = array(0, 1);
    for ($i = 2; $i <= $n; ++$i) {
        $fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];
    }
    return $fibo[$n];
}

echo fibonacci_with_iteration(1000);