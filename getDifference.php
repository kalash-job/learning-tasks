<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getDifference(array $first, array $second): array
{
    $firstFiltered = array_filter($first, function ($value) use ($second) {
        return !in_array($value, $second);
    });
    return array_values($firstFiltered);
}
// END

