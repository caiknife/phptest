<?php
$key = '12345';
$hashedKey = crc32($key);
$serverNum = 5;
$node = $hashedKey % $serverNum;