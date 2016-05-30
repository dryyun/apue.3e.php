<?php
/**
 * User: dryyun
 * Time: 16/5/30 下午5:41
 * File: 3.1.php
 */

if (fseek(STDIN, 0, SEEK_CUR) == -1) {
    exit('cannot seek');
}
exit('seek ok');
