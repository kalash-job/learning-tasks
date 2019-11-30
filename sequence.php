<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function isContinuousSequence($array)
{
    $length = count($array);
    if ($length < 2) {
        return false;
    }
    for ($i = 0; $i < $length - 1; $i++) {
        if ($array[$i + 1] - $array[$i] !== 1) {
            return false;
        }
    }
    return true;
}
// END

