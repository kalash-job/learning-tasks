<?php

namespace App\Solution;

// BEGIN (write your solution here)
function combine(...$col): array
{
    $result = [];
    foreach ($col as $array) {
        foreach ($array as $key => $value) {
            if (array_key_exists($key, $result)) {
                if (!in_array($value, $result[$key])) {
                    $result[$key][] = $value;
                }
            } else {
                $result[$key] = [$value];
            }
        }
    }
    return $result;
}
// END

