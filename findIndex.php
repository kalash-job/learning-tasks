<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function findIndex(array $array, $number): int
{
    $result = -1;
    if (empty($array)) {
        return $result;
    }
    foreach ($array as $key => $value) {
        if ($number === $value) {
            $result = $key;
            break;
        }
    }
    return $result;
}
// END

