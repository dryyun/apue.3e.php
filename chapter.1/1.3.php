<?php
/**
 * User: dryyun
 * Time: 16/5/30 下午12:22
 * File: 1.3.php
 */

if (!isset($argv[1])) {
    exit("usage:ls dir name");
}

$dir = $argv[1];
if (!is_dir($dir)) {
    exit("$dir is not a dir");
}
if (false === ($dh = opendir($dir))) {
    exit("can't open $dir");
}
while (($file = readdir($dh)) !== false) {
    echo "$file\n";
}
closedir($dh);

