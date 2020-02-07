<?php

namespace App\Points;

// BEGIN (write your solution here)
function calculateDistance(array $point1, array $point2)
{
    $cathetus1 = abs($point1[0] - $point2[0]);
    $cathetus2 = abs($point1[1] - $point2[1]);
    return sqrt($cathetus1 * $cathetus1 + $cathetus2 * $cathetus2);
}
// END

