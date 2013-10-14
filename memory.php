<?php

$a[0] = 'caiknife';
$a[1] = 'caiknife';
$a[2] = 'caiknife';

$b = $a;

debug_zval_dump($a);
debug_zval_dump($b);

$b[0] = 'caiknife';

debug_zval_dump($a);
debug_zval_dump($b);