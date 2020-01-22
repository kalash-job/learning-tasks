<?php

namespace App\Arrays;

function union(array $data1, array $data2)
{
    return array_unique(array_merge($data1, $data2));
}

// BEGIN (write your solution here)
function genDiff(array $data1, array $data2)
{
    $result = [];
    $unionKeys = union($data1, $data2);
    foreach ($unionKeys as $key => $value) {
        if (!array_key_exists($key, $data1)) {
            $result[$key] = 'added';
        } elseif (!array_key_exists($key, $data2)) {
            $result[$key] = 'deleted';
        } else {
            if ($data1[$key] === $data2[$key]) {
                $result[$key] = 'unchanged';
            } else {
                $result[$key] = 'changed';
            }
        }
    }
    return $result;
}
// END

