<?php
/**
 * User: dryyun
 * Time: 16/5/30 下午2:01
 * File: 1.4.php
 */


while (($input = fread(STDIN, 1024))) {
    fwrite(STDOUT, $input . "\n");
}

if ($input === false) {
    exit('read error');
}

