<?php

$nums = [0,0,0,0,0];
$goal = 0;

$n = count($nums);
$count = array_fill(0, $n + 1, 0);
$count[0] = 1;
$sum = 0;
$ans = 0;

for ($i = 0; $i < $n; $i++) {
    $sum = $sum + $nums[$i];
    if ($sum >= $goal) {
        $ans = $ans + $count[$sum - $goal];
    }
    $count[$sum]++;
}

echo $ans; 

