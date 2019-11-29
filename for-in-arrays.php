<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function addPrefix($array, $prefix)
{
    $newArray = [];
    for ($i = 0, $length = count($array); $i < $length; $i++) {
        $newArray[$i] = "{$prefix} {$array[$i]}";
    }
    return $newArray;
}
// END
