<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function without(array $coll, ...$exception): array
{
    $collFiltered = array_filter($coll, function ($value) use ($exception) {
        return !in_array($value, $exception);
    });
    return array_values($collFiltered);
}
// END

