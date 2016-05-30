<?php
/**
 * User: dryyun
 * Time: 16/5/30 下午2:34
 * File: 1.7.php
 */

while (($buffer = fgets(STDIN)) !== false) {
    $cmd = trim($buffer);
    $pid = pcntl_fork();
    if ($pid < 0) {
        exit('fork error');
    } elseif ($pid == 0) {
        exec($cmd, $output);
        print_r($output);
        exit(127);
    }
    if (pcntl_waitpid($pid, $status) < 0) {
        exit('waitpid error');
    }
}
exit(0);
