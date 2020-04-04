<?php

namespace App\Solution;

// BEGIN (write your solution here)
function sumIntervals(array $intervals): int
{
    $result = [];
    foreach ($intervals as [$start, $end]) {
        for ($i = $start; $i < $end; $i++) {
            $result[] = $i;
        }
    }
    return count(array_unique($result));
}
// END

