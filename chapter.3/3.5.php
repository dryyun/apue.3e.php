<?php
/**
 * User: dryyun
 * Time: 16/5/31 下午12:03
 * File: 3.5.php
 */

$length = 1024;
while ($str = fread(STDIN, $length)) {
    fwrite(STDOUT, $str);
}
if (!$str) {
    exit('read error');
}