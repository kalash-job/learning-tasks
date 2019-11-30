<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function swap($array, $index)
{
    if ($index < 1 || $index > count($array) - 2) {
        return $array;
    }
    $temp = $array[$index + 1];
    $array[$index + 1] = $array[$index - 1];
    $array[$index - 1] = $temp;
    return $array;
}
// END
