<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getIn(array $data, array $keys)
{
    $path = $data;
    foreach ($keys as $key) {
        if (is_array($path)) {
            if (array_key_exists($key, $path)) {
                $path = $path[$key];
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
    return $path;
}
// END

