<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getIndexOfWarmestDay($coll)
{
    if (empty($coll)) {
        return null;
    }
    $max = $coll[0][0];
    $result = 0;
    foreach ($coll as $index => $innerArray) {
        foreach ($innerArray as $value) {
            if ($value >= $max) {
                $result = $index;
                $max = $value;
            }
        }
    }
    return $result;
}
// END

