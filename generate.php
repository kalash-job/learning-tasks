<?php

namespace App\Solution;

function generate(int $rowNumber)
{
    // BEGIN (write your solution here)
    $currentRow = [1];
    $count = 0;
    for ($i = 0; $i <= $rowNumber; $i++) {
        $nextRow = [];
        for ($j = 0; $j <= $i; $j++) {
            $count++;
            $firstNum = $currentRow[$j - 1] ?? 0;
            $secondNum = $currentRow[$j] ?? 0;
            $nextRow[] = $firstNum + $secondNum;
        }
        $currentRow = $nextRow;
    }
    return $nextRow;
    // END
}

