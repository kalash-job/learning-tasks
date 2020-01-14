<?php

function rowSumOddNumbers($n)
{
    $currentRow = 1;
    $number = 1;
    $sum = 0;
    while ($currentRow <= $n) {
        for ($i = 1; $i <= $currentRow; $i++) {
            if ($n === $currentRow) {
                $sum += $number;
            }
            $number += 2;
        }
        $currentRow++;
    }
    return $sum;
}
