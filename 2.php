<?php
var_dump('Hello, world!');
var_dump(memory_get_usage());

$a = ['caiknife', 'caiknife', 'caiknife'];

var_dump(memory_get_usage());

unset($a);

var_dump(memory_get_usage());