<?php
/**
 * User: dryyun
 * Time: 16/5/30 下午3:15
 * File: 1.10.php
 */

pcntl_signal(SIGINT, function () {
    print_r("SIGINT\n");
}, false);

pcntl_signal_dispatch();

while (($buffer = fgets(STDIN)) !== false) {
    $cmd = trim($buffer);
    if (!$cmd) {
        continue;
    }
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

