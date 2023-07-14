<?php

// This is solution for the task BEADS - Glass Beads: https://www.spoj.com/problems/BEADS/

$input = [
    4,
    'helloworld',
    'amandamanda',
    'dontcallmebfu',
    'aaabaaa'
];

$n = intval($input[0]);

$output = [];

for ($i = 1; $i <= $n; $i++) {
    $necklace = $input[$i];
    $length = strlen($necklace);

    $index = 1;
    $minString = $necklace;

    for ($j = 2; $j <= $length; $j++) {
        $substring = substr($necklace, $j - 1) . substr($necklace, 0, $j - 1);

        if ($substring < $minString) {
            $index = $j;
            $minString = $substring;
        }
    }

    $output[] = $index;
}

echo implode("\n", $output);
