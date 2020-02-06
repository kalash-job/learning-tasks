<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function enlargeArrayImage($arr)
{
    return array_reduce($arr, function ($acc, $value) {
        $row = array_reduce($value, function ($accInner, $symbol) {
            $accInner[] = $symbol;
            $accInner[] = $symbol;
            return $accInner;
        }, []);
        $acc[] = $row;
        $acc[] = $row;
        return $acc;
    }, []);
}
// END

