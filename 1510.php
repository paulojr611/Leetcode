<?php
$n = 20;


    $dp = array_fill(0, $n + 1, false);

    for ($i = 1; $i <= $n; ++$i) {
        for ($k = 1; $k * $k <= $i; ++$k) {
            if ($dp[$i - $k * $k] == false) {
                $dp[$i] = true;
                break;
            }
        }
    }

    return $dp[$n];












