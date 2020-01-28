<?php

namespace App\Math;

// BEGIN (write your solution here)
function average(...$numbers)
{
    if (empty($numbers)) {
        return null;
    }
    return array_sum($numbers) / count($numbers);
}
// END

