<?php

namespace App\AssociativeArrays;

// BEGIN (write your solution here)
function fromPairs(array $pairs): array
{
    $result = [];
    foreach ($pairs as [$key, $value]) {
        $result[$key] = $value;
    }
    return $result;
}
// END

