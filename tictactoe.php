<?php

// This is solution for the task TOE1 - Tic-Tac-Toe ( I ): https://www.spoj.com/problems/TOE1/

$input = [
    2,
    [
        ['X', '.', 'O'],
        ['O', 'O', '.'],
        ['X', 'X', 'X'],
    ],
    [
        ['O', '.', 'X'],
        ['X', 'X', '.'],
        ['O', 'O', 'O'],
    ]
];

$n = intval($input[0]);

$output = [];

for ($i = 0; $i < $n; $i++) {
    $playerX = 0;
    $playerO = 0;
    $grid = $input[$i + 1];

    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 3; $col++) {
            if ($grid[$row][$col] === 'X') {
                $playerX++;
            } elseif ($grid[$row][$col] === 'O') {
                $playerO++;
            }
        }
    }

    if ($playerX - $playerO > 1 || $playerO - $playerX > 0) {
        $output[] = 'no';
    } else {
        $output[] = 'yes';
    }
}

echo implode("\n", $output);
