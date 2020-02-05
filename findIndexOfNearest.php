<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function findIndexOfNearest(array $coll, int $number)
{
    if (empty($coll)) {
        return null;
    }
    return array_reduce(array_keys($coll), function ($acc, $i) use ($coll, $number) {
        return abs($coll[$i] - $number) < abs($coll[$acc] - $number) ? $i : $acc;
    }, 0);
}
// END

