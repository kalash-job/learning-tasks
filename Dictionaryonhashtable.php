<?php

namespace App\Map;

// BEGIN (write your solution here)
function make(): array
{
    $newDictionary = [];
    return $newDictionary;
}

function set(&$map, $key, $value)
{
    $hashSum = crc32($key);
    $index = $hashSum % 1000;
    if (isset($map[$index])) {
        if ($map[$index][0] === $key) {
            $map[$index][1] = $value;
        } else {
            return false;
        }
    } else {
        $map[$index] = [$key, $value];
    }
    return true;
}

function get($map, $key, $defaultValue = null)
{
    $hashSum = crc32($key);
    $index = $hashSum % 1000;
    if (isset($map[$index])) {
        return $map[$index][1];
    } else {
        return $defaultValue;
    }
}
// END

