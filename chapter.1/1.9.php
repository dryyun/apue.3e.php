<?php
/**
 * User: dryyun
 * Time: 16/5/30 下午3:12
 * File: 1.9.php
 */

echo sprintf("uid = %d,gid = %d\n", posix_getuid(), posix_getgid());