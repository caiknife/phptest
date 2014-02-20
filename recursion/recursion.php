<?php
/**
 * 使用递归的 fibonacci 数列
 *
 * @param $n
 * @return bool|int
 */
function fibonacci($n) {
    if ($n < 0) {
        return false;
    }
    if ($n === 0) {
        return 0;
    } elseif ($n === 1) {
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

echo fibonacci(10);