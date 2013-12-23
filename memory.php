<?php
require_once 'zend_autoload.php';
require_once 'Kint/Kint.class.php';

var_dump(memory_get_usage());

$a = ['caiknife', 'caiknife', 'caiknife'];

var_dump(memory_get_usage());

$b = $a;

var_dump(memory_get_usage());

$b[0] = 'efinkiac';

var_dump(memory_get_usage());