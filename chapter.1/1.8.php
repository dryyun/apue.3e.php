<?php
/**
 * User: dryyun
 * Time: 16/5/30 下午3:05
 * File: 1.8.php
 */
echo posix_strerror(PCNTL_EACCES) . "\n";

echo pcntl_strerror(PCNTL_EACCES) . "\n";

$errno = PCNTL_ENOENT;

echo pcntl_strerror($errno) . "\n";