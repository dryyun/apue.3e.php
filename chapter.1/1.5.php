<?php
/**
 * User: dryyun
 * Time: 16/5/30 下午2:14
 * File: 1.5.php
 */

while (false !== ($char = fgetc(STDIN))) {
    fwrite(STDOUT, $char);
}
