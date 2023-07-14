<?php

// This is solution for the task POUR1 - Pouring water: https://www.spoj.com/problems/POUR1/, but more input is added

$input = [4, 5, 2, 3, 2, 3, 4, 3, 5, 6, 1, 6, 3];

$t = $input[0];

$output = [];

$index = 1;

for ($i = 0; $i < $t; $i++) {
    $a = $input[$index];
    $b = $input[$index + 1];
    $c = $input[$index + 2];
    $steps = 0;

    $gcd = 1;
    $min = min($a, $b);

    for ($j = 1; $j <= $min; $j++) {
        if ($a % $j == 0 && $b % $j == 0) {
            $gcd = $j;
        }
    }

    if ($c > max($a, $b) || $c % $gcd != 0) {
        $output[] = -1;
    } else {
        $x = 0;
        $y = 0;

        while ($x != $c && $y != $c) {
            if ($x == 0) {
                $x = $a;
                $steps++;
            } elseif ($y == $b) {
                $y = 0;
                $steps++;
            } else {
                $amount = min($x, $b - $y);
                $x -= $amount;
                $y += $amount;
                $steps++;
            }
        }

        $output[] = $steps;
    }

    $index += 3;
}

echo implode("\n", $output);
