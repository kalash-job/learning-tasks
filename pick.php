<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function pick(array $data, array $expectingKeys)
{
    $result = [];
    foreach ($expectingKeys as $value) {
        if (array_key_exists($value, $data)) {
            $result[$value] = $data[$value];
        }
    }
    return $result;
}
// END

