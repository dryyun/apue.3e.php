<?php
/**
 * User: dryyun
 * Time: 16/5/31 上午11:25
 * File: 3.2.php
 * ls -l file.hole
 * od -c file.hole
 */

$buf1 = 'asddddd';
$buf2 = 'vvvvvvvv';
$fd = @fopen('file.hole', 'w+');
if (!$fd) {
    exit('open error');
}

if (false === fwrite($fd, $buf1)) {
    exit('write error');
}

if (fseek($fd, 16384, SEEK_SET) == -1) {
    exit('fseek error');
}

//echo ftell($fd);exit;

if (false === fwrite($fd, $buf2)) {
    exit('write error');
}


