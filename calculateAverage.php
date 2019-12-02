<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function calculateAverage($array)
{
    if (count($array) === 0) {
        return null;
    }
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum / count($array);
}
// END

